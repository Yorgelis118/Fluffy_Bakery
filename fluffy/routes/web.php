<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

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

 
// Route::middleware('guest')->group(function () {
//    Route::get('/', [AuthController::class, 'index'])->name('index');
//     Route::get('/login', [AuthController::class, 'login'])->name('login');
//     Route::post('/registrar', [AuthController::class, 'registrar'])->name('registrar');
//     Route::post('/logear', [AuthController::class, 'logear'])->name('logear');
// });

Route::get('/', function () {
    return view("user.index");
});
