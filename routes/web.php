<?php

use App\Http\Middleware\UserAuth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\MaillerController;
use App\Http\Controllers\PartnerController;
use App\Http\Controllers\PartnerViewController;

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
Route::get('admin/home', 'HomeController@handleAdmin')->name('admin.route')->middleware('autorize_access');
Route::get('licencier/home', 'HomeController@handlelicencier')->name('licencier.route')->middleware('authorizeUser');
Route::get('adherent/home', 'HomeController@handleAdherent')->name('adherent.route')->middleware('authorizeUser');
Route::get('super admin/home', 'HomeController@handleSuperAdmin')->name('superAdmin.route')->middleware('autorize_access');
Route::middleware(['auth:sanctum', 'verified', 'userAuth'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

//route for admin and super admin #user
Route::get('index/user', [UserController::class, 'index'])->name('index.user')->middleware('autorize_access');
Route::get('create/user', [UserController::class, 'create'])->name('create.user')->middleware('autorize_access');
Route::get('show/user', [UserController::class, 'show'])->name('show.user')->middleware('autorize_access');
Route::get('edit/user', [UserController::class, 'edit'])->name('edit.user')->middleware('autorize_access');
Route::post('update/user', [UserController::class, 'update'])->name('update.user')->middleware('autorize_access');
Route::post('delete/user', [UserController::class, 'destroy'])->name('delete.user')->middleware('autorize_access');
Route::post('store/user', [UserController::class, 'store'])->name('store.user')->middleware('autorize_access');


//route for crud Post 
Route::get('posts/index',[PostController::class, 'index'])->name('posts.index')->middleware('autorize_access');
Route::get('create/post',[PostController::class, 'create'])->name('post.create')->middleware('autorize_access');
Route::post('update/post',[PostController::class, 'update'])->name('post.update')->middleware('autorize_access');
Route::post('store/post',[PostController::class, 'store'])->name('post.store')->middleware('autorize_access');
Route::post('delete/post',[PostController::class, 'destroy'])->name('post.delete')->middleware('autorize_access');
Route::get('edit/post', [PostController::class, 'edit'])->name('post.edit')->middleware('autorize_access');
Route::get('show/post', [PostController::class, 'show'])->name('show.post')->middleware('autorize_access');

//route for view user
Route::get('articles/index',[ArticleController::class, 'index'])->name('articles.index');
Route::get('article/show',[ArticleController::class, 'show'])->name('article.show');

// route for management partner
// Route::resource('partners', PartnerController::class);
Route::get('partner/index',[PartnerController::class, 'index'])->name('partners.index')->middleware('autorize_access');
Route::get('partner/create',[PartnerController::class, 'create'])->name('partner.create')->middleware('autorize_access');
Route::post('partner/store',[PartnerController::class, 'store'])->name('partner.store')->middleware('autorize_access');
Route::get('partner/show',[PartnerController::class, 'show'])->name('partner.show')->middleware('autorize_access');
Route::get('partner/edit',[PartnerController::class, 'edit'])->name('partner.edit')->middleware('autorize_access');
Route::post('partner/update',[PartnerController::class, 'update'])->name('partner.update')->middleware('autorize_access');
Route::post('partner/destroy',[PartnerController::class, 'destroy'])->name('partner.destroy')->middleware('autorize_access');

//route for user
Route::get('/index/partner',[PartnerViewController::class, 'index'])->name('partnerView');

// route for user auth
Route::get('/index/partners',[PartnerViewController::class, 'indexAuth'])->name('partnerViewAuth.index');

// // Route for mailler configuaration
// Route::post('mailler/configuration',[MaillerController::class, 'createConfiguration'])->name('mailler.configue')->middleware('autorize_access');
// // route for mail send
// Route::get("email",[MaillerController::class, 'composeMail'])->name('email.create')->middleware('autorize_access');