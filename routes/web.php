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
    return view('home');
})->name('home');

Route::get('/contractor-login', function () {
    return view('contractor-login');
})->name('contractor');

Route::get('/client-login', function () {
    return view('client-login');
})->name('client');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/news', function () {
    return view('news');
})->name('news');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/private-landlord', function () {
    return view('private-landlord');
})->name('privateLandlord');

Route::get('/social-housing', function () {
    return view('social-housing');
})->name('social-housing');

Route::get('/pubs', function () {
    return view('pubs');
})->name('pubs');

Route::get('/hotels', function () {
    return view('hotels');
})->name('hotels');

Route::get('/gyms', function () {
    return view('gyms');
})->name('gyms');

Route::get('/care-homes', function () {
    return view('care-homes');
})->name('careHomes');

Route::get('/support', function () {
    return view('support');
})->name('support');

Route::get('/student-accomodation', function () {
    return view('student-housing');
})->name('student');

Route::get('/news', function () {
    return view('news');
})->name('news');

Route::get('/news-article1', function () {
    return view('news1');
})->name('news1');

Route::get('/news-article2', function () {
    return view('news2');
})->name('news2');

Route::get('/news-article3', function () {
    return view('news3');
})->name('news3');

Route::get('/news-article4', function () {
    return view('news4');
})->name('news4');

Route::get('/book-demo', function () {
    return view('demo');
})->name('demo');

Route::post('/post-message', [App\Http\Controllers\MessageController::class, 'message'])->name('postMessage');


