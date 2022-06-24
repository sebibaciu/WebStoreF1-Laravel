<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\StripeController;

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


Route::get('/', 'App\Http\Controllers\HomeController@index')->name("home.index");
Route::get('/about', 'App\Http\Controllers\HomeController@about')->name("home.about");
Route::get('/products', 'App\Http\Controllers\ProductController@index')->name("product.index");
Route::get('/products/{id}', 'App\Http\Controllers\ProductController@show')->name("product.show");
Route::get('/cart', 'App\Http\Controllers\CartController@index')->name("cart.index");
Route::get('/cart/delete', 'App\Http\Controllers\CartController@delete')->name("cart.delete");
Route::post('/cart/add/{id}', 'App\Http\Controllers\CartController@add')->name("cart.add");

Route::middleware('auth')->group(function () {
    Route::get('/cart/purchase', 'App\Http\Controllers\CartController@purchase')->name("cart.purchase");
    Route::get('/my-account/orders', 'App\Http\Controllers\MyAccountController@orders')->name("myaccount.orders");
    Route::post('/my-account/update/{id}', 'App\Http\Controllers\MyAccountController@update')->name("myaccount.updatesize");
});


Route::get('/teams/ferrari', 'App\Http\Controllers\TeamsController@ferrari')->name("teams.ferrari");
Route::get('/teams/mercedes', 'App\Http\Controllers\TeamsController@mercedes')->name("teams.mercedes");
Route::get('/teams/redbull', 'App\Http\Controllers\TeamsController@redbull')->name("teams.redbull");
Route::get('/teams/mclaren', 'App\Http\Controllers\TeamsController@mclaren')->name("teams.mclaren");
Route::get('/teams/alpine', 'App\Http\Controllers\TeamsController@alpine')->name("teams.alpine");
Route::get('/teams/haas', 'App\Http\Controllers\TeamsController@haas')->name("teams.haas");
Route::get('/teams/williams', 'App\Http\Controllers\TeamsController@williams')->name("teams.williams");
Route::get('/teams/astonmartin', 'App\Http\Controllers\TeamsController@astonmartin')->name("teams.astonmartin");
Route::get('/teams/alphatauri', 'App\Http\Controllers\TeamsController@alphatauri')->name("teams.alphatauri");
Route::get('/teams/alfaromeo', 'App\Http\Controllers\TeamsController@alfaromeo')->name("teams.alfaromeo");


Route::get('stripe', [StripeController::class, 'stripe'])->name('stripe');
Route::post('stripe', [StripeController::class, 'stripePost'])->name('stripe.post');



Route::middleware('admin')->group(function () {
    Route::get('/admin', 'App\Http\Controllers\Admin\AdminHomeController@index')->name("admin.home.index");
    Route::get('/admin/products', 'App\Http\Controllers\Admin\AdminProductController@index')->name("admin.product.index");
    Route::post('/admin/products/store', 'App\Http\Controllers\Admin\AdminProductController@store')->name("admin.product.store");
    Route::delete('admin/products/{id}/delete', 'App\Http\Controllers\Admin\AdminProductController@delete')->name("admin.product.delete");
    Route::get('/admin/products/{id}/edit', 'App\Http\Controllers\Admin\AdminProductController@edit')->name("admin.product.edit");
    Route::put('/admin/products/{id}/update', 'App\Http\Controllers\Admin\AdminProductController@update')->name("admin.product.update");
});

Auth::routes();
