<?php

use App\Http\Controllers\admin\productController;
use App\Http\Controllers\admin\categoryController;
use App\Http\Controllers\admin\colorController;
use App\Http\Controllers\admin\sizeController;
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
Route::post('/register',[userController::class, 'registerStore'])->name('register.store');
Route::get('/adore-list', [userController::class, 'adoreForm'])->name('user/adore-list');
Route::get('/product-detail/{id_product}', [userController::class, 'productDetailForm'])->name('user/product-detail');
Route::get('/product-list', [userController::class, 'productListForm'])->name('user/product-list');
Route::get('/search-order', [userController::class, 'searchOrderForm'])->name('user/search-order');
Route::get('/search-product', [userController::class, 'searchProductForm'])->name('user/search-product');
Route::get('/result-search-order', [userController::class, 'resultsearchOrderForm'])->name('user/search-search-order');
Route::get('/info-ordered', [userController::class, 'infoOrderForm'])->name('user/info-order');
// ->order-tuấn
Route::post('/cartandpay',[UserOrderController::class, 'storeCartandPay'])->name('store.cartandpay');
Route::post('/deleteorder', [UserOrderController::class, 'deleteCart'])->name('user.deleteorder');
Route::post('/deleteorderall', [UserOrderController::class, 'deleteCartAll'])->name('user.deleteorderall');
Route::post('/updatecart', [UserOrderController::class, 'updateCart'])->name('user.updatecart');
Route::get('/order', [UserOrderController::class, 'orderForm'])->name('user/order');
//->payment-tuấn
Route::post('/payment',[UserOrderController::class, 'payment'])->name('store.payment');

// Admin
Route::prefix('admin')->group(function(){
  //Route::resource('payment',PaymentController::class);
});
//Lượng-category
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
Route::get('/createProduct',[productController::class, 'getAllData'])->name('create-product');//lấy danh mục, color, size...
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
Route::post('/createColor',[colorController::class, 'createColor'])->name('post-color');
Route::delete('/listColor/{id_color}',[colorController::class, 'deleteColor'])->name('delete-color');
Route::get('/editColor/{id}',[colorController::class, 'viewUpdateColor'])->name('view-edit-color');//lấymàu
Route::post('uppdate-color/{id}', [colorController::class, 'updateColor'])->name('update-color');
Route::get('/listSize', [sizeController::class, 'getAll'])->name('list-size');
Route::delete('/listSize/{id}',[sizeController::class, 'deleteSize'])->name('delete-size');
Route::get('/createSize', function(){
  return view('admin/size/createSize');
})->name('create-size');
Route::post('/createSize',[sizeController::class, 'createSize'])->name('post-size');

Route::get('/editSize/{id}',[sizeController::class, 'viewUpdateSize'])->name('view-edit-size');
Route::post('uppdate-size/{id}', [sizeController::class, 'updateSize'])->name('update-size');

//-----------------------------login_Lượng-----------------------
Route::post('login', [userController::class, 'authUser'])->name('check-login');//phan quyen dang nhap chưa phân quyền user và admin
//-----------------------------logout_Lượng-----------------------
Route::get('logout', [userController::class, 'logout'])->name('logout');

