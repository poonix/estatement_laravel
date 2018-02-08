<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 2/1/2018
 * Time: 3:37 PM
 */

namespace App\Http\Controllers;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
	
	public function __construct()
	{
		$this->middleware('checklogin');
	}

	public function dashboard(Request $request)
	{
		$value = $request->session()->get('nama');
		return view('pages/dashboard/dashboard',['name'=>$value]);
	}
}