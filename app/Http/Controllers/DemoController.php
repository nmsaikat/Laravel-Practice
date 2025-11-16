<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemoController extends Controller
{
    function demoAction(Request $request):bool{
        if($request->accepts(['text/html'])){
            return true;
        }
        else{
            return false;
        }
    }
}
