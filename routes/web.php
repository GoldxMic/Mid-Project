<?php

use App\Http\Controllers\PostController;
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
    Route::get('create', [PostController::class, 'create'])->name('post.create');
Route::prefix('posts')->group(function(){
    //Read
    Route::get('', [PostController::class, 'index'])->name('post.index');
    //Create
    Route::post('create', [PostController::class, 'store'])->name('post.store');
    //Edit
    Route::get('edit/{post:slug}', [PostController::class, 'edit'])->name('post.edit');
    Route::patch('update/{post:slug}', [PostController::class, 'update'])->name('post.update');
    //Delete
    Route::delete('delete/{post:slug}', [PostController::class, 'delete'])->name('post.delete');
    });
