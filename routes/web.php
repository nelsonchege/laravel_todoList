<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoListController;
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

Route::get('/', [TodoListController::class, 'index']);

Route::get('/showItem/{id}', [TodoListController::class, 'show'])->name('show');
Route::post('/saveItem', [TodoListController::class, 'saveItem'])->name('saveItem');
Route::get('/updatePage/{id}', [TodoListController::class, 'updatePage'])->name('updatePage');
Route::post('/updateItem/{id}', [TodoListController::class, 'updateItem'])->name('updateItem');
Route::get('/deleteItem/{id}', [TodoListController::class, 'deleteItem'])->name('deleteItem');
