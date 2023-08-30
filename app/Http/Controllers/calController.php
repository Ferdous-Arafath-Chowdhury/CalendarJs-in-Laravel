<?php

namespace App\Http\Controllers;
use App\Models\Event;

use Illuminate\Http\Request;

class calController extends Controller
{
    // 
    public function index() 
    { 

        $schedules= Event::all();
     

        foreach ($schedules as $schedule)
        {
          

            $events[] = [
                'title'=> $schedule->title,
                'start' => $schedule->start_d,
                'end'=> $schedule->end_d,
            ];


        } 

        //  return $events;
        return view('calendar' ,['events' => $events]);
    }
}
