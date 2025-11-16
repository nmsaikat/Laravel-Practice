<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemoController extends Controller
{
    function demoAction(Request $request):array|null|int|bool|string{
        return array(
            'city' => 'New York',
            'country' => 'USA',
            'status' => true,
            'population' => 8419600,
            'mayor' => null
        );
    }
}
