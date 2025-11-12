<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemoController extends Controller
{
    function demoAction(Request $request, $name, $age){
        // $name = $request->name;
        // $age = $request->age;
        return "My Name is ${name} & I am ${age} years old";
    }
}
