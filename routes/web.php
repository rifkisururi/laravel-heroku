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

Auth::routes();

Route::middleware('role:admin|user')->get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');
// Route::middleware('role:admin|user')
// falidasi yang bisa masuk yang mempunyai role sebagia xxx

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/user', [App\Http\Controllers\UserController::class, 'index'])->name('user');

Route::post('/barang', [App\Http\Controllers\BarangController::class, 'store'])->name('barangPost');
// Route::resource('/user', 'UserController');
