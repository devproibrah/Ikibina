<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IkibinaRegistrationController;
use App\Http\Controllers\activitycontroller;
use App\Http\Controllers\memberRegistratonController;
use App\Http\Controllers\memberController;
use App\Http\Controllers\debtcontroller;
use App\Http\Controllers\paymentcontroller;
use App\Http\Controllers\penalitycontroller;
use App\Http\Controllers\servicecontroller;


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

Route::resource('/ikibinaregistrationpage', IkibinaRegistrationController::class)->middleware('auth:sanctum');
Route::resource('/memberRegistration', memberRegistratonController::class)->middleware('auth:sanctum');
Route::resource('/activity', activitycontroller::class)->middleware('auth:sanctum');
Route::resource('/member', memberController::class)->middleware('auth:sanctum');
Route::resource('/debts', debtcontroller::class)->middleware('auth:sanctum');
Route::resource('/payment', paymentcontroller::class)->middleware('auth:sanctum');
Route::resource('/pentality', penalitycontroller::class)->middleware('auth:sanctum');
Route::resource('/service', servicecontroller::class)->middleware('auth:sanctum');

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
