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

Route::get('/', function () {
    $data = App\Posting::take(1)->orderBy('id', 'DESC')->get();
    return view('pages.front.home', ['data' => $data]);
});
Route::post('/konfirmasi', 'konfirController@store2');

Route::get('/pendaftaran', 'AuthController@register');
Route::post('/pendaftaran', 'AuthController@postregister');

Route::get('/qrcodecek', 'qrcodeController@index');
Route::post('/qrcodecek/cek', 'qrcodeController@store');
Route::get('/qrcodecek/tampil/{id}', 'qrcodeController@show')->middleware('auth');

Route::get('/administrator', 'AdminController@administrator');

route::get('/datapeserta', 'pesertaController@index');

route::post('/datapeserta/store2', 'profileController@store');
route::post('/datapeserta/store', 'pesertaController@store');

route::post('/datapeserta/{id}/update', 'pesertaController@update');
route::get('/datapeserta/{id}/delete', 'pesertaController@destroy');

route::get('/datakonfirmasi', 'konfirController@index');
route::get('/datakonfirmasi/create', 'konfirController@create');
route::post('/datakonfirmasi/store', 'konfirController@store');
route::post('/datakonfirmasi/{id}/update', 'konfirController@update');
route::post('/datakonfirmasi/{id}/delete', 'konfirController@destroy');

route::get('/datapresensi', 'presensiController@index');
route::get('/datapresensi/create', 'presensiController@create');
route::get('/datapresensi/{id}/delete', 'presensiController@destroy');

route::get('/posting', 'postingController@index');
route::post('/posting', 'postingController@create');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
