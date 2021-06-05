<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Livewire\FrontBlogs;

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

//Route::view('/', 'home')->name('home');
Route::get('/', 'HomesController@show')->name('home');
Route::view('/about', 'about');
Route::get('/service', 'ServicesController@show');
Route::view('/contact', 'contact');

Route::get('blog/{urlslug}', 'FrontBlogsController@show');

Route::group([
    'middleware' => ['auth:sanctum', 'verified']
],function(){
    Route::get('/dashboard', function(){
        return view('dashboard');
    })->name('dashboard');

    Route::get('/services', function(){
        return view('admin.services');
    })->name('services');

    Route::get('/testimonials', function(){
        return view('admin.testimonials');
    })->name('testimonials');
    Route::get('/blogs', function(){
        return view('admin.blogs');
    })->name('blogs');
});

//Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//    return view('dashboard');
//})->name('dashboard');
