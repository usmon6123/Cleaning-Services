<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/main', function () {
    return view('main');
})->name('main');
Route::get('/about', function () {
    return view('about');
})->name("about");

Route::get('/service', function () {
    return view('service');
})->name('service');

Route::get('/project', function () {
    return view('project');
})->name('project');

// Route::get('/blog', function () {
//     return view('blog');
// })->name('blog');

Route::get('/single', function () {
    return view('single');
})->name('single');
Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::resource('/post', PostController::class);
Route::resource('/comment', CommentController::class);
