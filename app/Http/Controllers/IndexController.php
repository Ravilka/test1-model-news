<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    //
	
	public function index() {
		$header = 'Hello';	
		$message = 'Данные главной новости!';
		return view('page')->with(['message'=>$message, 'header'=>$header]);
	}
}
