<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfitController extends Controller
{
    //

	public function __construct(){
		$this -> middleware('auth');
	}

	public function index(){
		return view('dashboards.layouts.profit.index');
	}

}
