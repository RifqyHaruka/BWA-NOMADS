<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\GalleriesController;
use App\Http\Controllers\Admin\TransactionController;
use App\Http\Controllers\Admin\TravelPackagesController;
use App\Http\Controllers\CheckOutController;
use App\Http\Controllers\DetailContoller;
use App\Http\Controllers\HomeController;
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

// Route::get('/', function () {
//     return view('pages.user.dashboard');
// });

Route::get('/',[HomeController::class,'index'])->name('home');
Route::get('/details/{slug}',[DetailContoller::class,'index'])->name('detail');
Route::post('/checkout/{id}', [CheckOutController::class,'process'])->name('checkout_process')->middleware(['auth','verified']);
Route::get('/checkout/{id}', [CheckOutController::class,'cobaIndex'])->name('checkout')->middleware(['auth','verified']);
Route::post('/checkout/create/{detail_id}', [CheckOutController::class,'create'])->name('checkout_create')->middleware(['auth','verified']);
Route::get('/checkout/remove/{detail_id}', [CheckOutController::class,'remove'])->name('checkout_remove')->middleware(['auth','verified']);
Route::get('/checkout/confirm/{id}',[CheckOutController::class,'success'])->name('checkout_sucess')->middleware('auth','verified');
Route::prefix('admin')
->middleware(['auth','admin'])
->group(function(){
Route::get('/dashboard',[DashboardController::class,'index'])->name('dashboard');
Route::get('/detail',[DetailContoller::class,'index'])->name('detailsa');
Route::resource('travel', TravelPackagesController::class);
Route::resource('galleries', GalleriesController::class);
Route::resource('transaction',TransactionController::class);
});


Auth::routes();


