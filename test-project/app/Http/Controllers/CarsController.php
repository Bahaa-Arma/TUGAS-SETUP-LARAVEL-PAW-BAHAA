<?php

namespace App\Http\Controllers;
use App\Models\Cars;

use Illuminate\Http\Request;

class CarsController extends Controller
{
    function index(){
        $cars = Cars::all();
        return view('Cars',['cars'=>$cars]);

    }
}
