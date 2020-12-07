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

//Presensi user
route::get('/presensi', 'presensiController@login');
route::post('/presensi/login', 'presensiController@postlogin');
route::get('/scan', 'presensiController@presensi');
route::post('/presensi/submit', 'presensiController@store');
route::get('/presensi/logout', 'presensiController@logout');


// - - - - - - - - -   ADMINISTRATOR auth  - - - - - - - - - - -//
Route::group(['middleware'=>['auth']], function(){
	route::get('/administrator', 'AdminController@administrator');
	route::get('/administrator/profile/{id}', 'AdminController@profile')->name('admin-profile');
	route::post('/administrator/profile/update/{id}', 'AdminController@updateprofile');
	route::get('/administrator/profile/destroy/{id}', 'AdminController@destroy');
	route::get('/logout', 'AdminController@logout');
	//data peserta
	route::get('/datapeserta', 'pesertaController@index')->name('datapeserta');

	route::get('/datapeserta/show/{id}', 'pesertaController@show');
	route::get('/datapeserta/delete/{id}', 'pesertaController@destroy');

	//data konfirmasi
	route::get('/datakonfirmasi', 'konfirController@index');
	route::get('/datakonfirmasi/sesi', 'konfirController@show');

	//data presensi
	route::get('/datapresensi', 'presensiController@index');
	route::get('/datapresensi/sesi', 'presensiController@show');

	//posting info kajian
	route::get('/posting', 'postingController@index');
	route::post('/posting/store', 'postingController@store');
	route::get('/posting/edit/{id}', 'postingController@edit');
	route::post('/posting/update/{id}', 'postingController@update');
	route::get('/posting/delete/{id}', 'postingController@destroy');

	//menu presensi kajian
	route::get('/presensikajian', 'presensiController@presensikajian');
	route::get('/presensikajian/qrcode', 'presensiController@qrcodegenerator');

	//menu data admin
	route::get('/data-admin', 'AdminController@index');
});

// - - - - - - - - -   ADMINISTRATOR guest  - - - - - - - - - - -//
Route::group(['middleware'=>['guest']], function(){
	route::get('/reg-admin', 'AdminController@regindex');
	route::post('/reg-admin/post', 'AdminController@postreg');
	route::get('/login-admin', 'AdminController@logindex')->name('login');
	route::post('/login-admin/post', 'AdminController@postlogin');
});
