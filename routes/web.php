<?php

use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SubscriptionController;
use App\Http\Controllers\CvController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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

Route::middleware(['guestOrVerified'])->group(function () {
    Route::get('/', [CvController::class, 'index']);
    Route::get('/demo',[WelcomeController::class, 'index'])->name('welcome');
    Route::get('lang/{lang}', ['as' => 'lang.switch', 'uses' => 'App\Http\Controllers\LanguageController@switchLang']);
    Route::get('/demo/categories', [CategoriesController::class, 'index'])->name('categories.index');
    Route::get('/demo/categories/{categories:slug}', [CategoriesController::class, 'view'])->name('categories.view');
    Route::get('demo/products', [ProductController::class, 'index'])->name('product.index');
    Route::get('demo/categories/{categories:slug}/{product:slug}', [ProductController::class, 'view'])->name('product.view');

    Route::prefix('demo/cart')->name('cart.')->group(function () {
        Route::get('/', [CartController::class, 'index'])->name('index');
        Route::post('/add/{product:slug}', [CartController::class, 'add'])->name('add');
        Route::post('/remove/{product:slug}', [CartController::class, 'remove'])->name('remove');
        Route::post('/update-quantity/{product:slug}', [CartController::class, 'updateQuantity'])->name('update-quantity');
    });
    Route::get('/subscribe', [SubscriptionController::class, 'create'])->name('subscribe.create');
    Route::post('/subscribe', [SubscriptionController::class, 'store'])->name('subscribe.store');
});
Route::middleware(['auth', 'verified'])->group(function() {
    Route::get('demo/profile', [ProfileController::class, 'view'])->name('profile');
    Route::post('demo/profile', [ProfileController::class, 'store'])->name('profile.update');
    Route::post('demo/profile/password-update', [ProfileController::class, 'passwordUpdate'])->name('profile_password.update');
    Route::post('demo/checkout', [CheckoutController::class, 'checkout'])->name('cart.checkout');
    Route::post('demo/checkout/{order}', [CheckoutController::class, 'checkoutOrder'])->name('cart.checkout-order');
    Route::get('demo/checkout/success', [CheckoutController::class, 'success'])->name('checkout.success');
    Route::get('demo/checkout/failure', [CheckoutController::class, 'failure'])->name('checkout.failure');
    Route::get('demo/orders', [OrderController::class, 'index'])->name('order.index');
    Route::get('demo/orders/{order}', [OrderController::class, 'view'])->name('order.view');
});

Route::post('/webhook/stripe', [CheckoutController::class, 'webhook']);

require __DIR__.'/auth.php';
