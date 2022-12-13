<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        return view('events');
    }
    public function viewAdminPage(){
        return view('admin');
    }
}
