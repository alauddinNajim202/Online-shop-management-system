<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\OrderController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/redirect', [HomeController::class, 'redirect'])->middleware('auth','verified')->name('redirect');
Route::get('/', [HomeController::class, 'index'])->name('home');

Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});


// category route

Route::get('/admin/category',[CategoryController::class, 'index'])->name('admin.category');
Route::post('/admin/category',[CategoryController::class, 'create'])->name('admin.createcategory');
Route::get('/admin/all-category',[CategoryController::class, 'show'])->name('admin.showcategory');
Route::get('/admin/edit-category/{id}',[CategoryController::class, 'edit'])->name('admin.editcategory');
Route::post('/admin/update-category',[CategoryController::class, 'update'])->name('admin.updatecategory');
Route::get('/admin/delete-category/{id}',[CategoryController::class, 'delete'])->name('admin.deletecategory');



// product route

Route::get('/admin/product',[ProductController::class, 'index'])->name('admin.product');
Route::post('/admin/product',[ProductController::class, 'create'])->name('admin.createproduct');
Route::get('/admin/all-product',[ProductController::class, 'show'])->name('admin.showproduct');
Route::get('/admin/edit-product/{id}',[ProductController::class, 'edit'])->name('admin.editproduct');
Route::post('/admin/update-product',[ProductController::class, 'update'])->name('admin.updateproduct');
Route::get('/admin/delete-product/{id}',[ProductController::class, 'delete'])->name('admin.deleteproduct');






// user product
// Route::get('/product',[HomeController::class, 'product'])->name('product');
Route::get('/details-product/{id}',[HomeController::class, 'details'])->name('detailsproduct');
Route::post('/add-to-cart/{id}',[HomeController::class, 'AddToCart'])->name('addtocart');
Route::get('/show-cart',[HomeController::class, 'showCart'])->name('showcart');
Route::get('/remove-item-to-cart/{id}',[HomeController::class, 'removeItem'])->name('removeitem');
Route::get('/cash-on-delivery',[HomeController::class, 'cashOndelivery'])->name('cashondelivery');
Route::get('/payment-in-card/{totalprice}',[HomeController::class, 'paymentCard'])->name('paymentincard');
Route::post('/payment-in-card/{totalprice}',[HomeController::class, 'stripeCard'])->name('paymentinStripe');

// order route
Route::get('/admin/order',[OrderController::class, 'index'])->name('admin.order');
Route::get('/admin/delete-order/{id}',[OrderController::class, 'delete'])->name('admin.deleteorder');
Route::get('/admin/delivered-order/{id}',[OrderController::class, 'delivered'])->name('admin.deliveredorder');
Route::get('/admin/download-order/{id}',[OrderController::class, 'downloadPDF'])->name('admin.downloadorder');

//user order route
Route::get('/user/order',[OrderController::class, 'order'])->name('user.order');
Route::get('/user/cancel-order/{id}',[OrderController::class, 'cancelorder'])->name('cancelorder');


// email route
Route::get('/admin/send-email/{id}',[EmailController::class, 'sendEmail'])->name('admin.sendemail');
Route::post('/admin/user-send-email/{id}',[EmailController::class, 'userUendEmail'])->name('admin.usersendemail');


// route order search
Route::get('/search',[OrderController::class, 'search'])->name('admin.search');

// comment route
Route::post('/comments',[OrderController::class, 'comment'])->name('comment');
Route::get('/all-comments',[OrderController::class, 'allcomment'])->name('allcomment');

// route product search
Route::get('/product-search',[ProductController::class, 'productSearch'])->name('product.search');
Route::get('/all-product',[ProductController::class, 'allProduct'])->name('products');

// route about
Route::get('/about',[HomeController::class, 'about'])->name('about');
Route::get('/contacts',[HomeController::class, 'contact'])->name('contacts');
Route::post('/contacts',[HomeController::class, 'updateContact'])->name('updatecontacts');


// admin route controller
// Route::get('/dashboard',[AdminController::class, 'index'])->name('admin.dashboard');

Route::get('/testimonial',[AdminController::class, 'testimonial'])->name('admin.testimonial');
Route::post('/testimonial',[AdminController::class, 'createTestimonial'])->name('admin.createtestimonial');

