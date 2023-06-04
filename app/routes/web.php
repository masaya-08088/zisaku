<?php


use Illuminate\Support\Facades\Route;

use App\Http\controllers\UserController;
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
Auth::routes();

Route::group(['middleware' => 'auth'],function(){
// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/home', 'HomeController@index')->name('home');

Route::resource('user','UserController');
Route::get('/delte/{user}','UserController@delete')->name('delete');

Route::resource('reviews','ReviewsController');

Route::resource('shops','ShopsController');

Route::resource('violation','ViolationController');

});  