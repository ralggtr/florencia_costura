<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\CustomerController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/datatable', function () {
    return view('customersdt');
});

Route::get('/customer/create', [CustomerController::class, 'create']);

Route::get('/customer/{customer}',[CustomerController::class,'show']);

Route::get('/customer', [CustomerController::class, 'index']);

Route::post('/customer',[CustomerController::class,'store']);

Route::get('/customer/{customer}/edit', [CustomerController::class,'edit']);

Route::put('/customer/{customer}',[CustomerController::class,'update']);

Route::delete('customer/{id}',[CustomerController::class,'destroy'])
     ->name('customer.destroy');                   //EJEMPLO ROUTE MODEL BINDING 19/MAR/2021


