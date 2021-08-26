<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TbAndalalinController;
use App\Http\Controllers\DbAdministratorController;

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

Route::get('/', [PagesController::class, 'index']);
Route::get('/about', [PagesController::class, 'about']);
Route::get('/info', [PagesController::class, 'info']);

Route::get('/users', [UserController::class, 'index'])->name('user.index');
Route::post('/users', [UserController::class, 'store']);
Route::get('/users/create', [UserController::class, 'create']);
Route::get('/users/{user}', [UserController::class, 'show']);
Route::delete('/users/{id}', [UserController::class, 'destroy']);
Route::put('/users/{id}', [UserController::class, 'update']);
Route::get('/users/{id}/edit', [UserController::class, 'edit']);

Route::get('/andalalin', [TbAndalalinController::class, 'index'])->name('admin.index');
Route::post('/andalalin', [TbAndalalinController::class, 'store']);
Route::get('/andalalin/create', [TbAndalalinController::class, 'create']);
Route::get('/admin', [TbAndalalinController::class, 'index2'])->name('admin.index');
Route::get('/admin/{id}', [TbAndalalinController::class, 'show'])->name('admin.show');
Route::put('/admin/{id}', [TbAndalalinController::class, 'update']);
Route::get('/admin/{id}/edit', [TbAndalalinController::class, 'edit']);