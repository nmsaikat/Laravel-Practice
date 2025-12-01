<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use Illuminate\Support\Facades\Log;

class DemoController extends Controller
{

    function demoaction1() {
        return "Hello1";
    }

    function demoaction2() {
        return "Hello2";
    }
}
