<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
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

Route::view('form', 'denver');
Route::post('user', [UserController::class, 'addEmployee']);

Route::get('employee', [UserController::class, 'getEmployee']);

Route::get('edit/{id}', [UserController::class, 'getEmployeeById']);

Route::get('try1/{hehe}', function($hehe){
    return $hehe."hello World";
});