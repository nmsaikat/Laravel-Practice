<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use Illuminate\Support\Facades\Log;

class DemoController extends Controller
{

    function demoaction(request $request):array {
        return $request->header();
    }
   
}
