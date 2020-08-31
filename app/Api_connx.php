<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use GuzzleHttp\Client;

class Api_connx extends Model
{

	static function searchCharacter($url,$criterial){
		 $client = new Client([
    		'base_uri' => 'https://superheroapi.com',
    		'timeout' => 2.0,
            'connect_timeout' => 2,
            'read_timeout' => 2,
            'timeout' => 2,
    	]);

    	$response = $client->request('GET', $url.'/'.$criterial);
        $res = $response->getBody()->getContents();
    	


    	return $res;
	}
   
}
