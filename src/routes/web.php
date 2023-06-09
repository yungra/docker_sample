<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DepartmentController;

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

Route::get('/inquiry', [DepartmentController::class, 'inquiry'])->name('inquiry');
Route::post('/inquiry', [DepartmentController::class, 'send'])->name('inquiry.send');
Route::get('/index', [DepartmentController::class, 'index'])->name('inquiry.index');
