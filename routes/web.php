<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Str;
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

Route::get('/', 'FrontController@index')->middleware('setDeviceUuidCookie')->name('root');
Route::get('/getURLGenHistory', 'FrontController@getURLGenHistory');
Route::get('/removeURLGenHistory', 'FrontController@removeURLGenHistory');

Route::post('/registerAccount', 'AuthController@registerAccount');
Route::get('social-login/{provider}', 'SocialController@redirect');
Route::get('social-login/{provider}/callback','SocialController@Callback');
Route::post('/login', 'AuthController@login')->name('login');


Route::middleware(['auth'])->prefix('customer')->namespace('Customer')->group(function () {
    Route::get('/dashboard', 'DashboardController@dashboard')->name('dashboard');
    Route::get('/account', 'DashboardController@account');
    Route::post('/account', 'DashboardController@updateAccount');
    Route::get('/my-url-gens', 'DashboardController@myUrls');
    Route::get('/coming-soon', function(){
        return View('customer.coming-soon');
    });
    Route::get('/logout', 'DashboardController@logout');
    Route::get('/change-password', 'DashboardController@changePassword');
    Route::post('/change-password', 'DashboardController@updatePassword');
    // Route::post('/change-password', function(){
    //     dd('here');
    //     return response()->json(['status' => 'success', 'message' => 'Password changed successfully.'], 200);
    // });
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

//scheduler
Route::get('/trackingIpToGeoLocation', 'SchedulerController@trackingIpToGeoLocation');
