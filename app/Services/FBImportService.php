<?php

namespace App\Services;

use Facebook\Facebook;
use Facebook\Exceptions\FacebookResponseException;
use Facebook\Exceptions\FacebookSDKException;
use App\Services\FBLocationService;
use Carbon\Carbon;
use Illuminate\Support\Str;

class FBImportService 
{
    public $graphNode;   
    public $node;   
    public $cover;
    public string $name;
    public $description;
    public $start_date;
    public $start_time;
    public $end_time;
    public bool $isOnline;
    public string $timezone;
    public string $facebook_id;
    public bool $hasPlace;    
    public bool $hasCover;    
    public $place;


    public function __construct($fbID)
    {
        $token = auth()->user()->facebook_token;
        
        $fb = new Facebook([
            'app_id' => config('services.facebook.app_id'),
            'app_secret' => config('services.facebook.app_secret'),
            'default_graph_version' => 'v5.0',
            'default_access_token' => $token,
            'enable_beta_mode' => true,
        ]);

        $helper = $fb->getCanvasHelper();        

        try {
            $url = '/'. $fbID .'?fields=cover,name,place,start_time,end_time,is_online,timezone,description';                                
            $response = $fb->get($url, $token);   
            
            $this->graphNode = $response->getGraphNode();  
            $this->node = $response->getGraphNode()->asArray();  
            $this->name = $this->graphNode['name'];
            $this->description = $this->graphNode['description'];
            $this->start_date = $this->graphNode['start_time'];
            $this->start_time = $this->graphNode['start_time']->format('H:i:s');
            
            if (in_array('end_time',$this->graphNode->getFieldNames())) {
                $this->end_date = $this->graphNode['end_time'];
                $this->end_time = $this->graphNode['end_time']->format('H:i:s');
            } else {
                $this->end_date = $this->graphNode['start_time'];
                $this->end_time = '23:59:59';
            }
                        
            $this->timezone = $this->graphNode['timezone'];
            $this->isOnline = $this->graphNode['is_online'];
            $this->facebook_id = $this->graphNode['id'];
            $this->is_online = $this->graphNode['is_online'];
            $this->cover = $this->graphNode['cover']['source'];
            $this->place = $this->graphNode['place'] ?? null;
            
            $this->hasPlace = in_array('place',$this->graphNode->getFieldNames());
            $this->hasCover = in_array('cover',$this->graphNode->getFieldNames());
            
            if ($this->hasPlace) {
                $this->place = new FBLocationService($this->graphNode['place']);  
            }

        } catch (FacebookResponseException $e) {                
            echo 'Graph returned an error: ' . $e->getMessage();         
            dd($e);                            
            exit;
        } catch (FacebookSDKException $e) {            
            echo 'Facebook SDK returned an error: ' . $e->getMessage();
            dd($e);
            exit;
        }                     
    }

    public function getFBNode()
    {        
        return $this->node;
    }

    public function matchImport($event)
    {
        $event->name = $this->name;
        $event->slug = Str::slug($this->name, '-') . '-' . Carbon::now()->timestamp;
        $event->description = nl2br($this->description);
        $event->start_date = $this->start_date ?? '';
        $event->start_time = $this->start_time ?? '';
        $event->end_date = $this->end_date ?? '';
        $event->end_time = $this->end_time ?? '';
        $event->facebook_id = $this->facebook_id;
        $event->user_id = auth()->user()->id;
                
        if (!$this->isOnline && $this->hasPlace) {
            $place = new FBLocationService($this->graphNode['place']);
            
            if ($place->hasLocation && isset($place->location)) {
                $event->location_id = $place->location->id;                

                if ($place->hasCity) {            
                    $event->city_id = $place->location->city_id;
                }
            }

        }
    }
}

        
        
        
        
        



        //      
        
