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
Route::get('/', 'MainController@main')->name('main');





Auth::routes();


Route::group(['middleware' => 'auth'],function(){
// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/shopedit/{id}', 'MainController@shopedit')->name('shopedit');

// 違反登録
Route::get('/viol/{id}', 'MainController@viol')->name('viol');


Route::get('/home', 'HomeController@index')->name('home');

Route::resource('user','UserController');

Route::get('/delte/{user}','UserController@delete')->name('delete');

Route::get('/shopdetale/{id}','ReviewsController@Shopdetale')->name('shopdetale');

// post_list用
Route::get('/status/{id}','ReviewsController@Status')->name('status');
// 店舗管理
Route::get('/manager/{id}','ShopsController@manager')->name('manager');


Route::resource('reviews','ReviewsController');

Route::resource('shops','ShopsController');

Route::resource('violation','ViolationController');

});  