<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OwnerController extends Controller
{
    public function index(Request $request){

        $user = session('user');
        return view('owner.dashboard');
    }


    public function vehicles(Request $request){
        return  null;
    }

    public function agreementsList(Request $request){
        return view('owner.pages.agreement_list');
    }

    public function agreementsCreation(Request $request){
        return view('owner.pages.agreement_creation');
    }


    public function driverRegistration(Request $request){

        return view('owner.pages.driver_reg');
    }

    public function driversList(Request $request){
        return view('owner.pages.drivers_list');
    }
    public function vehicleRegistration(Request $request){
        return view('owner.pages.vehicle_reg');
    }
    public function vehiclesList(Request $request){
        return view('owner.pages.vehicles_list');
    }

    public function loanRegistration(Request $request){
        return view('owner.pages.loan_reg');
    }

    public function loanList(Request $request){
        return view('owner.pages.loan_list');
    }
    public function paymentList(Request $request){

        return view('owner.pages.payments_list');
    }
    public function reports(Request $request){
        return view('owner.pages.reports');
    }
}
