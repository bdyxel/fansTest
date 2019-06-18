<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class YyController extends Controller
{
    function reg(){
        $str = "Hello Word";
        
        return view('users/welcome',["str"=>$str]);
    }
}
