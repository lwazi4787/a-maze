<?php

use App\Http\Controllers\articlesController;
use App\Http\Controllers\userController;
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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', [articlesController::class, 'index']);


//Article Controller Routes
Route::get('/articles', [articlesController::class, 'articles']);
Route::get('/articles/create', [articlesController::class, 'create']);
Route::post('/store', [articlesController::class, 'store']);
Route::get('/articles/{id}/edit', [articlesController::class, 'edit']);
Route::put('/articles/{id}/update', [articlesController::class, 'update']);
Route::get('/articles/categories/{category}', [articlesController::class, 'category']);
Route::delete('articles/{id}/delete', [articlesController::class, 'delete']);
Route::get('/articles/{id}', [articlesController::class, 'article']);

//User Controller Routes
Route::get('/register', [userController::class, 'register']);
Route::post('/user/create', [userController::class, 'create']);
Route::get('/login', [userController::class, 'login']);
Route::post('/user/login', [userController::class, 'access']);
Route::post('/logout', [userController::class, 'logout']);
