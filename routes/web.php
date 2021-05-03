<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PagesController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\BroadcastController;
use App\Http\Controllers\ProfitController;

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

Route::get('/', [PagesController::class, 'index']);
Route::get('/about',[PagesController::class, 'about']);
Auth::routes();

Route::get('/dashboard', [AdminController::class, 'index'])->name('dashboard');

// product
Route::get('/dashboard/product', [ProductController::class, 'getProduct'])->name('product');
Route::get('/dashboard/product/add', [ProductController::class, 'add_product']);
Route::post('/dashboard/product/add', [ProductController::class, 'post_add_product']);
Route::get('/dashboard/product/{row}/', [ProductController::class, 'getProduct']);
Route::get('/dashboard/product/detail/{id}', [ProductController::class, 'detail_product']);
Route::get('/dashboard/product/edit/{id}', [ProductController::class, 'edit_product']);
Route::post('/dashboard/product/edit/{id}', [ProductController::class, 'post_edit_product']);
Route::get('/dashboard/product/delete/{id}', [ProductController::class, 'delete_product']);


// broadcast
Route::get('/dashboard/broadcast', [BroadcastController::class, 'index']) -> name ('broadcast');
Route::get('/dashboard/broadcast/add/', [BroadcastController::class, 'add_news']);
Route::post('/dashboard/broadcast/add/', [BroadcastController::class, 'post_add_news']);
Route::get('/dashboard/broadcast/edit/{id}', [BroadcastController::class, 'edit_news']);
Route::get('/dashboard/broadcast/detail/{id}', [BroadcastController::class, 'detail_news']);
Route::get('/dashboard/broadcast/{row}/', [BroadcastController::class, 'index']);
Route::get('/dashboard/broadcast/delete/{id}', [BroadcastController::class, 'delete_news']);

// profit
Route::get('/dashboard/profit', [ProfitController::class, 'index'] ) -> name ('profit');