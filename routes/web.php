<?php

use App\Http\Controllers\admin\productController;
use App\Http\Controllers\admin\categoryController;
use App\Http\Controllers\admin\colorController;
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
Route::post('/register',[userController::class, 'registerStore'])->name('register.store');
Route::get('/adore-list', [userController::class, 'adoreForm'])->name('user/adore-list');
Route::get('/order', [userController::class, 'orderForm'])->name('user/order');
Route::get('/product-detail', [userController::class, 'productDetailForm'])->name('user/product-detail');
Route::get('/product-list', [userController::class, 'productListForm'])->name('user/product-list');
Route::get('/search-order', [userController::class, 'searchOrderForm'])->name('user/search-order');
Route::get('/search-product', [userController::class, 'searchProductForm'])->name('user/search-product');
Route::get('/result-search-order', [userController::class, 'resultsearchOrderForm'])->name('user/search-search-order');
// Admin
Route::prefix('admin')->group(function(){
  // Route::resource('payment',PaymentController::class);
});
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
Route::get('/listProduct',[productController::class, 'getAll'])->name('list-product');
//thêm sản phảm
Route::get('/createProduct',[productController::class, 'getAllCategory'])->name('create-product');//lấy danh mục
Route::post('/createProduct',[productController::class, 'createProduct'])->name('post-create-product');//thêm sản phẩm...
Route::delete('/listProduct/{id_product}',[productController::class, 'deleteProduct'])->name('delete-product');
//lấy sản phẩm qua trang update
Route::get('/listProduct/{id_product}', [productController::class, 'viewUpdateProduct'])->name('uppdateProduct');
Route::post('uppdate-product/{id}', [productController::class, 'updateProduct'])->name('update-product');

//list color
Route::get('/listColor',[colorController::class, 'getAll'])->name('list-color');//lấymàu
route::get('/createColor', function(){
  return view('admin/color/createColor');
})->name('create-color');
Route::post('/createColor',[colorController::class, 'createColor'])->name('post-color');//lấymàu
Route::delete('/listColor/{id_color}',[colorController::class, 'deleteColor'])->name('delete-color');
Route::get('/editColor/{id}',[colorController::class, 'viewUpdateColor'])->name('view-edit-color');//lấymàu
Route::post('uppdate-color/{id}', [colorController::class, 'updateColor'])->name('update-color');

