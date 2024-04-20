<?php

use App\Http\Controllers\admin\productController;
use App\Http\Controllers\user\userController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\user\OrderController as UserOrderController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
// User
Route::get('/', [userController::class, 'index'])->name('user/index');
Route::get('/login', [userController::class, 'loginForm'])->name('user/login');
Route::get('/register', [userController::class, 'registerForm'])->name('user/register');
Route::get('/adore-list', [userController::class, 'adoreForm'])->name('user/adore-list');
Route::get('/product-detail/{id_product}', [userController::class, 'productDetailForm'])->name('user/product-detail');
Route::get('/product-list', [userController::class, 'productListForm'])->name('user/product-list');
Route::get('/search-order', [userController::class, 'searchOrderForm'])->name('user/search-order');
Route::get('/search-product', [userController::class, 'searchProductForm'])->name('user/search-product');
Route::get('/result-search-order', [userController::class, 'resultsearchOrderForm'])->name('user/search-search-order');
// ->order
Route::post('/cartandpay',[UserOrderController::class, 'storeCartandPay'])->name('store.cartandpay');
Route::post('/deleteorder', [UserOrderController::class, 'deleteCart'])->name('user.deleteorder');
Route::post('/deleteorderall', [UserOrderController::class, 'deleteCartAll'])->name('user.deleteorderall');
Route::post('/updatecart', [UserOrderController::class, 'updateCart'])->name('user.updatecart');
Route::get('/order', [UserOrderController::class, 'orderForm'])->name('user/order');

// Admin
Route::get('admin/product/list',[productController::class, 'index']);
Route::get('admin/product/create',[productController::class, 'create']);
Route::get('admin/product/edit',[productController::class, 'edit']);

