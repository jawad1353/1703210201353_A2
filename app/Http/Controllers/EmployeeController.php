<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

class EmployeeController extends Controller
{
    public function index(){
    	// fetch data from employees table
    	$employees = DB::table('employees')
    				->get();
    return view('employees', ['employees'=>$employees]);
    	// send the data to employees view
    }

    public function add(){
    	return view('add');
    }

    public function store(Request $req){
    	//$id=3;
    	$name = $req->name;
    	$email = $req->email;
    	$dob = $req->dob;

    	DB::table('employees')->insert(
    		[
    			//'id' => $id,
    			'name' => $name,
    			'email' => $email,
    			'dob' => $dob

    		]
    	);

    	return redirect()->to('employees');
    }
}
