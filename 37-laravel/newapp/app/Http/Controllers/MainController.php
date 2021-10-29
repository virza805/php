<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    function main(){
        return view("welcome");
    }
    function features(){
        return view("features");
    }
    function contact(){
        return view("contact");
    }
    // function sayHi(){
    //     return "hello world -> from the controller";
    // }
}
