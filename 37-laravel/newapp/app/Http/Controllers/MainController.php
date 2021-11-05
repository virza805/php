<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
    function allPeople(){
        // return ((array) DB::table('tname')->where('id', '>' , 1)->first());
        return ( DB::table('tname')
        ->select(['id', 'name'])
        ->where('id', '>' , 1)
        ->where('id', '<' , 3)
        ->orderBy('id', 'desc')
        ->limit(3)
        ->get() );

        // return (DB::select("select id, name from tname"));
    }

}
