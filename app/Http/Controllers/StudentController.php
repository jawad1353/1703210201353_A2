<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//using model
use App\Student;

class StudentController extends Controller
{
	public function index(){
		$student = Student::all(); // select * from students
		return view('students',['students'=>$student]);
	}
    public function add(){
    	return view('add-student');
    }

    public function create(Request $req){
    	$name = $req->name;
    	$email = $req->email;
    	$dob = $req->dob;

    	$obj = new Student();
    	$obj->name = $name;
    	$obj->email = $email;
    	$obj->dob = $dob;

    	if($obj->save()) {
    		echo 'successfully inserted';
    	}

    	// eloquent syntax
    }

    public function edit($id){
    	$student = Student::where('id','=', $id)
    						->first(); // select * from students where id=2
    return view('edit-student', ['student'=>$student]);
    }

    public function update($id, Request $request){
    	$student = Student::where('id','=', $id)
    						->first();
    	$student->name = $request->name;
    	$student->email = $request->email;
    	$student->dob = $request->dob;
    	if($student->save()){
    		return redirect()->to('students');
    	}
    }
}
