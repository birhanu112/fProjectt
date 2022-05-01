<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CustomerController; 
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
route::get('/redirect',[HomeController::class,'index']);

route::get('/',[HomeController::class,'home']);


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

route::get('/redirect',[HomeController::class,'redirect']);
route::get('/contact',[HomeController::class,'contact']);
route::get('/feedback',[HomeController::class,'feedback']);


        //Customer Registration
Route::get('/customer_create', [CustomerController::class,'create']);
Route::POST('/customer_store', [CustomerController::class,'store'])->name('customer_store');
Route::get('/customer_list', [CustomerController::class,'index']);
route::get('edit/{id}',[CustomerController::class,'edit']);
Route::put('update-data/{id}',[CustomerController::class,'update']);
Route::get('delete/{id}',[CustomerController::class,'remove']);
