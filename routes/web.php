<?php

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

Route::get('/', [\App\Http\Controllers\PostController::class, 'index']);
Route::get('post/detail/{id}', [\App\Http\Controllers\PostController::class, 'getPost']);
Route::post('post/rate', [\App\Http\Controllers\PostController::class, 'rate']);

Route::group(['middleware' => 'auth'], function()
{
    Route::get('/post/create',[\App\Http\Controllers\PostController::class,'create']);

    Route::post('/post/store',[\App\Http\Controllers\PostController::class,'store'])->name('post.store');

    Route::get('/post/edit/{post}',[\App\Http\Controllers\PostController::class,'edit']);
    Route::post('/post/edit/{post}',[\App\Http\Controllers\PostController::class,'update'])->name('post.update');

    Route::get('/post/list',[\App\Http\Controllers\PostController::class,'list'])->name('posts.list');
    Route::get('post/delete/{id}',[\App\Http\Controllers\PostController::class,'delete'])->name('post.delete');
});

Route::get('/login', [\App\Http\Controllers\AuthController::class, 'index']);
Route::post('/login', [\App\Http\Controllers\AuthController::class, 'login'])->name('login');

Route::get('logout',function(){

    Auth::logout();

    return redirect('/login');

});






