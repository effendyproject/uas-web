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

//Route::view('/', 'home')->name('home');
Route::get('/', [\App\Http\Livewire\Testimonials::class, 'renderData']);
Route::view('/about', 'about');
Route::view('/service', 'service');
Route::view('/contact', 'contact');

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
});

//Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//    return view('dashboard');
//})->name('dashboard');
