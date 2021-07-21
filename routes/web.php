<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Middleware\UserAuth;
use App\Http\Controllers\UserController;


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
Route::get('admin/home', 'HomeController@handleAdmin')->name('admin.route');
Route::get('licencier/home', 'HomeController@handlelicencier')->name('licencier.route');
Route::get('adherent/home', 'HomeController@handleAdherent')->name('adherent.route');
Route::get('super admin/home', 'HomeController@handleSuperAdmin')->name('superAdmin.route');
Route::middleware(['auth:sanctum', 'verified', 'userAuth'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('edit/user', [UserController::class, 'edit_user'])->name('edit.user')->middleware('autorize_access');
Route::get('show/user', [UserController::class, 'show_user'])->name('show.user')->middleware('autorize_access');
