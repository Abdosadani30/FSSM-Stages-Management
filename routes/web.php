<?php

// use ;
use Illuminate\Support\Facades\Route;


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

// Route::get('/home', function () {
//      return view('welcome');
// });
Route::get('/tables', function () {
    return view('tables');
});

Route::get('/', [App\Http\Controllers\StageController::class, 'index'])
    ->name('Stages.add');

Route::post('/Stages/store', [App\Http\Controllers\StageController::class, 'store'])
    ->name('Stages.store');

Auth::routes();