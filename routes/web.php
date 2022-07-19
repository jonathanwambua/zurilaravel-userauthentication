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

Route::get('/', [UserController::class, 'getUsers']);
Route::get('{id}/edit', [UserController::class, 'editUser']);
Route::put('user/{id}', [UserController::class, 'updateUser']);
Route::get('/{id}', [UserController::class, 'deleteUser']);
Route::post('/add', [UserController::class, 'createUser']);
Route::put('/add', [UserController::class, 'storeUser']);