<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\ContactsController;
use App\Http\Controllers\MainController;
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

Route::get('/', [MainController::class, 'main'])->name('main');
Route::get('/about', [AboutController::class, 'about'])->name('about');
Route::get('/contacts', [ContactsController::class, 'contacts'])->name('contacts');
Route::get('/products', [ProductsController::class, 'products'])->name('products');
Route::get('/cart', [CartController::class, 'cart'])->name('cart');



Route::controller(AuthController::class)->group(function () {
    Route::get('/login', [AuthController::class, 'getLoginPage'])->name('login');
    Route::post('/login', [AuthController::class, 'login'])->name('signIn');
    Route::get('/register', [AuthController::class, 'getRegisterPage'])->name('register');

});
