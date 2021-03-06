<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 2/1/2018
 * Time: 3:37 PM
 */

namespace App\Http\Controllers;


use App\Http\Controllers\Controller;
use App\Http\Controllers\Rest\CollectionCallController;

class DashboardController extends Controller
{
	
	public function __construct(CollectionCallController $print)
	{
		$this->middleware('checklogin');
	 	$this->getAPICol = $print;
	}


	public function dashboard()
	{
		//getDataAPICollection
		//echo $this->getAPICol->GetList();
		return view('pages/dashboard/index')->with('APICol',json_decode($this->getAPICol->GetList(),true));
	}
}