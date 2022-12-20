<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Event;

class TestController extends Controller
{
    public function viewHomePage(){
        return view('home');
    }
    
    public function processForm(){
        return redirect()->route('home');
    }



    public function viewContactPage(){
        return view('contact');
    }
    public function viewOveronsPage(){
        return view('overons');
    }
    public function viewEventsPage(){
        $events = Event::all();
        return view('events', [
            'events' => $events, 
        ]);
    }
    public function viewAdminPage(){
        return view('admin');
    }
    public function viewAddEventPage(){
        return view('add-event-form');
    }


}
