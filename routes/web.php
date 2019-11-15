<?php
Route::get('/harga','hargaController@index');
Route::post('/harga/store','hargaController@store');
Route::get('/harga/update','hargaController@updates');
Route::post('/harga/updates','hargaController@updates');
Route::get('/harga/hapus/{id}','hargaController@hapus');
Route::get('/home','homeController@homes');
Route::get('/Submenu', 'Submenucontroller@Submenu');
Route::post('/Submenu/store', 'SubmenuController@store');
Route::get('/Submenu/updates', 'SubmenuController@updates');
Route::get('/Submenu/hapus/{id}', 'SubmenuController@hapus');
Route::get('/Submenu/berita/{id}','SubmenuController@berita');
Route::get('/upload', 'UploadController@upload');
Route::get('/upload/hapus/{id}','UploadController@hapus');
Route::get('/upload/lihat/{id}','UploadController@lihat');
Route::get('/upload/edit/{id}','UploadController@edit');
Route::post('/upload/edit/update','UploadController@updates');
Route::post('/upload/proses', 'UploadController@proses_upload');

Route::post('/komentar', 'komentarController@index');
Route::post('/komentar/store','komentarController@store');
Route::get('/komentar/lihat/{id}','komentarController@updates');
Route::get('/komentar/hapus/{id}', 'komentarController@hapus');