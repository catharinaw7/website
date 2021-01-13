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
	Route::get('/','\App\Http\Controllers\Auth\LoginController@index')->name('login');
	Route::get('/index','PagesController@home');
	// Route::get('/pengeluaran','PengeluaranController@home')->middleware('auth');
	// Route::get('/pendapatan','PendapatanController@home')->middleware('auth');
	// Route::post('/pendapatan/store','PendapatanController@store')->middleware('auth');
	//Route::get('/login','PagesController@home')->middleware('auth');;
	Route::get('/register','RegisterController@home');
	//Route::get('/tabungan','TabunganController@home')->middleware('auth');
	Route::get('/grafik','PagesController@home')->middleware('auth');
	Route::get('/detailpendapatan','DetailController@pemasukan')->middleware('auth');
	Route::get('/detailpengeluaran','DetailController@pengeluaran')->middleware('auth');
	Route::get('/detailtabungan','DetailController@tabungan')->middleware('auth');
	Route::get('/detailkategori','DetailController@kategori')->middleware('auth');
	Route::get('/reminder','ReminderController@home')->middleware('auth');
	Route::get('/laporanperbandingan','ModelController@perbandingan')->middleware('auth');
	Route::resource('/laporanpengeluaranterbesar','LaporanPengeluaranTerbesarController',['middleware'=>'auth']);
	Route::resource('/laporanpemasukkanterbesar','LaporanPemasukkanTerbesarController',['middleware'=>'auth']);

	
	Route::post('/caripengeluaran', 'LaporanPengeluaranTerbesarController@cariPengeluaran')->middleware('auth');
	Route::post('/caripendapatan', 'LaporanPemasukkanTerbesarController@cariPemasukkan')->middleware('auth');
	
	Route::get('/login','LoginController@index')->name('login');
	Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');
	Route::resource('kategori','KategoriController',['middleware'=>'auth']);
	Route::resource('pendapatan','PendapatanController',['middleware'=>'auth']);
	Route::resource('pengeluaran','PengeluaranController',['middleware'=>'auth']);
	Route::get('/export-excelPengeluaran','PengeluaranController@exportexcel');
	Route::get('/export-excelPendapatan','PendapatanController@exportexcel');
	Route::get('/export-pdfPendapatan','PendapatanController@exportpdf');
	Route::resource('/tabungan','TabunganController',['middleware'=>'auth']);
	Route::resource('/updatetabungan','ProgressTabunganController',['middleware'=>'auth']);


Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
