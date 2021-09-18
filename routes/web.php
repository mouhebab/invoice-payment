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

/*Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::group(['middleware' => 'auth'], function() {
    Route::get('/', 'HomeController@dashboard')->name('home');
});


require app_path('routes/Auth.php');
require app_path('routes/ClientRoutes.php');
require app_path('routes/ProductRoutes.php');
require app_path('routes/InvoiceRoutes.php'); 
Route::prefix('invoice')->namespace('Invoice')->name('invoice.')->group(base_path('routes/InvoiceRoutes.php'));
Route::prefix('client')->namespace('Client')->name('client.')->group(base_path('routes/ClientRoutes.php'));
Route::prefix('product')->namespace('Product')->name('product.')->group(base_path('routes/ProductRoutes.php'));
Route::prefix('auth')->namespace('Auth')->name('auth.')->group(base_path('routes/Auth.php'));
*/
Route::get('/', 'HomeController@dashboard')->name('home');
Route::prefix('invoice')->namespace('Invoice')->name('invoice.')->group(base_path('routes/InvoiceRoutes.php'));
Route::prefix('client')->namespace('Client')->name('client.')->group(base_path('routes/ClientRoutes.php'));
Route::prefix('product')->namespace('Product')->name('product.')->group(base_path('routes/ProductRoutes.php'));
Route::prefix('auth')->namespace('Auth')->name('auth.')->group(base_path('routes/Auth.php'));