<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MotorController;


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


//Route::get('/', [MotorController::class, 'index'])->name('index');
//
//Route::get('motor/{motor}', [MotorController::class, 'edit'])->name('motor.edit');
//
//Route::patch('update/{motor}', [MotorController::class, 'update'])->name('motor.update');
//
//Route::delete('delete/{motor}', [MotorController::class, 'destroy'])->name('motor.destroy');
//
//Route::view('add', 'motor.add')->name('motor.create');
//
//Route::post('create', [MotorController::class, 'store'])->name('motor.store');

Route::get('/',function (){
    return redirect()->route('motor.index');
});

Route::resource('motor', MotorController::class);
Route::resource('user', UserController::class);


