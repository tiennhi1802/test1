<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\OptionSizeController;
use App\Http\Controllers\OptionTopingController;
use App\Http\Controllers\ProductController;
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
// Home
Route::get('/', [ProductController::class, 'show'])->name('show');
Route::get('/menu/{name}', [ProductController::class, 'menu'])->name('menu');
Route::get('/product/{id}', [ProductController::class, 'productDetail'])->name('productDetail');
Route::post('/product/{id}', [ProductController::class, 'addCart'])->name('addCart');
Route::get('/cart', [CartController::class, 'index'])->name('cart');
Route::get('/delete/{id}', [CartController::class, 'delete'])->name('deleteCart');
Route::get('/buy', [CartController::class, 'buy'])->name('buy');



Route::prefix('admin')->group(function () {
    Route::get('/', function () {
        return view('admin.index');
    })->name('admin.index');
    Route::prefix('product')->group(function () {
        Route::get('/', [ProductController::class, 'index'])->name('product.index');
        Route::get('/create', [ProductController::class , 'create'])->name('product.create');
        Route::post('/create', [ProductController::class , 'store'])->name('product.store');
        Route::get('/edit/{id}', [ProductController::class , 'edit'])->name('product.edit');
        Route::put('/edit/{id}', [ProductController::class , 'update'])->name('product.update');
        Route::delete('/delete/{id}', [ProductController::class , 'delete'])->name('product.delete');
    });
    Route::prefix('category')->group(function () {
        Route::get('/', [CategoryController::class, 'index'])->name('category.index');
        Route::get('/create', [CategoryController::class, 'create'])->name('category.create');
        Route::post('/create', [CategoryController::class, 'store'])->name('category.store');
        Route::get('/edit/{id}', [CategoryController::class, 'edit'])->name('category.edit');
        Route::put('/edit/{id}', [CategoryController::class, 'update'])->name('category.update');
        Route::delete('/delete/{id}', [CategoryController::class, 'delete'])->name('category.delete');
    });
    Route::prefix('optionsize')->group(function () {
        Route::get('/', [OptionSizeController::class, 'index'])->name('optionsize.index');
        Route::get('/create', [OptionSizeController::class, 'create'])->name('optionsize.create');
        Route::post('/create', [OptionSizeController::class, 'store'])->name('optionsize.store');
        Route::get('/edit/{id}', [OptionSizeController::class, 'edit'])->name('optionsize.edit');
        Route::put('/edit/{id}', [OptionSizeController::class, 'update'])->name('optionsize.update');
        Route::delete('/delete/{id}', [OptionSizeController::class, 'delete'])->name('optionsize.delete');
    });
    Route::prefix('optiontoping')->group(function () {
        Route::get('/', [OptionTopingController::class, 'index'])->name('optiontoping.index');
        Route::get('/create', [OptionTopingController::class, 'create'])->name('optiontoping.create');
        Route::post('/create', [OptionTopingController::class, 'store'])->name('optiontoping.store');
        Route::get('/edit/{id}', [OptionTopingController::class, 'edit'])->name('optiontoping.edit');
        Route::put('/edit/{id}', [OptionTopingController::class, 'update'])->name('optiontoping.update');
        Route::delete('/delete/{id}', [OptionTopingController::class, 'delete'])->name('optiontoping.delete');
    });
});


// Route::get('/', function () {
//     return view('home.index');
// // });
Route::get('/s/carts', function () {
    return view('home.cart');
});
// Route::get('/s/product', function () {
//     return view('home.product');
// });
// Route::get('/product', function () {
//     return view('home.product');
// });
// Route::get('/admin', function () {
//     return view('admin.admin.index');
// });
// Route::get('/admin/add', function () {
//     return view('admin.admin.category_add');
// });
// Route::get('/admin/list', [ProductController::class , 'index']);
// Route::get('/admin/edit', function () {
//     return view('admin.admin.category_edit');
// });