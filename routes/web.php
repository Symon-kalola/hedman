<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Auth\Middleware\EnsureEmailIsVerified;
use Illuminate\Http\Request;

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



Auth::routes(
['verify'=> true]
);

// ordinary viewers route

Route::get('/', [HomeController::class, 'index'])->name('homes');
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::post('/home/partners/req', [HomeController::class, 'request'])->name('request');

Route::get('/gallery', [HomeController::class, 'gallery'])->name('gallery');
Route::get('/about', [HomeController::class, 'about'])->name('bout');
Route::post('/feedback/store', [HomeController::class, 'feebackStore'])->name('storefeedackb');

   Route::post('/order/store', [HomeController::class, 'storeOrder'])->name('storeOrder');
   // ->middleware(['auth', 'verified']);
   Route:: get('/orders', [HomeController::class, 'getOrders'])->name('getOrders');
   // ->middleware(['auth', 'verified']);    


Route::fallback(function(){
   return redirect('/');
   
});

// email verifying routes

// verifying notice route
// Route::get('/email/verify', function () {
//     return view('auth.verify-email');
// })->middleware('auth')->name('verification.notice');

// // handler 
// Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
//     $request->fulfill();
 
//     return redirect('/home');
// })->middleware(['auth', 'signed'])->name('verification.verify');

// // resending route

// Route::post('/email/verification-notification', function (Request $request) {
//     $request->user()->sendEmailVerificationNotification();
 
//     return back()->with('message', 'Verification link sent!');
// })->middleware(['auth', 'throttle:6,1'])->name('verification.send');

//admin routes                                 
Route::get('/admin/home', [AdminController::class,'index'])->name('admin.home');
Route::get('/admin/posts/innovations', [AdminController::class,'innovPosts'])->name('admin.innovposts');
Route::get('/admin/posts/activities', [AdminController::class,'activPosts'])->name('admin.activeposts');

Route::post('/admin/add/activity', [AdminController::class,'activAdd'])->name('admin.activAdd');
Route::get('/admin/activity', [AdminController::class,'activity'])->name('admin.activty');

Route::get('/admin/activity/delete/{id}', [AdminController::class,'activityDel'])->name('admin.activity.delete');
Route::get('/admin/innov/delete/{id}', [AdminController::class,'innovDel'])->name('admin.innov.delete');


Route::post('/admin/add/innovation', [AdminController::class,'innovAdd'])->name('admin.innovAdd');
Route::get('/admin/innovation', [AdminController::class,'innovation'])->name('admin.innovation');


Route::get('/admin/help', [AdminController::class,'innovAdd'])->name('admin.help');
Route::get('/admin/partners', [AdminController::class,'partners'])->name('admin.partners');
Route::post('/firm/products/edit',[AdminController::class,'editProduct'])->name('firm.products.edit');