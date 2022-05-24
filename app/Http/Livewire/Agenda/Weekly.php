<?php

namespace App\Http\Livewire\Agenda;

use App\Models\City;
use App\Models\Event;
use Carbon\Carbon;
use Carbon\CarbonImmutable;
use Livewire\Component;

class Weekly extends Component
{
    public City $city;

    public function mount($city)
    {
        $this->city = $city;
    }

    public function render()
    {
        $week = CarbonImmutable::now();
        $events = Event::inCity($this->city->id)->whereBetween('start_date',[$week->startOfWeek(), $week->endOfWeek()])->orderBy('start_date','asc')->get();
        
        return view('livewire.agenda.weekly', [
            'mondays' => $events->where(function($query) use ($week){
                return $this->checkDay($query, Carbon::MONDAY, $week);  
            }),
            'tuesdays' => $events->where(function($query) use ($week){                                
                return $this->checkDay($query, Carbon::TUESDAY, $week);
            }),
            'wednesdays' => $events->where(function($query) use ($week) {                           
                return $this->checkDay($query, Carbon::WEDNESDAY, $week);
            }),
            'thursdays' => $events->where(function($query) use ($week) {
                return $this->checkDay($query, Carbon::THURSDAY, $week);
            }),
            'fridays' => $events->where(function($query)  use ($week) {
                return $this->checkDay($query, Carbon::FRIDAY, $week);
            }),
            'saturdays' => $events->where(function($query) use ($week) {
                return $this->checkDay($query, Carbon::SATURDAY, $week);
            }),
            'sundays' => $events->where(function($query) use ($week){
                return $this->checkDay($query, Carbon::SUNDAY, $week);
            }),
            'week' => $week,
        ]);
    }

    public function checkDay($query, $day, $week)
    {
        $firstDay = $query->start_date->dayOfWeek;
        $lastDay = $query->end_date->dayOfWeek;
        
        if ($firstDay == $day) {
            return $query;
        }
        if ($lastDay == $day) {
            if ($query->end_date->format('H:i') > '10:00') {
                return $query;
            }
        }

        if ($week->weekday($day)->between($query->start_date, $query->end_date))
        {
            return $query;
        }
    }
}
