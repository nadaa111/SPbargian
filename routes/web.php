<?php

use App\Http\Controllers\AboutController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;


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

//Route::get('/', function () {
  //  return view('welcome');
//});

Auth::routes();

Route::get('/',[ App\Http\Controllers\Frontend\FrontendController::class,'index']);
Route::get('/contact-us',[ContactController::class, 'contact']);
Route::get('/contact',[ContactController::class, 'sendEmail'])->name('contact.us');
//Route::get('/profile', 'UserController@index')->name('trial.index');
Route::get('/profile',[ App\Http\Controllers\Frontend\UserController::class,'index']);
Route::post('/profile',[ App\Http\Controllers\Frontend\UserController::class,'updateUserDetails']);
Route::get('/about', function () {
    return view('about');
   
    //Route::get('/profile/{id}', 'show'); Route::post('/profile', 'store');
   
  
});
Route::get('cart',[App\Http\Controllers\Frontend\CartController::class, 'index']);
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/',[ App\Http\Controllers\Frontend\FrontendController::class,'index']);
Route::get('/contact-us',[ContactController::class, 'contact']);
Route::get('/contact',[ContactController::class, 'sendEmail'])->name('contact.us');
Route::get('whishlist', [WishlistController::class, 'index']);


Route::get('/about', function () {
    return view('about');
});
Auth::routes();
Route::get('/', [App\Http\Controllers\Frontend\FrontendController::class, 'index']);
Route::get('/collections',[App\Http\Controllers\Frontend\FrontendController::class, 'categories']);
Route::get('/collections/{category_slug}', [App\Http\Controllers\Frontend\FrontendController::class, 'products']);
Route::get('/collections/{category_slug}/{product_slug}', [App\Http\Controllers\Frontend\FrontendController::class, 'productView']);
Route::get('whishlist', [App\Http\Controllers\Frontend\WishlistController::class, 'index']);
 Route::get('cart', [App\Http\Controllers\Frontend\CartController::class, 'index']);
Route::get('About Us',[App\Http\Controllers\Frontend\FrontendController::class, 'about']);



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('admin')->middleware(['auth','isAdmin'])->group(function(){
Route ::get("dashboard",[App\Http\Controllers\Admin\DashboardController::class, 'index']);

Route::controller(App\Http\Controllers\Admin\SliderController::class)->group(function () {
  Route::get('sliders','index');
  Route::get('sliders/create','create');
  Route::post('sliders/create','store');
  Route::get('sliders/{slider}/edit','edit');
  Route::put('sliders/{slider}', 'update');
  Route::get('sliders/{slider}/delete','destroy');
});

//Category Routes
Route::controller(App\Http\Controllers\Admin\CategoryController::class)->group(function () {
    Route::get('/category', 'index');
    Route::get('/category/create', 'create');
    Route::post('/category', 'store');
    Route::get('/category/{category}/edit', 'edit');
    Route::put('/category/{category}', 'update');
    Route::get('category/{category_id}/delete','destroy');


});
Route::controller(App\Http\Controllers\Admin\ProductController::class)->group(function () {
    Route::get('/products', 'index');
    Route::get('/products/create','create');
    Route::post('/products','store');
    Route::get('/products/{product}/edit','edit');
    Route::put('/products/{product}', 'update');
    Route::get('products/{product_id}/delete','destroy');
    Route::get('product-image/{product_image_id}/delete','destroyimage');



});
});







