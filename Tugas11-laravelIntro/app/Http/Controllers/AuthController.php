<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function form (){
        return view(('register'));
    }
    public function welcome(Request $request){
        $fName=$request['fName'];
        $lName=$request['lName'];

        
        return view('welcome', ['fName' => $fName, 'lName' => $lName]);
    }
}
