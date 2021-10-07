<?php

use App\Http\Controllers\ChallengeController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\ClassroomController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\LessonController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\OrganizationController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\StyleController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\WelcomeController;
use App\Models\User;
use Facebook\Facebook;
use Facebook\Exceptions\FacebookResponseException;
use Facebook\Exceptions\FacebookSDKException;

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [WelcomeController::class, 'welcome'])->name('welcome');

Route::get('/auth/redirect', [LoginController::class,'redirectToFacebook']);
Route::get('/auth/callback', [LoginController::class, 'handleFacebookCallback']);


Route::get('mail', function(){
    // dd('hola');
    $access_token = 'EAA7kaPritSEBAHBZBgB8eL1ReZBcozBniwvZAlg8FX3rLl39wSgFA40ZC2ZCpvGOukZCPG7G5rrSRCFMXDWxEZCJj6IgkyceIa2SJsMTZAsMXEwg66Yq1XNX8BdyxHtcaP9Ha9LOQf4y8GtzLuwtz38TPIZBF2m5f5vU9mMPdtLqZA2hS5nf2nC9KTAIuODKUxglcA3xI7gjaNFwZDZD';
    $fb = new Facebook([
        'app_id' => config('services.facebook.app_id'),
        'app_secret' => config('services.facebook.app_secret'),
        'default_graph_version' => 'v5.0',        
        'default_access_token' => '{access-token}',
        'enable_beta_mode' => true,        
        // 'http_client_handler' => ['guzzle'],
        // 'persistent_data_handler' => 'memory',
            
    ]);

    $helper = $fb->getCanvasHelper();
    
    try {
        // Returns a `FacebookFacebookResponse` object
        $response = $fb->get('/1786045018242281?fields=cover', $access_token);
      } catch(FacebookResponseException $e) {
        echo 'Graph returned an error: ' . $e->getMessage();
        exit;
      } catch(FacebookSDKException $e) {
        echo 'Facebook SDK returned an error: ' . $e->getMessage();
        exit;
      }
      $graphNode = $response->getGraphNode();
      dd($graphNode);

    
    // $url = "https://graph.facebook.com/v11.0/1786045018242281?access_token={$access_token}";
    // $headers = array("Content-type: application/json");
    // $ch = curl_init();
    // curl_setopt($ch, CURLOPT_HEADER, $headers);
    // curl_setopt($ch, CURLOPT_URL, $url);
    // $st = curl_exec($ch);
    // $response = json_decode($st, true);
    // return $response->name;

});
// Route::get('/terms', [WelcomeController::class, 'terms'])->name('terms');
// Route::get('/policy', [WelcomeController::class, 'policy'])->name('policy');
Route::get('/events', [EventController::class, 'catalogue'])->name('events.catalogue');
Route::get('/event/{event}', [EventController::class, 'show'])->name('show.event');
Route::get('/course/{course}', [CourseController::class, 'show'])->name('show.course');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])->get('/schedule', function () {
    return view('schedule.index');
})->name('schedule');

Route::middleware(['auth'])->group(function(){
    Route::get('/courses', [CourseController::class, 'schedule'])->name('courses.schedule');
    
    Route::resource('admin/course', CourseController::class);
    Route::resource('admin/location', LocationController::class);
    Route::resource('admin/skill', SkillController::class);
    Route::resource('admin/transaction', TransactionController::class);
    Route::resource('admin/style', StyleController::class);
    Route::resource('admin/classroom', ClassroomController::class);
    Route::resource('admin/order', OrderController::class);
    Route::resource('admin/figure', FigureController::class);    
    Route::resource('admin/tag', TagController::class);
    Route::resource('admin/event', EventController::class);
    Route::resource('admin/post', PostController::class);
    Route::resource('admin/product', ProductController::class);
    Route::resource('admin/lesson', LessonController::class);
    Route::resource('admin/setting', 'SettingController');
    Route::resource('admin/city', CityController::class);
    Route::resource('admin/challenge', ChallengeController::class);
    Route::resource('admin/organization', OrganizationController::class);    
});


Route::mediaLibrary();