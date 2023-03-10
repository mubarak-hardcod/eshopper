<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\CustomUserController;
use App\Http\Controllers\cartController;
use App\Http\Controllers\checkoutController;
use App\Http\Controllers\ordersController;
use App\Http\Controllers\blogController;
use App\Http\Controllers\whishlistController;

use App\Http\Controllers\AdminController;
use App\Http\Controllers\mainController;
use App\Http\Controllers\categorysController;
use App\Http\Controllers\brandController;
use App\Http\Controllers\subcategorysController;
use App\Http\Controllers\productsController;

use App\Http\Controllers\MailController;




Route::get('/a', function () {return view('welcome');});
// ---------------------Aunthentication--------------------------------
Route::get('login', [CustomAuthController::class, 'index'])->name('login');
Route::post('custom-login', [CustomAuthController::class, 'customLogin'])->name('login.custom'); 
Route::get('registration', [CustomAuthController::class, 'registration'])->name('register-user');
Route::post('custom-registration', [CustomAuthController::class, 'customRegistration'])->name('register.custom'); 
Route::get('signout', [CustomAuthController::class, 'signOut'])->name('signout');

// --------------home page------------------------
Route::get('/', [mainController::class, 'index']); 

//-------- product result----------------------
Route::get('products', [mainController::class, 'productresult']); 
Route::get('product-detail/{slug}', [mainController::class, 'productdetail']);
Route::get('brand/{slug}', [mainController::class, 'brand']);
Route::get('category/{slug}', [mainController::class, 'category']);
Route::get('search',[mainController::class, 'search']);
Route::get('blog',[blogController::class, 'blog']);
Route::get('blog-single',[blogController::class, 'blogsingle']);


Route::get('admin', [AdminController::class, 'index']); 
Route::get('admin-login', [AdminController::class, 'login']);
Route::post('admin-login', [AdminController::class, 'adminlogin'])->name('login.admin');
Route::get('admin-signout', [AdminController::class, 'signOut'])->name('admin-signout');




Route::group(['middleware' => ['role']], function () {
    // --------------cart-----------------------
    Route::get('cart', [cartController::class, 'index']);
    Route::post('cart-add', [cartController::class, 'store']);
    Route::get('cart-destroy/{id}', [cartController::class, 'destroy']);
    Route::post('cart-update', [cartController::class, 'update']);
    // ----------------checkout-------------------
    Route::get('checkout', [checkoutController::class, 'index']);
    Route::get('order', [checkoutController::class, 'order']);
    Route::post('orderplace', [checkoutController::class, 'store']);
    Route::post('order-cancel/{id}', [checkoutController::class,'ordercancel'])->name('order-cancel');

    // ----------------------- whishlist------------------------------------
    Route::get('whishlist', [whishlistController::class, 'index']);
    Route::post('whishlist-add', [whishlistController::class, 'store']);
    Route::get('whishlist-destroy/{id}', [whishlistController::class, 'destroy']);

});

// -------------------------------------- ADMIN PANEL -----------------------------------------------
// --------------------------------------------------------------------------------------------------

Route::group(['middleware' => ['adminlogin']], function () {
    Route::get('dashboard', [CustomUserController::class,'dashboard'])->name('dashboard');
    Route::get('user_manage', [CustomUserController::class,'index'])->name('user_manage');
    Route::get('user_create', [CustomUserController::class,'create'])->name('user_create');
    Route::post('custom_create', [CustomUserController::class,'store'])->name('custom_create'); 
    Route::get('user_detail/{id}', [CustomUserController::class,'show'])->name('user_detail');
    Route::get('user_edit/{id}', [CustomUserController::class,'edit'])->name('user_edit');
    Route::post('user_update/{id}', [CustomUserController::class,'update'])->name('user_update');
    Route::post('user_delete/{id}', [CustomUserController::class,'destroy'])->name('user_delete');

    // ---------------------------------------category----------------
    Route::get('cate_manage', [categorysController::class, 'index']);
    Route::get('category_manage', [categorysController::class,'index'])->name('category_manage');
    Route::get('category_create', [categorysController::class,'create'])->name('category_create');
    Route::post('category_create', [categorysController::class,'store'])->name('category_create'); 
    Route::get('category_detail/{id}', [categorysController::class,'show'])->name('category_detail');
    Route::get('category_edit/{id}', [categorysController::class,'edit'])->name('category_edit');
    Route::post('category_update/{id}', [categorysController::class,'update'])->name('category_update');
    Route::post('category_delete/{id}', [categorysController::class,'destroy'])->name('category_delete');
    // ---------------------------brand ----------------------------
    Route::get('brand_manage', [brandController::class,'index'])->name('brand_manage');
    Route::get('brand_create', [brandController::class,'create'])->name('brand_create');
    Route::post('brand_create', [brandController::class,'store'])->name('brand_create'); 
    Route::get('brand_detail/{id}', [brandController::class,'show'])->name('brand_detail');
    Route::get('brand_edit/{id}', [brandController::class,'edit'])->name('brand_edit');
    Route::post('brand_update/{id}', [brandController::class,'update'])->name('brand_update');
    Route::post('brand_delete/{id}', [brandController::class,'destroy'])->name('brand_delete');
    // ------------------------------ sub category-------------------------------
    Route::get('sub_categorys_manage', [subcategorysController::class,'index'])->name('sub_categorys_manage');
    Route::get('sub_categorys_create', [subcategorysController::class,'create'])->name('sub_categorys_create');
    Route::post('sub_categorys_create', [subcategorysController::class,'store'])->name('sub_categorys_create'); 
    Route::get('sub_categorys_detail/{id}', [subcategorysController::class,'show'])->name('sub_categorys_detail');
    Route::get('sub_categorys_edit/{id}', [subcategorysController::class,'edit'])->name('sub_categorys_edit');
    Route::post('sub_categorys_update/{id}', [subcategorysController::class,'update'])->name('sub_categorys_update');
    Route::post('sub_categorys_delete/{id}', [subcategorysController::class,'destroy'])->name('sub_categorys_delete');
    // ----------------------------------product ---------------------------------------
    Route::any('products_manage', [productsController::class,'index'])->name('products_manage');
    Route::get('products_create', [productsController::class,'create'])->name('products_create');
    Route::post('products_create', [productsController::class,'store'])->name('products_create'); 
    Route::get('products_detail/{id}', [productsController::class,'show'])->name('products_detail');
    Route::get('products_edit/{id}', [productsController::class,'edit'])->name('products_edit');
    Route::post('products_update/{id}', [productsController::class,'update'])->name('products_update');
    Route::post('products_delete/{id}', [productsController::class,'destroy'])->name('products_delete');
    // ---------------------------------- orders ------------------------------------------

    Route::any('orders_manage', [ordersController::class,'index'])->name('orders_manage');
    // Route::get('orders_create', [ordersController::class,'create'])->name('orders_create');
    Route::post('status', [ordersController::class,'status'])->name('status'); 
    Route::get('orders_detail/{id}', [ordersController::class,'show'])->name('orders_detail');
    // Route::get('orders_edit/{id}', [ordersController::class,'edit'])->name('orders_edit');
    // Route::post('orders_update/{id}', [ordersController::class,'update'])->name('orders_update');
    // Route::post('orders_delete/{id}', [ordersController::class,'destroy'])->name('orders_delete');
   

});
Route::get('generate-invoice/{id}',[ordersController::class,'invoice']);

// mail sending
Route::get('sendbasicemail',[MailController::class,'basic_email']);
Route::get('sendhtmlemail',[MailController::class,'html_email']);
Route::get('sendattachmentemail',[MailController::class,'attachment_email']);

