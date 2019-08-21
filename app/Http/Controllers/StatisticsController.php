<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
Use App\Car;

class StatisticsController extends Controller
{
    public static function index()
    {
        $countMazda = Car::where('brand','mazda')->count();
        $countToyota = Car::where('brand','toyota')->count();
        $countChevrolet = Car::where('brand', 'chevrolet')->count();
        $result = [$countMazda, $countToyota, $countChevrolet];
        return view('statistics', compact('result'));
    }
}
