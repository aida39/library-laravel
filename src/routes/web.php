<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
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

Route::get('/', [BookController::class, 'index']);
Route::get('/add', [BookController::class, 'add']);
Route::post('/add', [BookController::class, 'create']);
Route::get('/edit', [BookController::class, 'edit']);
Route::post('/edit', [BookController::class, 'update']);
Route::get('/delete', [BookController::class, 'delete']);
Route::post('/delete', [BookController::class, 'remove']);
