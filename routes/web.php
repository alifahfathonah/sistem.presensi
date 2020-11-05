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
// - - - - - - - - - - -   USER   - - - - - - - - - - -//
Route::get('/', function () {
    $data = App\Posting::take(1)->orderBy('id', 'DESC')->get();
    return view('pages.front.home', ['data' => $data]);
});
//konfirmasi
Route::post('/konfirmasi', 'konfirController@store');

//pendaftaran
Route::get('/pendaftaran', 'AuthController@register');
Route::post('/pendaftaran', 'AuthController@postregister');

//qrcode_cek
Route::get('/qrcodecek', 'qrcodeController@index');
Route::post('/qrcodecek/cek', 'qrcodeController@store');
Route::get('/qrcodecek/tampil/{id}', 'qrcodeController@show')->middleware('auth');


// - - - - - - - - -   ADMINISTRATOR   - - - - - - - - - - -//
Route::get('/administrator', 'AdminController@administrator');
//data peserta
route::get('/datapeserta', 'pesertaController@index');

route::post('/datapeserta/{id}/update', 'pesertaController@update');
route::get('/datapeserta/{id}/delete', 'pesertaController@destroy');

//data konfirmasi
route::get('/datakonfirmasi', 'konfirController@index');
route::get('/datakonfirmasi/sesi', 'konfirController@show');

//data presensi
route::get('/datapresensi', 'presensiController@index');
route::get('/datapresensi/create', 'presensiController@create');
route::get('/datapresensi/{id}/delete', 'presensiController@destroy');

//posting info kajian
route::get('/posting', 'postingController@index');
route::post('/posting', 'postingController@create');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
