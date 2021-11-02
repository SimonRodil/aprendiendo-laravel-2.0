<?php

use App\Http\Controllers\PostsControllers;
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

Route::get('/', function () {
    return view('welcome');
});

# Posts-Vistas
Route::get('posts', [PostsControllers::class, 'index']);
Route::get('posts/create', [PostsControllers::class, 'create']);
Route::get('posts/{post}/edit', [PostsControllers::class, 'edit']);

Route::post('posts', [PostsControllers::class, 'store']);
Route::put('posts/{post}', [PostsControllers::class, 'update']);
Route::get('posts/{post}/delete', [PostsControllers::class, 'delete']);