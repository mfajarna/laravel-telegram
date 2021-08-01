<?php

use App\Http\Controllers\DataController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MapsController;
use App\Http\Controllers\PPIController;
use App\Http\Controllers\VendorController;
use App\Http\Controllers\AktivasiController;
use Illuminate\Support\Facades\Route;
use Symfony\Component\HttpKernel\DataCollector\DataCollector;

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

Route::get('/',function(){
    return view('login.login');
})->name('login');
Route::get('/register',function(){
    return view('register.register');
});

Route::get('/aktivasi', function () {
    return view('aktivasi');

});


Route::post('/login',[LoginController::class,'login']);
Route::post('/register/regis',[LoginController::class,'register']);
Route::group(['middleware'=>['auth','role:1']],function(){

    Route::get('/logout',[LoginController::class,'logout']);
    Route::get('/data', [DataController::class, 'index']);
    Route::post('/import', [DataController::class, 'import']);
    Route::get('/detaildata/{id}', [DataController::class, 'detail']);
    Route::get('/hapus/{id}', [DataController::class, 'hapus']);
    Route::get('/updateview/{id}', [DataController::class, 'updateView']);
    Route::post('/update/{id}', [DataController::class, 'update']);
    Route::get('/kirimppi', [PPIController::class, 'viewKirim']);
    Route::post('/cari', [PPIController::class, 'cari']);
    Route::post('/mail',[PPIController::class,'mail']);
    Route::get('/vendor',[VendorController::class,'index']);
    Route::post('/addvendor/vendor',[VendorController::class,'vendor']);
    Route::get('/updateview/{id}/vendor', [VendorController::class, 'updateView']);
    Route::post('/update/{id}/vendor', [VendorController::class, 'update']);
    Route::get('/hapus/{id}/vendor', [VendorController::class, 'hapus']);
    Route::get('/maps',[MapsController::class,'index']);
    Route::post('/proses',[MapsController::class,'proses']);
    Route::get('/aktivasi/vendor',[App\Http\Controllers\AktivasiController::class,'index']);
    Route::post('/proses/vendor',[App\Http\Controllers\AktivasiController::class,'prosesdata']);



});
Route::group(['middleware'=>['auth','role:2']],function(){
    Route::get('/user',function(){
        return view('user');
    });
});

Route::get('waping/send','WapingContoller@send');



