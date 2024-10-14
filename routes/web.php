<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SubCategoryController;
use App\Http\Controllers\LogoController;
use App\Http\Controllers\PrivacyPolicyController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\InfoController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ThemeController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\FrontThemeController;
use App\Http\Controllers\FrontCategoryController;
use App\Http\Controllers\AuthCustommerController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CustomerOrderController;
use App\Http\Middleware\CustomerMiddleware;
use App\Http\Controllers\CatSubController;


    Route::get('/',[HomeController::class,'index'])->name('home');
    Route::get('/cat/{slug}', [FrontCategoryController::class, 'index'])->name('single-category');
    Route::get('/detail/{categorySlug}/{postSlug}', [FrontThemeController::class, 'index'])->name('detail');
    Route::get('cart-page', [CartController::class, 'index'])->name('add-to-cart');
    Route::get('order-page/{id}/{slug}', [CustomerOrderController::class, 'index'])->name('order-page');
    Route::get('complete-order', [CustomerOrderController::class, 'completeOrder'])->name('complete-order');

    Route::get('customer-register', [AuthCustommerController::class, 'index'])->name('customer-register')->middleware('customerlogin');
    Route::get('customer-login', [AuthCustommerController::class, 'login'])->name('customer-login')->middleware('customerlogin');
    Route::get('customer-logincheck', [AuthCustommerController::class, 'logincheck'])->name('customer-logincheck');
    Route::post('new-customer', [AuthCustommerController::class, 'storeCustomer'])->name('store-customer');
    Route::get('customer-dashboard', [AuthCustommerController::class, 'dashboard'])->name('customer-dashboard')->middleware('customer');
    Route::get('customer-profile', [AuthCustommerController::class, 'profile'])->name('customer-profile')->middleware('customer');
    Route::post('customer-update', [AuthCustommerController::class, 'updateCustomer'])->name('customer-update')->middleware('customer');
    Route::post('customer-password-change', [AuthCustommerController::class, 'changePassword'])->name('customer-password-change')->middleware('customer');
    Route::get('customer-logout', [AuthCustommerController::class, 'customerLogout'])->name('customer-logout')->middleware('customer');


    Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified',])->group(function ()
    {
    Route::get('/dashboard',[DashboardController::class,'index'])->name('dashboard');

    Route::resource('category',CategoryController::class);
    Route::get('/get-sub-category-by-id',[CatSubController::class,'getSubCategory'])->name('product.sub-category');
    Route::resource('subcategory',SubCategoryController::class);
    Route::resource('logos',LogoController::class);
    Route::resource('privacyPolicy',PrivacyPolicyController::class);
    Route::resource('slider',SliderController::class);
    Route::resource('aboutus',AboutUsController::class);
    Route::resource('info',InfoController::class);
    Route::resource('theme',ThemeController::class);
    Route::resource('blog',BlogController::class);

    });
