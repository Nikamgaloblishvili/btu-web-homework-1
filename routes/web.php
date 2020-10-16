<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PostsController;

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

Route::get('/', [PostsController::class, 'show']);
Route::get('/create', [PostsController::class, 'create']);
Route::post('/create', [PostsController::class, 'createPostRecord']);

Route::get('/delete/{id}', [PostsController::class, 'deleteById']);

Route::get('/update/{id}', [PostsController::class, 'update']);
Route::post('/update', [PostsController::class, 'updateRecord']);
