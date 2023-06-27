<?php

use App\Http\Controllers\CityController;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\HotelController;
use App\Http\Controllers\PayController;
use App\Http\Controllers\PaymentMethodController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\RoomController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// my routes
// to create the routes we rely on the controllers

// route country
Route::resource('countries', CountryController::class)
    ->only(['index', 'store','show','update','destroy']);

// route city
Route::resource('cities', CityController::class )
    ->only(['index', 'store','show','update','destroy']);

// route hotel
Route::resource('hotels', HotelController::class )
    ->only(['index', 'store','show','update','destroy']);

// route room
Route::resource('rooms', RoomController::class )
    ->only(['index', 'store','show','update','destroy']);

// route customer
Route::resource('customers', CustomerController::class )
    ->only(['index', 'store','show','update','destroy']);

// route reservation
Route::resource('reservations', ReservationController::class )
    ->only(['index', 'store','show','update','destroy']);

// route payment method
Route::resource('payment_methods', PaymentMethodController::class )
    ->only(['index', 'store','show','update','destroy']);

// route pay
Route::resource('pays',PayController::class )
    ->only(['index', 'store','show','update','destroy']);