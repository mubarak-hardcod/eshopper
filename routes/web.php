<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\mainController;
use App\Http\Controllers\categorysController;
use App\Http\Controllers\brandController;
use App\Http\Controllers\subcategorysController;






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

Route::get('/a', function () {return view('welcome');});
Route::get('admin', [AdminController::class, 'index']); 

Route::get('/', [mainController::class, 'index']); 
Route::get('cate_manage', [categorysController::class, 'index']); 

Route::get('category_manage', [categorysController::class,'index'])->name('category_manage');
Route::get('category_create', [categorysController::class,'create'])->name('category_create');
Route::post('category_create', [categorysController::class,'store'])->name('category_create'); 
Route::get('category_detail/{id}', [categorysController::class,'show'])->name('category_detail');
Route::get('category_edit/{id}', [categorysController::class,'edit'])->name('category_edit');
Route::post('category_update/{id}', [categorysController::class,'update'])->name('category_update');
Route::post('category_delete/{id}', [categorysController::class,'destroy'])->name('category_delete');

Route::get('brand_manage', [brandController::class,'index'])->name('brand_manage');
Route::get('brand_create', [brandController::class,'create'])->name('brand_create');
Route::post('brand_create', [brandController::class,'store'])->name('brand_create'); 
Route::get('brand_detail/{id}', [brandController::class,'show'])->name('brand_detail');
Route::get('brand_edit/{id}', [brandController::class,'edit'])->name('brand_edit');
Route::post('brand_update/{id}', [brandController::class,'update'])->name('brand_update');
Route::post('brand_delete/{id}', [brandController::class,'destroy'])->name('brand_delete');

Route::get('sub_categorys_manage', [subcategorysController::class,'index'])->name('sub_categorys_manage');
Route::get('sub_categorys_create', [subcategorysController::class,'create'])->name('sub_categorys_create');
Route::post('sub_categorys_create', [subcategorysController::class,'store'])->name('sub_categorys_create'); 
Route::get('sub_categorys_detail/{id}', [subcategorysController::class,'show'])->name('sub_categorys_detail');
Route::get('sub_categorys_edit/{id}', [subcategorysController::class,'edit'])->name('sub_categorys_edit');
Route::post('sub_categorys_update/{id}', [subcategorysController::class,'update'])->name('sub_categorys_update');
Route::post('sub_categorys_delete/{id}', [subcategorysController::class,'destroy'])->name('sub_categorys_delete');
