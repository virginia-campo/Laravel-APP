<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    function addUser (Request $request) {
        $request->validate([
            "username"=>"required | min:3",
            "phone"=>"required | numeric | digits_between:3,12",
            "skills"=>"required | array"
        ]);
        // return $request->method();
        // return $request->only (['phone', 'username' , 'dob']);
        // return $request->except (['phone', 'username' , 'dob']);
        // return $request->input ('phone');
        // return $request->phone;
        // return $request->has('phone');
        // return $request->input('name', "guest");
        return $request;
    }

    function index () {
        $users = ["user01" , "user02" , "user03" , "user04"];
        return( view( 'user' , ['users' => $users] ));
    }
    function userHome () {
        return view ('home');
    }

    function userAbout () {
        return view ('about');
    }
}
