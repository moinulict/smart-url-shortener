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
    return view('front.index');
});
Route::get('/about', function () {
    return view('front.about');
});
Route::get('/contact', function () {
    return view('front.contact');
});
Route::get('/terms', function () {
    return view('front.terms');
});
Route::get('/privacy-policy', function () {
    return view('front.privacy');
});
Route::get('/disclaimer', function () {
    return view('front.disclaimer');
});
Route::get('/unlocking-the-power-of-URLGen:-your-ultimate-URL-shortening-solution', function () {
    return view('front.blog-1');
});
Route::post('/blogs', function(){
    return view('front.blogs');
});
Route::post('/contact', 'FrontController@postContact');

Route::get('/{uniqueId}', 'FrontController@redirectToLongUrl');
Route::post('/generateShortenUrl', 'FrontController@generateShortenUrl');
