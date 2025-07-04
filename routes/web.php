<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AgentController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\StripePaymentController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MailController;

Route::get('/', [HomeController::class, 'index'])->name('index');


Route::post('send-mail', [MailController::class, 'index'])->name('send-mail');


Route::middleware('auth')->group(function () {
    Route::get('/redirect', [HomeController::class, 'redirect'])->name('dashboard');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    // Route::patch('/profile', [ProfileController::class, 'updatePhoneImage'])->name('profile.update.phone.image');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/useraccount', [HomeController::class, 'showUserAccount'])->name('useraccount');
    Route::get('/cart', [ProductController::class, 'viewCart'])->name('cart');
    Route::get('/checkout', [ProductController::class, 'viewCheckout'])->name('checkout');
    Route::post('/order/store', [OrderController::class, 'store'])->name('order.store');

    Route::get('/payment/transfer/{order}', [OrderController::class, 'showTransferPage'])->name('payment.transfer');

    Route::get('/payment/callback', [OrderController::class, 'paymentCallback'])->name('payment.callback');

    Route::get('/order/{slug}', [OrderController::class, 'showorderdetails'])->name('admin.orderdetails');
    Route::get('/orders/{slug}', [OrderController::class, 'deleteOrder'])->name('order.delete');
    Route::get('/order/deliver/{slug}', [OrderController::class, 'orderDelivered'])->name('deliver.order');
    Route::get('/admin/orders/{order}/confirm-payment', [OrderController::class, 'confirmPayment'])->name('admin.orders.confirmPayment');


    // PAYMENT ROUTE
    Route::controller(StripePaymentController::class)->group(function () {

        Route::get('stripe', 'stripe')->name('stripe');

        Route::post('stripe', 'stripePost')->name('stripe.post');
    });
});

Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
});
Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/admin/pages/createproduct', [AdminController::class, 'createproduct'])->name('admin.createproduct');
    Route::post('/admin/createproduct', [AdminController::class, 'storeProduct'])->name('admin.storeProduct');
    Route::get('/admin/deleteproduct/{product}', [AdminController::class, 'deleteProduct'])->name('admin.deleteProduct');
    Route::get('/admin/deletecustomer/{customer}', [AdminController::class, 'deleteCustomer'])->name('admin.deleteCustomer');


    Route::get('/admin/pages/categories', [AdminController::class, 'showCategories'])->name('admin.catgories');
    Route::get('/admin/pages/addcategory', [AdminController::class, 'showAddCategory'])->name('admin.add.category');
    Route::post('/admin/createcategory', [AdminController::class, 'storeCategory'])->name('admin.store.category');
    Route::get('/admin/deletecategory/{id}', [AdminController::class, 'deleteCategory'])->name('admin.deleteCategory');
});
Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/admin/pages/products', [AdminController::class, 'showproducts'])->name('admin.products');
    Route::get('/admin/pages/product_search', [AdminController::class, 'product_search'])->name('admin.product.search');
});
Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/admin/pages/productdetails/{product}', [AdminController::class, 'showproductdetails'])->name('admin.productdetails');
});
Route::middleware(['auth', 'role:admin'])->group(function () {});
Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/admin/pages/orders', [AdminController::class, 'showorder'])->name('admin.orders');
    Route::get('/orders/{slug}/download', [OrderController::class, 'downloadPDF'])->name('orders.download');
});
Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/admin/pages/customers', [AdminController::class, 'showcustomers'])->name('admin.customers');
});

Route::middleware(['auth', 'role:agent'])->group(function () {
    Route::get('/agent/dashboard', [AgentController::class, 'dashboard'])->name('agent.dashboard');
});


Route::get('/shop', [HomeController::class, 'showShop'])->name('shop.show');
Route::get('/product_search', [HomeController::class, 'product_search'])->name('product.search');
Route::get('/productdetails/{slug}', [HomeController::class, 'showProductDetails'])->name('shop.product.detail');
Route::get('/about', [HomeController::class, 'showAboutUs'])->name('aboutUs');
Route::get('/faq', [HomeController::class, 'showFaq'])->name('faq');
Route::get('/contact', [HomeController::class, 'showContact'])->name('contact');
Route::get('/wishlist', [HomeController::class, 'showWishlist'])->name('wishlist');
Route::get('/orders', [HomeController::class, 'showOrders'])->name('orders');
Route::get('/address', [HomeController::class, 'showAddress'])->name('address');
Route::get('/accountdetails', [HomeController::class, 'showAccountdetails'])->name('accountdetails');


Route::get('/addtocart/{product}', [ProductController::class, 'addToCart'])->name('addtocart');
Route::patch('/updatecart', [ProductController::class, 'update'])->name('updatecart');
Route::get('/cart/remove/{id}', [ProductController::class, 'remove'])->name('remove.from.cart');

Route::get('/wishlist/{id}', [ProductController::class, 'addToWishList'])->name('addToWishlist');
Route::get('/wishlist/remove/{id}', [ProductController::class, 'removeFromWishlist'])->name('remove.from.wishlist');


require __DIR__ . '/auth.php';
