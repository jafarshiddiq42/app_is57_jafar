<?php

use App\Http\Controllers\PinController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;    

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

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware'=>'is_admin'],
function(){
    Route::get('admin/home', [App\Http\Controllers\HomeController::class, 'adminhome'])->name('admin.home');
    Route::get('admin/santribaru', [App\Http\Controllers\HomeController::class, 'adminsantribaru']);
    Route::get('admin/statuslulus', [App\Http\Controllers\HomeController::class, 'adminstatuslulus']);
}
);

Route::group(['middleware'=>['auth','checkpin']],function(){
    Route::get('/home', [App\Http\Controllers\SiswaController::class, 'Formulir'])->name('home');
    Route::post('/home', [App\Http\Controllers\SiswaController::class, 'formulirsubmit']);
    Route::get('/kartu', [App\Http\Controllers\SiswaController::class, 'Kartu'])->name('kartu');
    Route::get('/dump', [App\Http\Controllers\SiswaController::class, 'dumptest'])->name('kartu');
    Route::get('/Pengumuman', [App\Http\Controllers\SiswaController::class, 'Pengumuman'])->name('Pengumuman');
    
    
});

Route::get('/pin',[PinController::class,'index'] )->middleware('auth')->name('pin');
Route::put('/pincheck',[PinController::class ,'checkpin'] )->middleware('auth');
Route::post('/tester',[PinController::class ,'tester'] )->middleware('auth');


