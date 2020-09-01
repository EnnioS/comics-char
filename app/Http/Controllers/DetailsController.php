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
        $descriptions = array();

         $file = $chars->image->url;
        $file_headers = @get_headers($file);
        
        if(!$file_headers || $file_headers[0] == 'HTTP/1.1 404 Not Found') {
                    $descriptions['image'] = "img/back_no_pic_det.jpg";
                }else{
                    $descriptions['image'] = $chars->image->url; 
        }
        
        $descriptions['gender'] = $chars->appearance->gender;
        $descriptions['name'] = $chars->name;
        $descriptions['publish'] = $chars->biography->publisher;
        $descriptions['intelligence']= $chars->powerstats->intelligence;
        $descriptions['strength'] = $chars->powerstats->strength;
        $descriptions['power'] =$chars->powerstats->power;
        $descriptions['combat'] = $chars->work->occupation;
        $descriptions['race'] = $chars->appearance->race;
        $descriptions['work'] = $chars->work->occupation;
       
            


    	return view('details', compact('descriptions'));
    	
    	
	}
}
