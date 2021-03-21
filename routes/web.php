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
//frontend routes
Route::get('/', 'FrontendController@getIndex');

//admin routes
Route::get('admin','AdminHomeController@index')->name('admin');
Route::group(['prefix'=>'admin'], function(){
    Route::get('register','Auth\Admin\RegisterController@showRegistrationForm')->name('admin.register');
    Route::post('register','Auth\Admin\RegisterController@register')->name('admin.register');
    Route::get('login','Auth\Admin\LoginController@showLoginForm')->name('admin.login');
    Route::post('login','Auth\Admin\LoginController@login')->name('admin.login');
    Route::post('logout','Auth\Admin\LoginController@adminLogout')->name('admin.logout');
    Route::get('logout','Auth\Admin\LoginController@adminLogout')->name('admin.logout');
    //password reset
    Route::get('password/reset', 'Auth\Admin\ForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
    Route::post('password/email', 'Auth\Admin\ForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
    Route::get('password/reset/{token}', 'Auth\Admin\ResetPasswordController@showResetForm')->name('admin.password.reset');
    Route::post('password/reset', 'Auth\Admin\ResetPasswordController@reset')->name('admin.password.update');
    //email verify
    Route::get('email/verify', 'Auth\Admin\VerificationController@show')->name('admin.verification.notice');
    Route::get('email/verify/{id}', 'Auth\Admin\VerificationController@verify')->name('admin.verification.verify');
    Route::get('email/resend', 'Auth\Admin\VerificationController@resend')->name('admin.verification.resend');
});



//user routes
Route::get('user', 'UserHomeController@index')->name('user');
Route::group(['prefix'=>'user'], function(){
    Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('user.register');
    Route::post('register', 'Auth\RegisterController@register');
    Route::get('login', 'Auth\LoginController@showLoginForm')->name('user.login');
    Route::post('login', 'Auth\LoginController@login');
    Route::post('logout', 'Auth\LoginController@userLogout')->name('user.logout');
    Route::get('logout', 'Auth\LoginController@userLogout')->name('user.logout');
    //password reset
    Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
    Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
    Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
    Route::post('password/reset', 'Auth\ResetPasswordController@reset')->name('password.update');
    //email verify
    Route::get('email/verify', 'Auth\VerificationController@show')->name('verification.notice');
    Route::get('email/verify/{id}', 'Auth\VerificationController@verify')->name('verification.verify');
    Route::get('email/resend', 'Auth\VerificationController@resend')->name('verification.resend');
});

