<?php

use Illuminate\Support\Facades\Route;
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

Route::get('/', function () {
    return view('home');
});
Route::get('/user/signup/', function () {
    return view('user.signup');
})->name('user.signup');

Route::get('/user/login/', function () {
    return view('user.login');
})->name('user.login');

Route::post('/user/signup/', [UserController::class, 'signup'])->name('signup');
Route::get('/user/verifyemail/{token}', [UserController::class, 'verifyemail'])->name('user.verifyemail');
Route::post('/user/login/', [UserController::class, 'login'])->name('login');

Route::group(['middleware' => ['auth', 'verified']], function(){
    Route::get('/user/dash/', function () {
        return view('user.dash');
    })->name('user.dash');
    Route::get('/user/logout/', [UserController::class, 'logout'])->name('logout');
});