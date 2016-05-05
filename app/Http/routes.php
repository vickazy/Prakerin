<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the Routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


Route::get('/', 'rumahbelajarcontroller@index');
Route::get('/berita/{berita}/tampil',['as' => 'berita.tampil','uses' => 'rumahbelajarcontroller@tampilberita']);
Route::get('/kategori/{id}/tampil',['as' => 'kategori.tampil','uses' => 'rumahbelajarcontroller@tampilkategori']);
Route::get('/tentang', 'rumahbelajarcontroller@tentang');
Route::get('/kontak', 'rumahbelajarcontroller@kontak');
Route::get('/peta', 'rumahbelajarcontroller@peta');
Route::get('/aturan', 'rumahbelajarcontroller@aturan');
Route::get('/hasil', 'rumahbelajarcontroller@getNama');	

View::composer('rumahbelajar.sidebar', function ($view) {
$view->beritaterakhir = App\berita::orderBy('id', 'desc')->get();
$view->kategori = App\Kategori::all();
});

Route::model('berita','App\berita');
Route::model('kategori','App\Kategori');

Route::get('login', ['middleware' => 'guest', function(){
    return view('login');
}]);
Route::post('cek_Login', 'logincontroller@store');
Route::get('logout', 'logincontroller@logout');


Route::group(['middleware' => 'auth',], function(){
    resource('admin', 'admincontroller');
    resource('tambahadmin', 'crudadmincontroller');
    resource('tambahcontent', 'contentcontroller');
    resource('tambahberita','beritacontroller');
    resource('tambahlogo', 'logocontroller');
    resource('tambahslide', 'slidecontroller');
    resource('tambahkategori', 'kategoricontroller');
    resource('tambahmenu', 'menucontroller');
});

route::get('laravel', 'laravelcontroller@index');
