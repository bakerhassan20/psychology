<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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
    return view('website.home');
})->middleware('guest')->name('website.home');

Auth::routes();

Route::prefix('/admin')->middleware(['auth', 'user-access:admin'])->group(function () {

    Route::get('/home', [HomeController::class, 'adminHome'])->name('admin.home');
    Route::resource('doctors','App\Http\Controllers\Admin\DoctorsController');

});

Route::prefix('/doctor')->middleware(['auth', 'user-access:doctor'])->group(function () {

    Route::get('/home', [HomeController::class, 'doctorHome'])->name('doctor.home');


});

Route::middleware(['auth', 'user-access:patient'])->group(function () {

    Route::get('/home', [HomeController::class, 'patientHome'])->name('patient.home');


});





Route::get('/{page}', 'AdminController@index');
