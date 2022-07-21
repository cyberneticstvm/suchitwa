<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\WeightageController;

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
    return view('home');
});
Route::get('/user/signup/', function () {
    return view('user.signup');
})->name('user.signup');

Route::get('/user/login/', function () {
    return view('user.login');
})->name('user.login');

Route::get('/admin/login/', function () {
    return view('admin.login');
})->name('admin.login');

Route::post('/user/signup/', [UserController::class, 'signup'])->name('signup');
Route::get('/user/verifyemail/{token}', [UserController::class, 'verifyemail'])->name('user.verifyemail');
Route::post('/user/login/', [UserController::class, 'login'])->name('login');
Route::post('/admin/login/', [UserController::class, 'adminlogin'])->name('admin.login');

Route::group(['middleware' => ['auth', 'verified']], function(){

    // user //
    Route::get('/user/dash/', function () {
        return view('user.dash');
    })->name('user.dash');       
    Route::get('/user/company/create/', [CompanyController::class, 'create'])->name('user.company.create');
    Route::post('/user/company/save/', [CompanyController::class, 'store'])->name('company.save');
    Route::get('/user/logout/', [UserController::class, 'userlogout'])->name('user.logout');
    // end user //

    // admin //
    Route::get('/admin/dash/', function () {
        return view('admin.dash');
    })->name('admin.dash');
    Route::get('/admin/weightage/{id}/', [WeightageController::class, 'edit'])->name('admin.weightage.edit');
    Route::put('/admin/weightage/{id}/', [WeightageController::class, 'update'])->name('admin.weightage.update');
    Route::get('/admin/logout/', [UserController::class, 'adminlogout'])->name('admin.logout');
    // end admin //
});