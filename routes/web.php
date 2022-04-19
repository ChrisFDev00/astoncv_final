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

Route::get('/cvs', [\App\Http\Controllers\cvController::class, 'index']); //shows all cvs
Route::get('/cvs/{cv}', [\App\Http\Controllers\cvController::class, 'show']); //shows one cv

Route::get('/cvs/create/cv', [\App\Http\Controllers\cvController::class, 'create']); //shows form to create cv
Route::post('/cvs/create/cv', [\App\Http\Controllers\cvController::class, 'store']); //stores cv

Route::get('/cvs/{cv}/edit', [\App\Http\Controllers\cvController::class, 'edit']); //shows form to edit cv
Route::put('/cvs/{cv}/edit', [\App\Http\Controllers\cvController::class, 'update']); //updates cv

Route::delete('/cvs/{cv}', [\App\Http\Controllers\cvController::class, 'destroy']); //deletes cv
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
