<?php

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

Route::get('/login', [\App\Http\Controllers\Auth\LoginController::class, 'showLoginForm']);
Route::post('/login', [\App\Http\Controllers\Auth\LoginController::class, 'login'])->name('login');


Route::group(['prefix' => 'panel', 'middleware' => ['auth']], function (){
    Route::get('/dashboard', [\App\Http\Controllers\DashboardController::class, 'dashboard'])->name('dashboard');
});
