<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    public function team($n){
          $names = ['jawad', 'bin', 'alam'];
    	 return view('team', ['name'=>$n, 'mynames'=>$names]);
    }
}
