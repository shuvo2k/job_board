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

Route::get('/','HomeController@index')->name('home');

Auth::routes(['register' => false, 'login' => 'false']);


Route::get('/login/company', 'Auth\LoginController@showCompanyLoginForm')->name('company.login');
Route::get('/login/apllicant', 'Auth\LoginController@showApllicantLoginForm')->name('apllicant.login');
Route::get('/register/company', 'Auth\RegisterController@showCompanyRegisterForm')->name('company.register');
Route::get('/register/apllicant', 'Auth\RegisterController@showApllicantRegisterForm')->name('apllicant.register');

Route::post('/login/company', 'Auth\LoginController@companyLogin')->name('company.login.submit');
Route::post('/login/apllicant', 'Auth\LoginController@apllicantLogin')->name('apllicant.login.submit');
Route::post('/register/company', 'Auth\RegisterController@createCompany')->name('company.register.submit');
Route::post('/register/apllicant', 'Auth\RegisterController@createApllicant')->name('apllicant.register.submit');


Route::group(['as' => 'company.' ,'prefix' => 'company', 'namespace' => 'Company', 'middleware' => ['auth:company']], function () {
Route::get('/', 'Dashboard@index')->name('home');
Route::post('/job/submit', 'Dashboard@submitJob')->name('job.submit');
});


Route::group(['as' => 'apllicant.' ,'prefix' => 'apllicant', 'namespace' => 'Apllicant', 'middleware' => ['auth:apllicant']], function () {
Route::get('/', 'Dashboard@index')->name('home');
Route::post('/profile/update', 'Dashboard@profileUpdate')->name('profile.update');
});
