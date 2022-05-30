<?php

use App\Http\Controllers\CustomersController;
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
//    return view('welcome');
});

//Auth::routes();
//Auth::routes(['register' => false]);

/*------------------------------------------
--------------------------------------------
All Normal Users Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:user'])->group(function () {

//    Route::get('/home', [HomeController::class, 'index'])->name('home');

});

/*------------------------------------------
--------------------------------------------
All Admin Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:admin'])->group(function () {

    Route::resource('/admin/customers', CustomersController ::class);




//    Auth::routes(['login' => false, 'logout'=>false]); // For admin to make a nwe account.


//    Route::get('/admin/users', [AdminController::class, 'adminHome'])->name('admin.home');
//    Route::post('/admin/create_user', [AdminController::class, 'createuUser'])->name('admin.create_user');
//    Route::post('/admin/store', [AdminController::class, 'store'])->name('admin.store');

//    Route::get('/admin/destroy/{id}', [AdminController::class, 'destroy'])->name('admin.destroy');
//    Route::delete('/admin/delete/{id}', [AdminController::class, 'delete'])->name('admin.delete');

//    Route::get('/admin/edit/{id}', [AdminController::class, 'edit_user'])->name('admin.edit');

//    Route::resource('admin', AdminController::class);



});

/*------------------------------------------
--------------------------------------------
All Admin Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:manager'])->group(function () {

//    Route::get('/manager/home', [HomeController::class, 'managerHome'])->name('manager.home');
});
