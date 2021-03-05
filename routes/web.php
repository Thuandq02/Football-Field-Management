<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PitchController;
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
    return view('backend.home');
});
Route::prefix('/admin')->group(function (){
    Route::get('/home',[OrderController::class, 'show'])->name('home');
    Route::prefix('/customer')->group(function (){
        Route::get('/',[CustomerController::class, 'index'])->name('customer.list');
        Route::get('/create',[CustomerController::class, 'create'])->name('customer.create');
        Route::post('/create',[CustomerController::class, 'store'])->name('customer.store');
        Route::get('/edit/{id}',[CustomerController::class, 'edit'])->name('customer.edit');
        Route::post('/update/{id}',[CustomerController::class, 'update'])->name('customer.update');
        Route::get('/delete/{id}',[CustomerController::class, 'destroy'])->name('customer.delete');
        Route::post('/search',[CustomerController::class, 'search'])->name('customer.search');
    });
    Route::prefix('/pitche')->group(function (){
        Route::get('/',[PitchController::class, 'index'])->name('pitche.list');
        Route::get('/create',[PitchController::class, 'create'])->name('pitche.create');
        Route::post('/create',[PitchController::class, 'store'])->name('pitche.store');
        Route::get('/edit/{id}',[PitchController::class, 'edit'])->name('pitche.edit');
        Route::post('/update/{id}',[PitchController::class, 'update'])->name('pitche.update');
        Route::get('/delete/{id}',[PitchController::class, 'destroy'])->name('pitche.delete');
        Route::post('/search',[PitchController::class, 'search'])->name('pitche.search');
    });
});
