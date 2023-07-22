<?php

namespace App\Http\Controllers;
use App\Http\Controllers\ShalomController;
use Illuminate\Http\Request;

class ShalomControler extends Controller
{
     public function index() 
	 {
	   //  $var1 = $request->input('name');
	   //  $data = $request->all();  
		return view('index');
	}
}
