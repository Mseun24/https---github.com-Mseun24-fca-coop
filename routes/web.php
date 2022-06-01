<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('', [UserController::class, 'index']);
Route::post('/register', [UserController::class, 'userReg']);
Route::post('custom-registration', [UserController::class, 'customRegistration'])->name('register.custom');
Route::get('login', [UserController::class, 'userLog']);
Route::get('forgot', [UserController::class, 'pass']);
Route::post('get-pass', [UserController::class, 'getPass'])->name('get.pass');
Route::post('custom-login', [UserController::class, 'customLogin'])->name('login.custom');
