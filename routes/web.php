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

Route::get('/', function () {
    return view('index');
});

Route::get('/foodAccomodation', [App\Http\Controllers\FoodandAccomodation::class, 'index'])->name('foodAccomodation');
Route::get('/gallery', [App\Http\Controllers\Gallery::class, 'index'])->name('gallery');
Route::get('/activities', [App\Http\Controllers\Activities::class, 'index'])->name('activities');
Route::get('/about-us', [App\Http\Controllers\AboutUs::class, 'index'])->name('about-us');
Route::get('/contact', [App\Http\Controllers\Contact::class, 'index'])->name('contact');



