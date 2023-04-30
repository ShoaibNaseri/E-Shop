<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\front;

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

Route::get('/', 'front\HomeController@index')->name('home');
Route::get('/app', function () {
    return view('front.app');
});

// fronEnd Routes




// Admin Routes
Route::get('/admin', 'cms\AdminAuthController@loginPage')->name('adminLoginPage');
Route::get('/admin/register', 'cms\AdminAuthController@register')->name('adminRegisterPage');
Route::post('/admin/login', 'cms\AdminAuthController@login')->name('adminLogin');
Route::post('/admin/store', 'cms\AdminAuthController@store')->name('adminStore');
Route::get('/admin/dashboard', 'cms\AdminController@index')->name('adminDashboard');
Route::get('/admin/logout', 'cms\AdminAuthController@logout')->name('adminLogout');





// Admin University Routes


Route::middleware('auth:admin')->group(function () {


    // Admin FrontEnd Routees 
    Route::resource('admin/slider', 'cms\SliderController');
    Route::resource('admin/about', 'cms\AboutController');
    Route::resource('admin/contact', 'cms\ContactController');
    Route::resource('admin/team', 'cms\TeamController');
    Route::resource('admin/service', 'cms\ServiceController');
    Route::resource('admin/category', 'cms\CategoryController');
    Route::resource('admin/product', 'cms\ProductController');
    Route::resource('admoin/about', 'cms\AboutController');
});


//Fornt-End Routes

Route::get('/', 'front\HomeController@index')->name('home');
Route::get('/front/product', 'front\ProductController@index')->name('frontProduct');
Route::get('/front/contact', 'front\ContactController@index')->name('frontContact');
Route::get('/front/about', 'front\AboutController@index')->name('frontAbout');
Route::get('/front/searchByCategory/{id}', 'front\ProductController@searchByCategory')->name('searchByCategory');
