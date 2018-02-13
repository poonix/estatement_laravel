<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 2/1/2018
 * Time: 3:37 PM
 */

namespace App\Http\Controllers\Rest;


use App\Http\Controllers\Controller;
use App\Http\ParameterAPI;
use App\Http\NameAPI;

use GuzzleHttp\Client;

class CollectionCallController extends Controller
{
	
	public function __construct()
	{
		$this->middleware('checklogin');
	}


	public function GetList()
	{
		//create an instance of Client wiht base url of the API
		$client = new Client(['base_uri' => ParameterAPI::$APICollection]);

		// Send a GET request to http:127.0.0.1/path/to/api/ 
		// and method name is apiName 
		// with api authentication (username and password)
		/*
		$response = $client->request('GET', 'apiName', [
		                 'auth' => ['username', 'password']
		                 ]);
		*/
		// check the response by
		$response = $client->request('GET', NameAPI::$GetListCollection);  
		$status =  $response->getStatusCode(); 
		if($status == 200)
		{
			$buffer =  $response->getBody()->getContents(); 	
			return $buffer;
		}else {
			return 'error_api';
		}   
		/*                 	
		dd($response);

		// Get the response status code
		dd($response->getStatusCode());
		// Get the response phase
		dd($response->getReasonPhrase());
		// Get all/full header
		dd($response->getHeaders());
		// Get specific specific entity of header, 
		// here we retrive content-type
		dd($response->getHeader('content-type'));
		// Get api content. it return the main content the we need
		dd($response->getBody()->getContents());
		*/
	}

	public function GetListDataPembiayaan($id)
	{
		//create an instance of Client wiht base url of the API
		$clientA = new Client(['base_uri' => ParameterAPI::$APIPembiayaan]);

		// Send a GET request to http:127.0.0.1/path/to/api/ 
		// and method name is apiName 
		// with api authentication (username and password)
		/*
		$response = $client->request('GET', 'apiName', [
		                 'auth' => ['username', 'password']
		                 ]);
		*/
		// check the response by
		$response = $clientA->request('GET', NameAPI::$GetListDataPembiayaan.$id);  
		$status =  $response->getStatusCode(); 
		if($status == 200)
		{
			$buffer =  $response->getBody()->getContents(); 	
			return $buffer;
		}else {
			return 'error_api';
		}   
	}
}