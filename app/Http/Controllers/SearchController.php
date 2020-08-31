<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Api_connx;

class SearchController extends Controller
{

    
    public function search_by_name(Request $request){
    	 if (!empty($request->input('input_search'))){
            $url= 'api/10157955793449332/search';
    	 	
    		$criterial = $request->input('input_search');
	    	$chars = Api_connx::searchCharacter($url,$criterial);

	    	$chars = json_decode(($chars));
            $chars = $chars->results;


            $results = array();
            $i=0;

            foreach ($chars as $key => $value) {
                
                $file = $value->image->url;
                $file_headers = @get_headers($file);
               
                if(!$file_headers || $file_headers[0] == 'HTTP/1.1 404 Not Found') {
                    $results[$i]['img'] = "img/backg_no_pic.jpg";
                }else{
                    $results[$i]['img'] = $value->image->url; 
                }
                
                $results[$i]['gender'] = $value->appearance->gender;
                $results[$i]['id'] = $value->id;
                $results[$i]['name'] = $value->name;
               $i++;
            }

	    	
	    	return view('home', compact('results'));
    	}
    	
    }
}



    	
