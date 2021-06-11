<?php

use App\Http\Controllers\todoController;
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

Route::get('/', [todoController::class, 'index']);
Route::post('/todo/create', [todoController::class, 'create']);
Route::post('/todo/update', [todoController::class, 'update']);
Route::post('/todo/delete', [todoController::class, 'delete']);
