<?php

use App\Http\Controllers\DriverController;
use App\Http\Controllers\OwnerController;
use App\Http\Controllers\SSOLoginController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/sso-login',[SSOLoginController::class,'ssoLogin'])->name('sso-login');

Route::middleware('check.sso')->group(function () {

    Route::post('/logout',[SSOLoginController::class,'ssoLogout'])->name('logout');

    // Owner routes
    Route::prefix('owner')->name('owner.')->group(function () {
        Route::get('/dashboard', [OwnerController::class, 'index'])->name('dashboard');
        Route::get('/vehicles', [OwnerController::class, 'vehicles'])->name('vehicles');
        Route::get('/agreements_list', [OwnerController::class, 'agreementsList'])->name('agreements_list');
        Route::get('/agreements_creation', [OwnerController::class, 'agreementsCreation'])->name('agreements_creation');
        Route::get('/driver_registration',[OwnerController::class, 'driverRegistration'])->name('driver_registration');
        Route::get('/drivers_list', [OwnerController::class, 'driversList'])->name('drivers_list');
        Route::get('/vehicle_registration',[OwnerController::class, 'vehicleRegistration'])->name('vehicle_registration');
        Route::get('/vehicles_list', [OwnerController::class, 'vehiclesList'])->name('vehicles_list');

        Route::get('/loan_list', [OwnerController::class, 'loanList'])->name('loan_list');
        Route::get('/loan_assign', [OwnerController::class, 'loanRegistration'])->name('loan_registration');
        Route::get('/payments_list', [OwnerController::class, 'paymentList'])->name('payments_list');
        Route::get('/reports', [OwnerController::class, 'reports'])->name('reports');
    });


    // Driver routes
    Route::prefix('driver')->name('driver.')->group(function () {
        Route::get('/dashboard', [DriverController::class, 'index'])->name('dashboard');
        Route::get('/payments', [DriverController::class, 'payments'])->name('payments');
        Route::get('/vehicle-details', [DriverController::class, 'vehicleDetails'])->name('vehicle.details');
    });


});

Route::get('/', function () {
    return view('welcome');
});
