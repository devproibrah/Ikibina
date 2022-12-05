<?php

use App\Http\Controllers\activitycontroller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IkibinaRegistrationController;
use App\Http\Controllers\memberController;
use App\Http\Controllers\servicecontroller;
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

Route::get('/register', [IkibinaRegistrationController::class, 'create']);
Route::get('/registermember', [memberController::class, 'createttwo']);
Route::post('/register/one', [IkibinaRegistrationController::class, 'store']);
Route::post('/register/two', [memberController::class, 'storetwo']);
Route::get('/login/one', [IkibinaRegistrationController::class, 'loginikibinaregistration']);
Route::get('/regtableview', [IkibinaRegistrationController::class, 'displayIbibina']);
Route::get('/regtableviewTwo', [memberController::class, 'displayIbibinaTwo']);
Route::get('/regtableviewUbubiko', [memberController::class, 'displayIbibinaThree']);
Route::get('/servicestableview', [servicecontroller::class, 'index']);
Route::get("/ikibinaReg", [IkibinaRegistrationController::class, 'registration']);
Route::get('/hello', [activitycontroller::class, 'hello']);
Route::get('/AdminDashboard', function () {
    return view('welcome');
});
Route::get('/Home', function () {
    return view('Home');
});

Route::get('/fogetPassword', function () {
    return view('fogetPassword');
});

Route::get('/', function () {
    return view('loginPage');
});
