<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemoController extends Controller
{
    //DemoAction Function
    function sessionPut(Request $request) : bool {
        $request->session()->put("userEmail",$request->email);
        return true;
    }
    function sessionPull(Request $request) : string {
        return $request->session()->pull("userEmail","default");
       
    }
    function sessionForget(Request $request) : bool {
        $request->session()->forget($request->email);
        return true;
    }
    function sessionfluesh(Request $request) : bool {
        $request->session()->flash($request->email);
        return true;
    }
    function home() : string {
        return "home";
    }
    function home2() : string {
        return "home2";
    }
}
