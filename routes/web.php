<?php

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

Route::get('/', [
	'uses' =>'MultiAuthHomeController@index',
	'as' => '/'
]);
Route::get('/check','AdminHomeController@check')->name('check');


Route::group(['prefix'=>'admin'], function(){
    Route::get('/','AdminHomeController@index')->name('admin');
    Route::get('/register','Admin\RegisterController@showRegistrationForm')->name('admin.register');
    Route::post('/register/','Admin\RegisterController@register')->name('admin.register');
    Route::get('/login','Admin\LoginController@showLoginForm')->name('admin.login');
    Route::post('/login','Admin\LoginController@login')->name('admin.login');
    Route::post('/logout','Admin\LoginController@adminLogout')->name('admin.logout');
    Route::get('/logout','Admin\LoginController@adminLogout')->name('admin.logout');
    //password reset
    Route::get('/password/reset', 'Admin\ForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
    Route::post('/password/email', 'Admin\ForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
    Route::get('/password/reset/{token}', 'Admin\ResetPasswordController@showResetForm')->name('admin.password.reset');
    Route::post('/password/reset', 'Admin\ResetPasswordController@reset')->name('admin.password.update');
    //email verify
    Route::get('email/verify', 'Admin\VerificationController@show')->name('admin.verification.notice');
    Route::get('email/verify/{id}', 'Admin\VerificationController@verify')->name('admin.verification.verify');
    Route::get('email/resend', 'Admin\VerificationController@resend')->name('admin.verification.resend');
});

Route::group(['prefix'=>'user'], function(){
    Route::get('/register', 'Auth\RegisterController@showRegistrationForm')->name('user.register');
    Route::post('/register', 'Auth\RegisterController@register');
    Route::get('/login', 'Auth\LoginController@showLoginForm')->name('user.login');
    Route::post('/login', 'Auth\LoginController@login');
    Route::get('/', 'UserHomeController@index')->name('user');
    Route::post('/logout', 'Auth\LoginController@userLogout')->name('user.logout');
    Route::get('/logout', 'Auth\LoginController@userLogout')->name('user.logout');
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