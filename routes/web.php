<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CatalogController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [MainController::class, 'index']);

Route::get('/catalog', [CatalogController::class, 'list']);
Route::get('/catalog/{product}', [CatalogController::class, 'item']);

Route::get('/post', [PostController::class, 'list']);
Route::get('/post/{translit}', [PostController::class, 'item']);
