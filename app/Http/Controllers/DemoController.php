<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use Illuminate\Support\Facades\Log;

class DemoController extends Controller
{

    function demo(request $request):int{
        $num1 = $request -> num1;
        $num2 = $request -> num2;
        $sum = $num1 + $num2;

        log::emergency($sum);
        return $sum;
    }
}
