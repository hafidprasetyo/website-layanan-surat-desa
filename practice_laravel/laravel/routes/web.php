<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\CheckLoginMiddleware;
use App\Http\Middleware\Authenticate;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SuratSatuController;
use App\Http\Controllers\SuratDuaController;
use App\Http\Controllers\SuratEmpatController;
use App\Http\Controllers\SuratLimaController;
use App\Http\Controllers\SuratEnamController;
use App\Http\Controllers\SuratTujuhController;
use App\Http\Controllers\SuratDelapanController;
use App\Http\Controllers\SuratSembilanController;
use App\Http\Controllers\SuratSepuluhController;
use App\Http\Controllers\SuratSebelasController;
use App\Http\Controllers\SuratDuabelasController;
use App\Http\Controllers\SuratTigabelasController;
use App\Http\Controllers\SuratEmpatbelasController;
use App\Http\Controllers\SuratLimabelasController;
use App\Http\Controllers\SuratEnambelasController;
use App\Http\Controllers\SuratTujuhbelasController;
use App\Http\Controllers\SuratDelapanbelasController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminLTEController;


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

//TampilanUser
Route::get('/user', 'UserController@index')->name('user.index');
Route::get('user/kontak', 'UserController@contact')->name('userlte.contact');

//UserSuratSatu
Route::get('/user/suratpendaftaranperistiwakependudukan', 'UserController@create')->name('SuratSatu.create');
Route::post('/SuratSatu', 'SuratSatuController@store')->name('SuratSatu.store');
Route::get('/suratpendaftaranperistiwakependudukan/admin', 'SuratSatuController@index')->name('SuratSatu.index')->middleware('login_auth');
Route::get('/SuratSatu/{SuratSatu}', 'SuratSatuController@show')->name('SuratSatu.show')->middleware('login_auth');
Route::delete('/SuratSatu/{SuratSatu}', 'SuratSatuController@destroy')->name('SuratSatu.destroy')->middleware('login_auth');
Route::get('/user/selesai', 'SuratSatuController@index1')->name('SuratSatu.index1');
Route::get('/suratsatu/admin/status/{id}','SuratSatuController@status')->name('SuratSatu.status');

//UserSuratDua
Route::get('/user/suratpendaftaranperpindahankependudukan', 'UserController@create2')->name('SuratDua.create');
Route::post('/SuratDua', 'SuratDuaController@store')->name('SuratDua.store');
Route::get('/suratpendaftaranperpindahankependudukan/admin', 'SuratDuaController@index')->name('SuratDua.index')->middleware('login_auth');
Route::get('/SuratDua/{SuratDua}', 'SuratDuaController@show')->name('SuratDua.show')->middleware('login_auth');
Route::delete('/SuratDua/{SuratDua}', 'SuratDuaController@destroy')->name('SuratDua.destroy')->middleware('login_auth');
Route::get('/user/suratdua/selesai', 'SuratDuaController@index1')->name('SuratDua.index1');
Route::get('/suratdua/admin/status/{id}','SuratDuaController@status')->name('SuratDua.status');
//UserSuratTiga

//UserSuratEmpat
Route::get('/user/suratkelahiran', 'UserController@create4')->name('SuratEmpat.create');
Route::post('/SuratEmpat', 'SuratEmpatController@store')->name('SuratEmpat.store');
Route::get('/suratkelahiran/admin', 'SuratEmpatController@index')->name('SuratEmpat.index')->middleware('login_auth');
Route::get('/SuratEmpat/{SuratEmpat}', 'SuratEmpatController@show')->name('SuratEmpat.show')->middleware('login_auth');
Route::delete('/SuratEmpat/{SuratEmpat}', 'SuratEmpatController@destroy')->name('SuratEmpat.destroy')->middleware('login_auth');
Route::get('/user/suratempat/selesai', 'SuratEmpatController@index1')->name('SuratEmpat.index1');
Route::get('/suratempat/admin/status/{id}','SuratEmpatController@status')->name('SuratEmpat.status');

//UserSuratLima
Route::get('/user/suratkematian', 'UserController@create5')->name('SuratLima.create');
Route::post('/SuratLima', 'SuratLimaController@store')->name('SuratLima.store');
Route::get('/suratkematian/admin', 'SuratLimaController@index')->name('SuratLima.index')->middleware('login_auth');
Route::get('/SuratLima/{SuratLima}', 'SuratLimaController@show')->name('SuratLima.show')->middleware('login_auth');
Route::delete('/SuratLima/{SuratLima}', 'SuratLimaController@destroy')->name('SuratLima.destroy')->middleware('login_auth');
Route::get('/user/suratlima/selesai', 'SuratLimaController@index1')->name('SuratLima.index1');
Route::get('/suratlima/admin/status/{id}','SuratLimaController@status')->name('SuratLima.status');

//UserSuratEnam
Route::get('/user/suratketeranganpengantar', 'UserController@create6')->name('SuratEnam.create');
Route::post('/SuratEnam', 'SuratEnamController@store')->name('SuratEnam.store');
Route::get('/suratketeranganpengantar/admin', 'SuratEnamController@index')->name('SuratEnam.index')->middleware('login_auth');
Route::get('/SuratEnam/{SuratEnam}', 'SuratEnamController@show')->name('SuratEnam.show')->middleware('login_auth');
Route::delete('/SuratEnam/{SuratEnam}', 'SuratEnamController@destroy')->name('SuratEnam.destroy')->middleware('login_auth');
Route::get('/user/suratenam/selesai', 'SuratEnamController@index1')->name('SuratEnam.index1');
Route::get('/suratenam/admin/status/{id}','SuratEnamController@status')->name('SuratEnam.status');
Route::get('/getData','SuratEnamController@getData');

//UserSuratTujuh
Route::get('/user/suratketeranganijinsuamiistri', 'UserController@create7')->name('SuratTujuh.create');
Route::post('/SuratTujuh', 'SuratTujuhController@store')->name('SuratTujuh.store');
Route::get('/suratketeranganijinsuamiistri/admin', 'SuratTujuhController@index')->name('SuratTujuh.index')->middleware('login_auth');
Route::get('/SuratTujuh/{SuratTujuh}', 'SuratTujuhController@show')->name('SuratTujuh.show')->middleware('login_auth');
Route::delete('/SuratTujuh/{SuratTujuh}', 'SuratTujuhController@destroy')->name('SuratTujuh.destroy')->middleware('login_auth');
Route::get('/user/surattujuh/selesai', 'SuratTujuhController@index1')->name('SuratTujuh.index1');
Route::get('/surattujuh/admin/status/{id}','SuratTujuhController@status')->name('SuratTujuh.status');

//UserSuratDelapan
Route::get('/user/suratketeranganusaha', 'UserController@create8')->name('SuratDelapan.create');
Route::post('/SuratDelapan', 'SuratDelapanController@store')->name('SuratDelapan.store');
Route::get('/suratketeranganusaha/admin', 'SuratDelapanController@index')->name('SuratDelapan.index')->middleware('login_auth');
Route::get('/SuratDelapan/{SuratDelapan}', 'SuratDelapanController@show')->name('SuratDelapan.show')->middleware('login_auth');
Route::delete('/SuratDelapan/{SuratDelapan}', 'SuratDelapanController@destroy')->name('SuratDelapan.destroy')->middleware('login_auth');
Route::get('/user/suratdelapan/selesai', 'SuratDelapanController@index1')->name('SuratDelapan.index1');
Route::get('/suratdelapan/admin/status/{id}','SuratDelapanController@status')->name('SuratDelapan.status');

//UserSuratSembilan
Route::get('/user/suratketerangandomisili', 'UserController@create9')->name('SuratSembilan.create');
Route::post('/SuratSembilan', 'SuratSembilanController@store')->name('SuratSembilan.store');
Route::get('/suratketerangandomisili/admin', 'SuratSembilanController@index')->name('SuratSembilan.index')->middleware('login_auth');
Route::get('/SuratSembilan/{SuratSembilan}', 'SuratSembilanController@show')->name('SuratSembilan.show')->middleware('login_auth');
Route::delete('/SuratSembilan/{SuratSembilan}', 'SuratSembilanController@destroy')->name('SuratSembilan.destroy')->middleware('login_auth');
Route::get('/user/suratsembilan/selesai', 'SuratSembilanController@index1')->name('SuratSembilan.index1');
Route::get('/suratsembilan/admin/status/{id}','SuratSembilanController@status')->name('SuratSembilan.status');

//UserSuratSepuluh
Route::get('/user/suratkelakuanbaik', 'UserController@create10')->name('SuratSepuluh.create');
Route::post('/SuratSepuluh', 'SuratSepuluhController@store')->name('SuratSepuluh.store');
Route::get('/suratkelakuanbaik/admin', 'SuratSepuluhController@index')->name('SuratSepuluh.index')->middleware('login_auth');
Route::get('/SuratSepuluh/{SuratSepuluh}', 'SuratSepuluhController@show')->name('SuratSepuluh.show')->middleware('login_auth');
Route::delete('/SuratSepuluh/{SuratSepuluh}', 'SuratSepuluhController@destroy')->name('SuratSepuluh.destroy')->middleware('login_auth');
Route::get('/user/suratsepuluh/selesai', 'SuratSepuluhController@index1')->name('SuratSepuluh.index1');
Route::get('/suratsepuluh/admin/status/{id}','SuratSepuluhController@status')->name('SuratSepuluh.status');

//UserSuratSebelas
Route::get('/user/suratketeranganbersihdiri', 'UserController@create11')->name('SuratSebelas.create');
Route::post('/SuratSebelas', 'SuratSebelasController@store')->name('SuratSebelas.store');
Route::get('/suratketeranganbersihdiri/admin', 'SuratSebelasController@index')->name('SuratSebelas.index')->middleware('login_auth');
Route::get('/SuratSebelas/{SuratSebelas}', 'SuratSebelasController@show')->name('SuratSebelas.show')->middleware('login_auth');
Route::delete('/SuratSebelas/{SuratSebelas}', 'SuratSebelasController@destroy')->name('SuratSebelas.destroy')->middleware('login_auth');
Route::get('/user/suratsebelas/selesai', 'SuratSebelasController@index1')->name('SuratSebelas.index1');
Route::get('/suratsebelas/admin/status/{id}','SuratSebelasController@status')->name('SuratSebelas.status');

//UserSuratDuabelas
Route::get('/user/suratketerangantidakmampu', 'UserController@create12')->name('SuratDuabelas.create');
Route::post('/SuratDuabelas', 'SuratDuabelasController@store')->name('SuratDuabelas.store');
Route::get('/suratketerangantidakmampu/admin', 'SuratDuabelasController@index')->name('SuratDuabelas.index')->middleware('login_auth');
Route::get('/SuratDuabelas/{SuratDuabelas}', 'SuratDuabelasController@show')->name('SuratDuabelas.show')->middleware('login_auth');
Route::delete('/SuratDuabelas/{SuratDuabelas}', 'SuratDuabelasController@destroy')->name('SuratDuabelas.destroy')->middleware('login_auth');
Route::get('/user/suratduabelas/selesai', 'SuratDuabelasController@index1')->name('SuratDuabelas.index1');
Route::get('/suratduabelas/admin/status/{id}','SuratDuabelasController@status')->name('SuratDuabelas.status');

//UserSuratTigabelas
Route::get('/user/suratketeranganpenghasilandantanggungankeluarga', 'UserController@create13')->name('SuratTigabelas.create');
Route::post('/SuratTigabelas', 'SuratTigabelasController@store')->name('SuratTigabelas.store');
Route::get('/suratketeranganpenghasilandantanggungankeluarga/admin', 'SuratTigabelasController@index')->name('SuratTigabelas.index')->middleware('login_auth');
Route::get('/SuratTigabelas/{SuratTigabelas}', 'SuratTigabelasController@show')->name('SuratTigabelas.show')->middleware('login_auth');
Route::delete('/SuratTigabelas/{SuratTigabelas}', 'SuratTigabelasController@destroy')->name('SuratTigabelas.destroy')->middleware('login_auth');
Route::get('/user/surattigabelas/selesai', 'SuratTigabelasController@index1')->name('SuratTigabelas.index1');
Route::get('/surattigabelas/admin/status/{id}','SuratTigabelasController@status')->name('SuratTigabelas.status');

//UserSuratEmpatbelas
Route::get('/user/suratketeranganijinorangtuawali', 'UserController@create14')->name('SuratEmpatbelas.create');
Route::post('/SuratEmpatbelas', 'SuratEmpatbelasController@store')->name('SuratEmpatbelas.store');
Route::get('/suratketeranganijinorangtuawali/admin', 'SuratEmpatbelasController@index')->name('SuratEmpatbelas.index')->middleware('login_auth');
Route::get('/SuratEmpatbelas/{SuratEmpatbelas}', 'SuratEmpatbelasController@show')->name('SuratEmpatbelas.show')->middleware('login_auth');
Route::delete('/SuratEmpatbelas/{SuratEmpatbelas}', 'SuratEmpatbelasController@destroy')->name('SuratEmpatbelas.destroy')->middleware('login_auth');
Route::get('/user/suratempatbelas/selesai', 'SuratEmpatbelasController@index1')->name('SuratEmpatbelas.index1');
Route::get('/suratempatbelas/admin/status/{id}','SuratEmpatbelasController@status')->name('SuratEmpatbelas.status');

//UserSuratLimabelas
Route::get('/user/suratketeranganuntukmenikah', 'UserController@create15')->name('SuratLimabelas.create');
Route::post('/SuratLimabelas', 'SuratLimabelasController@store')->name('SuratLimabelas.store');
Route::get('/suratketeranganuntukmenikah/admin', 'SuratLimabelasController@index')->name('SuratLimabelas.index')->middleware('login_auth');
Route::get('/SuratLimabelas/{SuratLimabelas}', 'SuratLimabelasController@show')->name('SuratLimabelas.show')->middleware('login_auth');
Route::delete('/SuratLimabelas/{SuratLimabelas}', 'SuratLimabelasController@destroy')->name('SuratLimabelas.destroy')->middleware('login_auth');
Route::get('/user/suratlimabelas/selesai', 'SuratLimabelasController@index1')->name('SuratLimabelas.index1');
Route::get('/suratlimabelas/admin/status/{id}','SuratLimabelasController@status')->name('SuratLimabelas.status');

//UserSuratEnambelas
Route::get('/user/suratpernyataanbelummenikah', 'UserController@create16')->name('SuratEnambelas.create');
Route::post('/SuratEnambelas', 'SuratEnambelasController@store')->name('SuratEnambelas.store');
Route::get('/suratpernyataanbelummenikah/admin', 'SuratEnambelasController@index')->name('SuratEnambelas.index')->middleware('login_auth');
Route::get('/SuratEnambelas/{SuratEnambelas}', 'SuratEnambelasController@show')->name('SuratEnambelas.show')->middleware('login_auth');
Route::delete('/SuratEnambelas/{SuratEnambelas}', 'SuratEnambelasController@destroy')->name('SuratEnambelas.destroy')->middleware('login_auth');
Route::get('/user/suratenambelas/selesai', 'SuratEnambelasController@index1')->name('SuratEnambelas.index1');
Route::get('/suratenambelas/admin/status/{id}','SuratEnambelasController@status')->name('SuratEnambelas.status');

//UserSuratTujuhbelas
Route::get('/user/suratpernyataanbelumbekerja', 'UserController@create17')->name('SuratTujuhbelas.create');
Route::post('/SuratTujuhbelas', 'SuratTujuhbelasController@store')->name('SuratTujuhbelas.store');
Route::get('/suratpernyataanbelumbekerja/admin', 'SuratTujuhbelasController@index')->name('SuratTujuhbelas.index')->middleware('login_auth');
Route::get('/SuratTujuhbelas/{SuratTujuhbelas}', 'SuratTujuhbelasController@show')->name('SuratTujuhbelas.show')->middleware('login_auth');
Route::delete('/SuratTujuhbelas/{SuratTujuhbelas}', 'SuratTujuhbelasController@destroy')->name('SuratTujuhbelas.destroy')->middleware('login_auth');
Route::get('/user/surattujuhbelas/selesai', 'SuratTujuhbelasController@index1')->name('SuratTujuhbelas.index1');
Route::get('/surattujuhbelas/admin/status/{id}','SuratTujuhbelasController@status')->name('SuratTujuhbelas.status');

//UserSuratDelapanbelas
Route::get('/user/suratketeranganbedanama', 'UserController@create18')->name('SuratDelapanbelas.create');
Route::post('/SuratDelapanbelas', 'SuratDelapanbelasController@store')->name('SuratDelapanbelas.store');
Route::get('/suratketeranganbedanama/admin', 'SuratDelapanbelasController@index')->name('SuratDelapanbelas.index')->middleware('login_auth');
Route::get('/SuratDelapanbelas/{SuratDelapanbelas}', 'SuratDelapanbelasController@show')->name('SuratDelapanbelas.show')->middleware('login_auth');
Route::delete('/SuratDelapanbelas/{SuratDelapanbelas}', 'SuratDelapanbelasController@destroy')->name('SuratDelapanbelas.destroy')->middleware('login_auth');
Route::get('/user/suratdelapanbelas/selesai', 'SuratDelapanbelasController@index1')->name('SuratDelapanbelas.index1');
Route::get('/suratdelapanbelas/admin/status/{id}','SuratDelapanbelasController@status')->name('SuratDelapanbelas.status');


//Login
Route::get('/login', 'AdminController@index')->name('login.index');
Route::post('/logout', 'AdminController@logout')->name('login.logout');
Route::post('/login', 'AdminController@authenticate')->name('login.authenticate');

//AdminLTE
Route::get('/datapermintaansurat/admin','AdminLTEController@index')->name('adminLTE.index')->middleware('login_auth');
Route::get('/tambahadmin/admin','AdminController@index1')->name('Admin.index')->middleware('login_auth');
Route::get('/buatadmin/admin','AdminController@create')->name('Admin.create')->middleware('login_auth');
Route::post('/Admin', 'AdminController@store')->name('Admin.store')->middleware('login_auth');
Route::get('/Admin/{Admin}', 'AdminController@show')->name('Admin.show')->middleware('login_auth');
Route::delete('/Admin/{Admin}', 'AdminController@destroy')->name('Admin.destroy')->middleware('login_auth');