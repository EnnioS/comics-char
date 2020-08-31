<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Api_connx;

class DetailsController extends Controller
{


    function detailPage(Request $request){

    	$criterial= $request->id;
		$url= 'api/10157955793449332';
	 	
    	$chars = Api_connx::searchCharacter($url,$criterial);
    	
	    	$chars = json_decode(($chars));
            

    	return view('details', compact('chars'));
    	
    	
	}
}
