<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backoffice\FormController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\Backoffice\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;

Route::get('/welcome', function () {
    return view('welcome');
});
Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/product', [ProductController::class, 'all_product'])->name('all_product');
Route::get('/product/{id}', [ProductController::class, 'id_produit'])->name('id_product');
Route::post('/cart', [CartController::class, 'panier'])->name('panier');
Route::get('/cart', [CartController::class, 'panierget'])->name('panierget');
Route::post('/ty', [CartController::class, 'thanks'])->name('thanks');

Route::get('test', [FormController::class, 'test'])->name('test');

//Route::prefix('backoffice')
//    ->group(function () {
//        Route::get(null, [\App\Http\Controllers\Backoffice\DashboardController::class, 'dashboard'])->name('backoffice.dashboard.dashboard');
//        Route::get('product', [\App\Http\Controllers\Backoffice\ProductController::class, 'productList'])->name('backoffice.product.productList');
//
//        Route::get('product/create', [\App\Http\Controllers\Backoffice\ProductController::class, 'create'])->name('backoffice.product.create');
//        Route::post('product/create', [\App\Http\Controllers\Backoffice\ProductController::class, 'create'])->name('backoffice.product.create');
//
//        Route::get('product/read', [\App\Http\Controllers\Backoffice\ProductController::class, 'read'])->name('backoffice.product.read');
//
//        Route::get('product/update/{id}', [\App\Http\Controllers\Backoffice\ProductController::class, 'update'])->name('backoffice.product.update');
//        Route::post('product/update/{id}', [\App\Http\Controllers\Backoffice\ProductController::class, 'updatesave'])->name('backoffice.product.updatesave');
//
//        Route::get('product/delete/{id}', [\App\Http\Controllers\Backoffice\ProductController::class, 'delete'])->name('backoffice.product.delete');
//        Route::get('form', [FormController::class, 'form'])->name('backoffice.test.form');
//        Route::post('form', [FormController::class, 'formpost'])->name('backoffice.test.form');
//    });
Route::prefix('/dashboard')->group(function () {
    Route::middleware('can:acess-admin')->group(function () {
        Route::get(null, [DashboardController::class, 'dashboardv2'])->middleware(['auth', 'verified'])->name('dashboard');
        Route::get('product', [\App\Http\Controllers\Backoffice\ProductController::class, 'productList'])->middleware(['auth', 'verified'])->name('backoffice.product.productList');

        Route::get('product/create', [\App\Http\Controllers\Backoffice\ProductController::class, 'create'])->middleware(['auth', 'verified'])->name('backoffice.product.create');
        Route::post('product/create', [\App\Http\Controllers\Backoffice\ProductController::class, 'create'])->middleware(['auth', 'verified'])->name('backoffice.product.create');

        Route::get('product/read', [\App\Http\Controllers\Backoffice\ProductController::class, 'read'])->middleware(['auth', 'verified'])->name('backoffice.product.read');

        Route::get('product/update/{id}', [\App\Http\Controllers\Backoffice\ProductController::class, 'update'])->middleware(['auth', 'verified'])->name('backoffice.product.update');
        Route::post('product/update/{id}', [\App\Http\Controllers\Backoffice\ProductController::class, 'updatesave'])->middleware(['auth', 'verified'])->name('backoffice.product.updatesave');

        Route::get('product/delete/{id}', [\App\Http\Controllers\Backoffice\ProductController::class, 'delete'])->middleware(['auth', 'verified'])->name('backoffice.product.delete');
        Route::get('form', [FormController::class, 'form'])->middleware(['auth', 'verified'])->name('backoffice.test.form');
        Route::post('form', [FormController::class, 'formpost'])->middleware(['auth', 'verified'])->name('backoffice.test.form');
    });
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
