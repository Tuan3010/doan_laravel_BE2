<?php

use App\Http\Controllers\admin\productController;
use App\Http\Controllers\admin\categoryController;
use App\Http\Controllers\admin\colorController;
use App\Http\Controllers\admin\OrderController;
use App\Http\Controllers\admin\sizeController;
use App\Http\Controllers\admin\UserController as AdminUserController;
use App\Http\Controllers\admin\imagesController;
use App\Http\Controllers\admin\PaymentController;
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
Route::get('/', [userController::class, 'index'])->name('user/index')->middleware('adminnotacess');;
Route::get('/login', [userController::class, 'loginForm'])->name('user/login');
Route::get('/register', [userController::class, 'registerForm'])->name('user/register');
Route::post('/register',[userController::class, 'registerStore'])->name('register.store');
Route::get('/adore-list', [userController::class, 'adoreForm'])->name('user/adore-list')->middleware('adminnotacess');
Route::get('/product-detail/{id_product}', [userController::class, 'productDetailForm'])->name('user/product-detail')->middleware('adminnotacess');;
Route::get('/product-list', [userController::class, 'productListForm'])->name('user/product-list')->middleware('adminnotacess');
Route::get('/product-categories', [userController::class, 'categoryProductListForm'])->name('user/product-categories')->middleware('adminnotacess');;
Route::get('/search-product', [userController::class, 'searchProductForm'])->name('user/search-product')->middleware('adminnotacess');;

Route::get('/info-ordered', [userController::class, 'infoOrderForm'])->name('user/info-order')->middleware('adminnotacess');;
// ->order-tuấn
Route::post('/cartandpay',[UserOrderController::class, 'storeCartandPay'])->name('store.cartandpay')->middleware('adminnotacess');;
Route::post('/deleteorder', [UserOrderController::class, 'deleteCart'])->name('user.deleteorder')->middleware('adminnotacess');;
Route::post('/deleteorderall', [UserOrderController::class, 'deleteCartAll'])->name('user.deleteorderall')->middleware('adminnotacess');;
Route::post('/updatecart', [UserOrderController::class, 'updateCart'])->name('user.updatecart')->middleware('adminnotacess');;
Route::get('/order', [UserOrderController::class, 'orderForm'])->name('user/order')->middleware('adminnotacess');;
//->payment-tuấn
Route::post('/payment',[UserOrderController::class, 'payment'])->name('store.payment')->middleware('adminnotacess');;
// ->changepassword-tuấn
Route::get('/changepass',[userController::class, 'changePassForm'])->name('user/changepass')->middleware('adminnotacess');;
Route::post('/changepass',[userController::class, 'changePass'])->name('user.storechangepass')->middleware('adminnotacess');;
// ->search order handle - tuấn
Route::get('/result-search-order', [userController::class, 'resultsearchOrderForm'])->name('user/search-search-order')->middleware('adminnotacess');;
Route::get('/search-order', [userController::class, 'searchOrderForm'])->name('user/search-order')->middleware('adminnotacess');;
// ->sendmai - tuấn
// Admin
Route::prefix('admin')->middleware('admin')->group(function(){
    Route::resource('payment',PaymentController::class);
    Route::resource('order',OrderController::class);
    Route::post('order/comfirm',[OrderController::class, 'confirmOrder'])->name('order.confirm');
    Route::resource('user',AdminUserController::class);
});
//Lượng-category
//hiển thị thêm danh mục
Route::get('/category', function() {
    return view('admin/category/createCategory');
})->name('createCategory');
//hien thị danh sách danh mục
Route::get('/listCategory', [categoryController::class, 'getAll'])->name('listCategory')->middleware('admin');
//xoa
Route::delete('/listCategory/{id}',  [categoryController::class, 'deleteCategory'])->name('deleteCategory')->middleware('admin');
//them
Route::post('admin/category/create-category', [categoryController::class, 'createCategory'])->name('post-category')->middleware('admin');
//sua category
Route::post('uppdate-category/{id}', [categoryController::class, 'uppdateCategory'])->name('patch-updatecategory')->middleware('admin');
//lấy category qua trang update
Route::get('/listCategory/{id}', [categoryController::class, 'viewUppdateCategory'])->name('uppdateCategory')->middleware('admin');
//san phamm
Route::get('/listProduct',[productController::class, 'getAll'])->name('list-product')->middleware('admin');
//thêm sản phảm
Route::get('/createProduct',[productController::class, 'getAllData'])->name('create-product')->middleware('admin');//lấy danh mục, color, size...
Route::post('/createProduct',[productController::class, 'createProduct'])->name('post-create-product')->middleware('admin');//thêm sản phẩm...
Route::delete('/listProduct/{id_product}',[productController::class, 'deleteProduct'])->name('delete-product')->middleware('admin');
//lấy sản phẩm qua trang update
Route::get('/listProduct/{id_product}', [productController::class, 'viewUpdateProduct'])->name('uppdateProduct')->middleware('admin');
Route::post('uppdate-product/{id}', [productController::class, 'updateProduct'])->name('update-product')->middleware('admin');

//list color
Route::get('/listColor',[colorController::class, 'getAll'])->name('list-color')->middleware('admin');//lấymàu
route::get('/createColor', function(){
  return view('admin/color/createColor');
})->name('create-color')->middleware('admin');
Route::post('/createColor',[colorController::class, 'createColor'])->name('post-color')->middleware('admin');
Route::delete('/listColor/{id_color}',[colorController::class, 'deleteColor'])->name('delete-color')->middleware('admin');
Route::get('/editColor/{id}',[colorController::class, 'viewUpdateColor'])->name('view-edit-color')->middleware('admin');//lấymàu
Route::post('uppdate-color/{id}', [colorController::class, 'updateColor'])->name('update-color')->middleware('admin');
Route::get('/listSize', [sizeController::class, 'getAll'])->name('list-size')->middleware('admin');
Route::delete('/listSize/{id}',[sizeController::class, 'deleteSize'])->name('delete-size')->middleware('admin');
Route::get('/createSize', function(){
  return view('admin/size/createSize');
})->name('create-size')->middleware('admin');
Route::post('/createSize',[sizeController::class, 'createSize'])->name('post-size')->middleware('admin');

Route::get('/editSize/{id}',[sizeController::class, 'viewUpdateSize'])->name('view-edit-size')->middleware('admin');
Route::post('uppdate-size/{id}', [sizeController::class, 'updateSize'])->name('update-size')->middleware('admin');

//-----------------------------login_Lượng-----------------------
Route::post('login', [userController::class, 'authUser'])->name('check-login');
//-----------------------------logout_Lượng-----------------------
Route::get('logout', [userController::class, 'logout'])->name('logout');

//Crud hình ảnh Lượng
Route::get('listImages', [imagesController::class, 'getAll'])->name('list-images')->middleware('admin');
Route::get('createImg', [imagesController::class, 'viewCreateImg'])->name('get-create-img')->middleware('admin');
Route::post('createImg', [imagesController::class, 'CreateImg'])->name('post-create-img')->middleware('admin');
Route::delete('/listImages/{id}',[imagesController::class, 'deleteImage'])->name('delete-img')->middleware('admin');
Route::get('/listImages/{id}',[imagesController::class, 'viewUpdateImage'])->name('edit-img')->middleware('admin');
Route::post('listImages/{id}', [imagesController::class, 'updateImage'])->name('update-image')->middleware('admin');
// /return view('admin/images/createImages');