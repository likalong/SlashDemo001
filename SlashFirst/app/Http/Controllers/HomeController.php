<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    
	public function Home(){
		return view('002getting.Home');
	}
	public function NewsAndEvent(){
		return view('002getting.News');
	}
	public function ContactUs(){
	    return view('002getting.Contact_Us');
    }
    public  function  QuoteRequest(){
        return view('002getting.QuoteRequest');
    }
}
