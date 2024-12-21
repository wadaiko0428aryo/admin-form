<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AdminController;

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

Route::get('/laravel', function () {
    return view('welcome');
});

Route::get('/', [ContactController::class , 'index']);
Route::post('/contact/confirm', [ContactController::class , 'confirm']);
Route::post('/contact', [ContactController::class , 'store']);

Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');

Route::get('/register' , [ContactController::class , 'register']);
Route::get('/login' , [ContactController::class , 'login']);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
