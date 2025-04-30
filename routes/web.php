<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NinjaController;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('welcome');
});
Route::post('/logout',[AuthController::class,'logout'])->name('logout');

Route::middleware('guest')->controller(AuthController::class)->group(function(){
    Route::get('/register')->name('show.register');
    Route::get('/login')->name('show.login');
    Route::post('/register')->name('register');
    Route::post('/login')->name('login');

});

Route::middleware('auth')->controller(NinjaController::class)->group( function () {
    Route::get('/ninjas/create')->name('ninjas.create');
    Route::post('/ninjas' )->name('ninjas.store');
    Route::delete('/ninjas/{ninja}')->name('ninjas.destroy');
});
Route::get('/ninjas', [NinjaController::class, 'index'])->name('ninjas.index');
Route::get('/ninjas/{ninja}', [NinjaController::class, 'show'])->name('ninjas.show');
