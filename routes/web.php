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



Route::post('loginUser',[\App\Http\Controllers\Login::class, 'index']);
Route::post('registerUser',[\App\Http\Controllers\Login::class, 'registerUser']);
Route::get('register',[\App\Http\Controllers\Login::class, 'register']);
Route::post('showstudents',[\App\Http\Controllers\Dashboard::class, 'showstudents']);
Route::any('dashboard',[\App\Http\Controllers\Dashboard::class, 'index']);
Route::post('export',[\App\Http\Controllers\Dashboard::class, 'export']);
Route::any('tutordashboard',[\App\Http\Controllers\Tutordashboard::class, 'index']);
Route::any('students',[\App\Http\Controllers\Students::class, 'index']);
Route::any('studentdetail/{id}',[\App\Http\Controllers\Studentdetail::class, 'index']);
Route::group(['middleware'=>'customAuth'],function(){
Route::get('/', function () {
    return view('pages.login');
});
Route::view('login','pages.login');
// Route::view('dashboard','pages.dashboard');
Route::get('logout',[\App\Http\Controllers\Login::class, 'logout']);
//Route::any('/includes.header', [\App\Http\Controllers\Course::class, 'getall']);
});