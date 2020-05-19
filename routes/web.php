<?php

use App\Http\Controllers\MahasiswaController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Auth;
use GuzzleHttp\Client;

// $resp1 = Http::get('http://localhost/intipajak/api/pembayaran');
// dd($resp1->body());

// $this->resp1 = new Client([
//     $resp1 => 'http://localhost/intipajak/api/'
// ]);

// $response = $this->resp1->request('GET', 'pembayaran');
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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', 'MahasiswaController@index');
// Route::get('/mahasiswa/tambah', 'MahasiswaController@tambah');
// Route::get('/mahasiswa/detail/{id}', 'MahasiswaController@detail');
// Route::get('/mahasiswa/edit/{id}', 'MahasiswaController@edit');
// Route::get('/mahasiswa/hapus/{id}', 'MahasiswaController@hapus');
// Route::post('/mahasiswa/simpan', 'MahasiswaController@simpan');
// Route::post('/mahasiswa/update', 'MahasiswaController@update');


// Auth::routes();
// Route::get('/', 'MahasiswaController@index');
// // Route::get('/home', 'HomeController@index')->name('home');
// Route::resource('/admin/users', 'Admin\UsersController', ['except' => ['show', 'create', 'store']]);

// Route::get('/', function () {
//     return view('welcome');
// });

// Auth::routes();

// Route::middleware('auth')->group(function () {
//     Route::get('/home', 'HomeController@getAPI');

//     Route::get('/user', function () {
//         return view('home');
//     });
//     Route::get('/edit/{id}', 'HomeController@edit');
//     Route::get('/hapus/{id}', 'HomeController@hapus');
//     Route::post('/edit/update', 'HomeController@update');
// });

// new 

// Route::get('/', 'HomeController@getAPI');
// Route::get('/', 'HomeController@index');
Route::get('/', 'PajakController@index');
