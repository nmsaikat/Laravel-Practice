<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemoController extends Controller
{
    function demoAction(Request $request):string{
        $name = $request->header('name');
        $age = $request->header('age');
        return "My Name is ${name} and I am ${age} years old.";
    }
}
