<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\JsonResponse;

class DemoController extends Controller
{
    function demoAction(Request $request):JsonResponse{
        $code = 300;
        $content = array(
            'city' => 'New York',
            'postcode' => '10001',
        );

        return response()->json($content, $code);
    }
}
