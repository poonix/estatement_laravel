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


class NasabahController extends Controller
{
	
	public function __construct(CollectionCallController $print)
	{
		$this->middleware('checklogin');
	 	$this->getAPICol = $print;
	}


	public function index($id,$nama)
	{
		//getDataAPICollection
		//echo $this->getAPICol->GetList();
		return view('pages/nasabah/index')
				->with('IdNasabah',str_replace('_',' ', $id))
				->with('NamaNasabah',str_replace('_',' ', $nama))
				->with('APICol',json_decode($this->getAPICol->GetListDataPembiayaan($id),true));

	}
}