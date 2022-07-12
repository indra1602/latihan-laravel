<?php

use App\Http\Controllers\wargaController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
//     return view('login');
// });

Route::middleware(['auth'])->group(function(){
    Route::get('/warga', [wargaController::class,'index'])->name('warga');
    Route::get('/warga/create', [wargaController::class,'create']);
    Route::post('/warga/store', [wargaController::class,'store']);
    Route::get('/warga/{id}/edit', [wargaController::class,'edit']);
    Route::put('/warga/{id}', [wargaController::class,'update']);
    Route::delete('/warga/{id}', [wargaController::class,'destroy']);
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
