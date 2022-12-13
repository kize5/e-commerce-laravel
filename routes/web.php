<?php

use App\Http\Controllers\Backoffice\FormController;
use App\Http\Controllers\BackofficeController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/product', [ProductController::class, 'all_product'])->name('all_product');
Route::get('/product/{id}', [ProductController::class, 'id_produit'])->name('id_product');
Route::get('/cart', [CartController::class, 'panierget'])->name('panierget');
Route::post('/cart', [CartController::class, 'panier'])->name('panier');

Route::get('test', [FormController::class, 'test'])->name('test');



Route::prefix('backoffice')
    ->group(function () {
        Route::get(null, [\App\Http\Controllers\Backoffice\DashboardController::class, 'dashboard'])->name('backoffice.dashboard.dashboard');
        Route::get('product', [\App\Http\Controllers\Backoffice\ProductController::class, 'productList'])->name('backoffice.product.productList');

        Route::get('product/create', [\App\Http\Controllers\Backoffice\ProductController::class, 'create'])->name('backoffice.product.create');
        Route::post('product/create', [\App\Http\Controllers\Backoffice\ProductController::class, 'create'])->name('backoffice.product.create');

        Route::get('product/read', [\App\Http\Controllers\Backoffice\ProductController::class, 'read'])->name('backoffice.product.read');

        Route::get('product/update/{id}', [\App\Http\Controllers\Backoffice\ProductController::class, 'update'])->name('backoffice.product.update');
        Route::post('product/update/{id}', [\App\Http\Controllers\Backoffice\ProductController::class, 'updatesave'])->name('backoffice.product.updatesave');

        Route::get('product/delete/{id}', [\App\Http\Controllers\Backoffice\ProductController::class, 'delete'])->name('backoffice.product.delete');

        Route::get('form',[FormController::class, 'create'])->name('backoffice.test.create');
        Route::post('form',[FormController::class, 'store'])->name('backoffice.test.store');
    });

/* Breeze */
//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
Auth::routes();


