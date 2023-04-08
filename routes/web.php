<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ResumeController;
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
    return view('cv.index');
});

Route::get('login/', [AuthController::class, 'index'])->name('login')->middleware('guest');
Route::get('register/', [AuthController::class, 'register'])->name('register')->middleware('guest');
Route::post('register/store', [AuthController::class, 'store'])->middleware('guest');
Route::get('index/', [ResumeController::class, 'index']);

Route::scopeBindings()->middleware('auth')->group(function()
{
    Route::get('admin/', [AdminController::class, 'index']);
    Route::get('admin/profile', [AdminController::class, 'profile']);
});



