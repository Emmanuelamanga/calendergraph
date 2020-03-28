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

// Route::get('/', function () {
//     return view('welcome');
// });  appid 350091ac-ef9a-49fe-aba5-d39c04621f02
// secret 8UwEqD]4eA5=2Af[/DnbGMN06_9zjJtz
Route::get('/', 'HomeController@welcome');

Route::get('/signin', 'AuthController@signin');
Route::get('/callback', 'AuthController@callback');

Route::get('/signout', 'AuthController@signout');

Route::get('/calendar', 'CalendarController@calendar');
