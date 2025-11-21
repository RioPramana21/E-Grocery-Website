<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\LocalizationController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MaintenanceController;
use App\Http\Controllers\RegisterController;
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

// Untuk middleware nomor 6a, digunakan class middleware auth yang sudah dimodifikasi
// Untuk middleware nomor 6b, digunakan class middleware is_admin

Route::get('/', [Controller::class, 'index'])->middleware('guest')->name('indexpage');
Route::get('/home', [Controller::class, 'home'])->middleware('auth')->name('homepage');
Route::get('/home/{item}', [Controller::class, 'show'])->middleware('auth')->name('view-item');

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/my-cart',[CartController::class, 'index'])->name('my_cart')->middleware('auth');
Route::post('/my-cart',[CartController::class, 'add_item'])->name('add_to_cart')->middleware('auth');
Route::get('/my-cart/success',[CartController::class, 'success'])->name('success')->middleware('auth');
Route::delete('/my-cart/{id}', [CartController::class, 'delete_item'])->name('delete_item')->middleware('auth');
Route::delete('/checkout', [CartController::class, 'check_out'])->name('check_out')->middleware('auth');

Route::get('/acc-maintenance',[MaintenanceController::class, 'index'])->name('account_maintenance')->middleware('auth')->middleware('is_admin');
Route::get('/acc-maintenance/update/{id}', [MaintenanceController::class, 'updateRole'])->name('update_role')->middleware('auth')->middleware('is_admin');
Route::post('/acc-maintenance/update/{id}', [MaintenanceController::class, 'saveRole'])->name('save_role')->middleware('auth')->middleware('is_admin');
Route::get('/acc-maintenance/delete/{id}', [MaintenanceController::class, 'deleteRole'])->name('delete_role')->middleware('auth')->middleware('is_admin');

Route::get('/profile', [AccountController::class, 'index'])->middleware('auth')->name('view-profile');
Route::get('/profile/success', [AccountController::class, 'success'])->middleware('auth')->name('profile-success');
Route::put('/profile', [AccountController::class, 'update'])->middleware('auth')->name('edit-profile');

Route::get("locale/{lange}", [LocalizationController::class, 'setLang']);
