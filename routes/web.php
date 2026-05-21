<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\OrderController::class, 'index'])->name('home');
Route::get('/dish', [App\Http\Controllers\DishesController::class, 'index']);


//close route
Auth::routes([
    'resgister' => 'false',
    'verify' => 'false',
    'reset' => 'false',
    'comfirm' => 'false',
]);