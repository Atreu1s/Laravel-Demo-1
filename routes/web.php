<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ApplicationController;
use App\Models\Application;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function(){return view('main');})->name('main');
Route::get('/login', [UserController::class, 'login'])->name('login');
Route::get('/reg', [UserController::class, 'reg'])->name('reg');
Route::post('/auth', [UserController::class, 'auth'])->name('auth');

Route::middleware('auth')->group(function(){
    Route::get('/client',[ClientController::class, 'index'])->name('client.index');
    Route::post('/logout', [UserController::class, 'logout'])->name('logout');
    Route::get('/client/app', [ApplicationController::class, 'newApp'])->name('client.new_app');
    Route::post('/client/app/store', [ApplicationController::class, 'store'])->name('client.store');

    Route::group(['middleware'=> 'admin'],function(){
        Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');
        Route::patch('admin/app/{id}/confirm', [ApplicationController::class, 'confirm'])->name('app.confirm');
        Route::patch('admin/app/{id}/cancel', [ApplicationController::class, 'cancel'])->name('app.cancel');
    });
});


Route::post('/user/store', [UserController::class, 'store'])->name('user.store');
//Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');
