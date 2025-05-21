<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProfileController;
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


Route::get('/', [ResumeController::class, 'index']);

Route::get('login/', [AuthController::class, 'index'])->name('login');
Route::post('logout/', [AuthController::class, 'logout'])->name('logout');
Route::post('login/sign', [AuthController::class, 'login'])->name('login.sign');
Route::get('register/', [AuthController::class, 'register'])->name('register');
Route::post('register/store', [AuthController::class, 'store'])->name('register.store');

Route::scopeBindings()->middleware('auth')->prefix('admin')->name('admin.')->group(function()
{
    Route::get('/', [AdminController::class, 'index'])->name('index');
    Route::resource('profile', ProfileController::class)->except(['create']);
    Route::get('get-profile', [ProfileController::class, 'getProfile'])->name('get-profile');
});
