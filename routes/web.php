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
Route::get('/{uniqueId}', 'FrontController@redirectToLongUrl');
Route::get('/page/about', function () {
    return view('front.about');
});
Route::get('/page/contact', function () {
    return view('front.contact');
});
Route::get('/page/terms', function () {
    return view('front.terms');
});
Route::get('/page/privacy-policy', function () {
    return view('front.privacy');
});
Route::post('/generateShortenUrl', 'FrontController@generateShortenUrl');
