<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{

public function index(){
	return 'ID is :';
}

public function display(){
	return view('student',['name1'=>'Dana','name2'=>'Damir']);
}
public function display($date){
	return view('student')->with('date',$date);
}
public function display($age){
	return view('student?,compact('age'));
		}}




}

