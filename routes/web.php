<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use Inertia\Inertia;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [MainController::class, 'home']);
Route::get('/profile', [MainController::class, 'profile']);

// Route::resource('dashboard', ChirpController::class)
//     ->only(['home', 'profile'])
//     ->middleware(['auth', 'verified']);