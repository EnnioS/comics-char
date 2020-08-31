<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
	
    function index (){

    	$results = array();
    	return view('home',compact('results'));
    }
}
