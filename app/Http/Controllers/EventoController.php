<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //return view('evento.index');
        $all_events = Event::all();

        $events=[];
        foreach($all_events as $event){
                $event[]=[
                    'title'=>$event->event,
                    'start'=>$event->start_date,
                    'end'=>$event->end_date,
                ];

        }
        return view('home',compact('events'));
    }

}
