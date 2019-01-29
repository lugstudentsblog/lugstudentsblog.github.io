<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VisitorController extends Controller
{
    function index(){
    	return view('index');
    }

    function signin(){
        return view('auth.signin');
    }

    function signup(){
        return view('auth.signup');
    }

    function resetPassword(){
        return view('auth.passwords.reset-password');
    }

    function events(){
    	return view('events');
    }

    function eventDetails(){
    	return view('eventdetails');
    }

    function clubs(){
    	return view('clubs');
    }

    function aboutClub(){
    	return view('aboutclub');
    }

    function blog(){
    	return view('blog');
    }

    function blogpost(){
    	return view('blogpost');
    }

    function aboutUs(){
    	return view('aboutus');
    }

    function thingsToDo(){
    	return view('thingstodo');
    }

}
