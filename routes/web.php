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

//Route::get('/', function () {
//    return view('auth.login');
//});
Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);


Auth::routes();
Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);

Route::get('/projects', [App\Http\Controllers\ProjectController::class, 'index'])->name('projectIndex');
Route::get('/projects/create', [App\Http\Controllers\ProjectController::class, 'create'])->name('projectCreate');
Route::get('/projects/show\{id}', [App\Http\Controllers\ProjectController::class, 'show'])->name('projectShow');
Route::post('/projects/store', [App\Http\Controllers\ProjectController::class, 'store'])->name('projectStore');

Route::get('/users/show\{id}', [App\Http\Controllers\UserController::class, 'show'])->name('projectShow');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
