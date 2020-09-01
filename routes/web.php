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


Route::get("/home", "HomeController@home");

Route::get("/login", "LoginController@index");
Route::post("/login", "LoginController@getdata");

// UNTUK PARKIR KELUAR
// Route::get("/parkirkeluar", "ParkirmkeluarController@parkirkeluar");
Route::get("/parkirkeluar", "ParkirmkeluarController@index");

// UNTUK PARKIR MASUK
// Route::get("/parkirmasuk", "ParkirmasukController@parkirmasuk");
Route::get("/parkirmasuk", "ParkirmasukController@index");


// UNTUK PARKIR JUKIR
// Route::get("/jukir", "JukirController@jukir");
Route::get("/jukir", "JukirController@index");
Route::get("/jukir/{username}", "JukirController@hapus");
Route::get("/editJukir/{username}", "JukirController@edit");
Route::post("/editJukir", "JukirController@simpan");
Route::get("/showJukir/{username}", "JukirController@showJukir");


// UNTUK PARKIR USER BIODATA
// Route::get("/userbiodata", "UserbiodataController@users");
Route::get("/userbiodata", "UserbiodataController@index");



// UNTUK PARKIR REF BIAYA
Route::get("/refbiaya", "RefbiayaController@index");
Route::get("/refbiaya/hapus/{id_ref_kendaraan}", "RefbiayaController@hapus");
Route::post("/refbiaya", "RefbiayaController@store");

//UNTUK AJAX
Route::get("/getuser/{username}", "AjaxController@index");

// UNTUK PARKIR INFO
Route::get("/info", "InfoController@index");
Route::get("/info/hapus/{id_merk}", "InfoController@hapus");
route::post("/info","InfoController@store");


// UNTUK PARKIR REF MODEL
Route::get("/refmodel", "RefmodelController@index");
Route::get("/ref_model/hapus/{id_model}", "RefmodelController@hapus");
route::post("/refmodel","RefmodelController@store");

// UNTUK PARKIR RIWAYAT
// Route::get("/riwayat", "RiwayatController@index");


// UNTUK PARKIR INFO USER
// Route::get("/infouser", "InfouserController@infouser");
Route::get("/infouser", "InfouserController@index");
Route::get("/infouser/{username}", "InfouserController@showdata");


// Data Validasiawdawd
Route::get("/datavalidasi", "DatavalidasiController@datavalidasi");

// Data Kendaraan
Route::get("/datakendaraan", "DatakendaraanController@datakendaraan");
Route::get("/datakendaraan", "DatakendaraanController@index");