<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;

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
Route::get('/',[IndexController::class, 'indexForAll'])->name('/');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('admin/home', 'HomeController@handleAdmin')->name('admin.route')->middleware('admin');
Route::get('licencier/home', 'HomeController@handlicencier')->name('licencier.route')->middleware('licencier');
Route::get('adherent/home', 'HomeController@handleAdherent')->name('adherent.route')->middleware('adherent');
Route::get('super admin/home', 'HomeController@handleSuperAdmin')->name('superAdmin.route')->middleware('superAdmin');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
