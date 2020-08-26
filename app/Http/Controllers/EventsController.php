<?php

namespace App\Http\Controllers;

use App\Event;
use Illuminate\Http\Request;

class EventsController extends Controller
{
    public function index(){

        $events = \App\Event::all();
        
        //return $events;

        return view('events.index', compact('events'));
    }


    public function create(){

        return view('events.create');
    }

    public function show(Event $event)
    {   
        
        

        return view('events.show',compact('event'));
        
    }

    public function edit(Event $event) 
    {
        
        
        return view('events.edit',compact('event'));
        
    }

    public function update(Event $event)
    {   
       
        $event->update(request(['title','description']));

        //$event->title = request('title');
        //$event->description = request('description');

        //$event->save();

        return redirect('/events');

        
    }

    public function destroy(Event $event)
    {
        
        $event-> delete();
        return redirect('/events');
        
    }

    public function store(){


        $attributes = request()->validate([
            'title' => ['required','min:3'],
            'description' => ['required', 'min:3']
        ]);

        Event::create($attributes);

        //$event = new Event();

        //$event->title = request('title');
        //$event->description = request('description');
        
        //$event->save();

        return redirect('/events');
    }

    
    //
}
