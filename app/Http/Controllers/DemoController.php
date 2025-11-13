<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemoController extends Controller
{
    function demoAction(Request $request):array{
        $name = $request->name;
        $age = $request->age;
        $pin = $request->header('pin');
        $city = $request->input('city');
        $postcode = $request->input('postcode');

        return array(
            "name" => $name,
            "age" => $age,
            "pin" => $pin,
            "city" => $city,
            "postcode" => $postcode
        );
    }
}
