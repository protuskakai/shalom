<?php

namespace App\Http\Controllers;
use App\Http\Controllers\ShalomController;
use Illuminate\Http\Request;

class ShalomController extends Controller
{
     public function index() 
	 {
	   //  $var1 = $request->input('name');
	   //  $data = $request->all();  
		return view('index');
	}
	 public function services() 
	 {
	//	echo " Services";
	   //  $var1 = $request->input('name');
	   //  $data = $request->all();  
		return view('services');
	}
	 public function gallary() 
	 {
		//echo " gallery";
	   //  $var1 = $request->input('name');
	   //  $data = $request->all();  
		return view('gallary');
	}
	public function contacts() 
	 {
		//echo " contacts";
	   //  $var1 = $request->input('name');
	   //  $data = $request->all();  
		return view('contacts');
	}
}
