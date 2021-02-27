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


Route::get('/', 'PageController@index')->name('index');
Route::get('/about', 'PageController@about')->name('about');
Route::get('/portfolio', 'PageController@portfolio')->name('portfolio');
Route::get('/portfolio-details/{id}', 'PageController@portfoliodetails')->name('portfolio_details');
Route::resource('/gallery', 'Frontend\GalleryController');
Route::get('/contact', 'Frontend\ContactController@contact')->name('contact');
Route::post('/message', 'Frontend\ContactController@store')->name('message');
Route::get('/career', 'Frontend\CareerController@index')->name('career');
Route::post('/job', 'Frontend\CareerController@job')->name('cv');

Auth::routes([
    'register' => false, // Registration Routes...
    'reset' => false, // Password Reset Routes...
    'verify' => false, // Email Verification Routes...
]);
Auth::routes(['register' => false]);
Route::get('/admin/dashboard', 'HomeController@index')->name('home');

Route::group(['prefix' => '/admin/', 'as' => 'admin.'], function () {
    Route::resource('/portfolio', 'Backend\PortfolioController');
    Route::get('/portfolio-details', 'Backend\PortfolioDetailsController@index')->name('portfolio.details');
    Route::post('/portfolio-store', 'Backend\PortfolioDetailsController@store')->name('portfolio.details.store');
    Route::post('/portfolio-destroy/{id}', 'Backend\PortfolioDetailsController@destroy')->name('portfolio.details.destroy');
    Route::get('/gallery', 'Backend\GalleryController@index')->name('gallery');
    Route::resource('/team', 'Backend\TeamController');
    Route::resource('/client', 'Backend\ClientController');
    Route::resource('/contact', 'Backend\ContactController');
    Route::resource('/feedback', 'Backend\FeedbackController');
    Route::resource('/newsletter', 'Backend\NewsletterController');
    Route::resource('/career', 'Backend\CareerController');
    Route::resource('/settings', 'Backend\UserController');
});
