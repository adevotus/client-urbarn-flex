<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DriverController extends Controller
{
    public function index(){

        return view('driver.dashboard');
    }

    public function payments(Request $request){
        return  null;
    }

    public function vehicleDetails(Request $request){
        return null;
    }
}
