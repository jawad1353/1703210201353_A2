<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    public function create(){
    	return view('add-student');
    }
}
