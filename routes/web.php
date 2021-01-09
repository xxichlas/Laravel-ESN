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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


Route::group(['middleware' => 'auth'], function () {
    //Peserta 
    Route::get('/peserta', 'PesertaController@index')->middleware(['permission:editpeserta']);
    Route::get('/peserta/{peserta}/ubah', 'PesertaController@edit')->middleware(['permission:editpeserta']);
    Route::patch('/peserta/{peserta}', 'PesertaController@update')->middleware(['permission:editpeserta']);
    Route::delete('/peserta/{peserta}', 'PesertaController@destroy')->middleware(['permission:editpeserta']);   

    //Akun
    Route::get('/akun', 'AkunController@index')->middleware(['permission:editakun']);
    Route::get('/akun/{akun}/ubah', 'AkunController@edit')->middleware(['permission:editakun']);
    Route::patch('/akun/{akun}', 'AkunController@update')->middleware(['permission:editakun']);
    Route::delete('/akun/{akun}', 'AkunController@destroy')->middleware(['permission:editakun']);

    //Hasil Saintek
   
    Route::get('/hasilsaintek', 'HasilSaintekController@index')->middleware(['permission:edithasil']);
    
    //Hasil Soshum
  
    Route::get('/hasilsoshum', 'HasilSoshumController@index')->middleware(['permission:edithasil']);

    //Sertifikat
    Route::get('/sertifikat', 'SertifikatController@index')->middleware(['permission:editsertifikat']);
    Route::get('/sertifikat/{sertifikat}/ubah', 'SertifikatController@edit')->middleware(['permission:editsertifikat']);
    Route::patch('/sertifikat/{sertifikat}', 'SertifikatController@update')->middleware(['permission:editsertifikat']);
});








require __DIR__.'/auth.php';
