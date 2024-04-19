<?php

use App\Http\Controllers\admin\productController;
use App\Http\Controllers\admin\categoryController;
use App\Http\Controllers\user\userController;
use Illuminate\Support\Facades\Route;

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
Route::get('/order', [userController::class, 'orderForm'])->name('user/order');
Route::get('/product-detail', [userController::class, 'productDetailForm'])->name('user/product-detail');
Route::get('/product-list', [userController::class, 'productListForm'])->name('user/product-list');
Route::get('/search-order', [userController::class, 'searchOrderForm'])->name('user/search-order');
Route::get('/search-product', [userController::class, 'searchProductForm'])->name('user/search-product');
// Admin
Route::get('admin/product/list',[productController::class, 'index']);
Route::get('admin/product/create',[productController::class, 'create']);
Route::get('admin/product/edit',[productController::class, 'edit']);
//Luong-category
//hiển thị thêm danh mục
Route::get('/category', function() {
    return view('admin/category/createCategory');
})->name('createCategory');
//hien thị danh sách danh mục
Route::get('/listCategory', [categoryController::class, 'getAll'])->name('listCategory');
//xoa
Route::delete('/listCategory/{id}',  [categoryController::class, 'deleteCategory'])->name('deleteCategory');
//them
Route::post('admin/category/create-category', [categoryController::class, 'createCategory'])->name('post-category');
//sua category
Route::post('uppdate-category/{id}', [categoryController::class, 'uppdateCategory'])->name('patch-updatecategory');
//lấy category qua trang update
Route::get('/listCategory/{id}', [categoryController::class, 'viewUppdateCategory'])->name('uppdateCategory');
//san phamm
Route::get('/listProduct', function() {
    return view('admin/product/listProduct');
})->name('list-product');


