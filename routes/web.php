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

Route::get('/', function () 
{
    return view('layouts.master');
});

Route::get('/nota', function () 
{
    return view('nota_pesanan.index');
});

Route::get('/dasbor', function () 
{
    return view('dasbor');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Route Master//
//CABANG//
Route::resource('cabangs','CabangController');
Route::get('/cabangs/create','CabangController@create');
Route::get('/cabangs/{id}/edit','CabangController@edit')-> name('editcabang');
Route::post('/cabangs/{id}/update', 'CabangController@update')-> name('updatecabang');
Route::post('/cabangs/{id}/delete', 'CabangController@destroy')->name('deletecabang'); 
//KARYAWAN//
Route::resource('users','KaryawanController');
Route::get('/users/create','KaryawanController@create');
Route::get('/users/{id}/edit','KaryawanController@edit')-> name('editkaryawan');
Route::post('/users/{id}/update', 'KaryawanController@update')-> name('updatekaryawan');
Route::post('/users/{id}/delete', 'KaryawanController@destroy')->name('deletekaryawan'); 
//PRODUK//
Route::resource('produks','ProdukController');
Route::get('/produks/create','ProdukController@create');
Route::get('/produks/{id}/edit','ProdukController@edit')-> name('editproduk');
Route::post('/produks/{id}/update', 'ProdukController@update')-> name('updateproduk');
Route::post('/produks/{id}/delete', 'ProdukController@destroy')->name('deleteproduk'); 
//JENIS PRODUK//
Route::resource('jenis_produks','JenisProdukController');
Route::get('/jenis_produks/create','JenisProdukController@create');
Route::get('/jenis_produks/{id}/edit','JenisProdukController@edit')-> name('editjenis');
Route::post('/jenis_produks/{id}/update', 'JenisProdukController@update')-> name('updatejenis');
Route::post('/jenis_produks/{id}/delete', 'JenisProdukController@destroy')->name('deletejenis'); 
//BAHAN BAKU//
Route::resource('bahan_bakus','BahanBakuController');
Route::get('/bahan_bakus/create','BahanBakuController@create');
Route::get('/bahan_bakus/{id}/edit','BahanBakuController@edit')-> name('editbb');
Route::post('/bahan_bakus/{id}/update', 'BahanBakuController@update')-> name('updatebb');
Route::post('/bahan_bakus/{id}/delete', 'BahanBakuController@destroy')->name('deletebb'); 
//PELANGGAN//
Route::resource('pelanggans','PelangganController');
Route::get('/pelanggans/create','PelangganController@create');
Route::get('/pelanggans/{id}/edit','PelangganController@edit')-> name('editpelanggan');
Route::post('/pelanggans/{id}/update', 'PelangganController@update')-> name('updatepelanggan');
//RESEP//
Route::resource('reseps','ResepController');
Route::get('/reseps/create','ResepController@create');
Route::get('/reseps/{id}/edit','ResepController@edit')-> name('editresep');
Route::post('/reseps/{id}/update', 'ResepController@update')-> name('updateresep');
Route::post('/reseps/{id}/delete', 'ResepController@destroy')->name('deleteresep'); 
/////////////////////////////////////////////////////////////////////////////////////
//End Route Master//


Route::resource('peramalans','PeramalanController');
Route::get('/peramalans/create','PeramalanController@create');


Route::resource('laporans','LaporanController');

Route::resource('notapesanans','NotaPesananController');

Route::resource('notapenjualans','NotaPenjualanController');
Route::get('/notapenjualans/getharga/{id}','NotaPenjualanController@getHarga')->name('nota.getharga');

Route::resource('notaproduksis','NotaProduksiController');
Route::get('/notaproduksis/create','NotaProduksiController@create')->name('createnotaproduksi');
Route::get('/notaproduksis/{id}/edit','NotaProduksiController@edit')-> name('editnotaproduksi');

Route::resource('penjadwalans','PenjadwalanController');

Route::resource('returs','ReturController');

Route::resource('homekasirs','HomeKasirController');