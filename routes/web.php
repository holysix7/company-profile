<?php

use App\Http\Controllers\HomeController;
use App\Http\Middleware\Authenticate;
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

Route::group(['middleware' => 'checksession'], function () {
  Route::get('/', 'Controller@index')->name('landingPage');
  // Route::get('/login', 'Auth\LoginController@login')->name('login');
});

Route::group(['middleware' => 'checkauth'], function () {
  Route::get('/logout', 'Auth\LoginController@logout')->name('logout');
  Route::get('/insert-batch/rpermission/{applicationId}/{type}', 'DashboardController@insert_batch')->name('batching');
  Route::get('/insert-batch/permission/{permissionId}', 'DashboardController@insert_batch_permission')->name('batching-permission');
});
