<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
Use App\Car;

class ListController extends Controller
{
    public static function index()
    {
        $cars = Car::all();
        return view('list', compact('cars'));
    }
}
