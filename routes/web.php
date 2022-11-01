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

Route::get('/', [\App\Http\Controllers\Auth\LoginController::class, 'showLoginForm']);
Route::post('/login', [\App\Http\Controllers\Auth\LoginController::class, 'login'])->name('login');
Route::post('/logout', [\App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');


Route::group(['prefix' => 'panel', 'middleware' => ['auth']], function (){
    Route::get('/dashboard', [\App\Http\Controllers\DashboardController::class, 'dashboard'])->name('dashboard');

    //Child registration
    Route::get('/child-registration', [\App\Http\Controllers\UserController::class, 'index'])->name('child_registration');
    Route::post('/child-registration', [\App\Http\Controllers\UserController::class, 'store'])->name('child_registration_store');

    Route::get('/change-password', [\App\Http\Controllers\Auth\ChangePasswordController::class, 'changePassword'])->name('change_password');
    Route::post('/update-password', [\App\Http\Controllers\Auth\ChangePasswordController::class, 'updatePassword'])->name('update_password');

    Route::get('/change-pin', [\App\Http\Controllers\Auth\ChangePasswordController::class, 'changePin'])->name('change_pin');
    Route::post('/update-pin', [\App\Http\Controllers\Auth\ChangePasswordController::class, 'updatePin'])->name('update_pin');

    Route::get('/agent/reset-pin-pass', [\App\Http\Controllers\Auth\ChangePasswordController::class, 'agentPinPassChange'])->name('agent_pin_pass_reset');
});
