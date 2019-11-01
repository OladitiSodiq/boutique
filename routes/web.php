<?php

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

Route::get('/', 'c_ustomer@productLandingPage')->name('home');
Route::post('/ajax-desc', 'c_ustomer@ajaxDesc')->name('ajax.desc');

Route::get('/add-to-cart/{id}', 'c_ustomer@addToCart');
Route::get('/cart', 'c_ustomer@showCart');
Route::patch('/update-cart/{id}', 'c_ustomer@updateCart');
Route::get('/wishlist/{id}', 'c_ustomer@addTowishlist');

Route::get('/customer-login', function () {
  if (Session::get('logged_in')) {
    return redirect('/');
  }
  return view('customer-login');
})->name('customer-login');

Route::post('/customer-login', 'c_ustomer@login');

Route::get('/customer-register', function () {

  return view('/customer-register');
})->name('register');

Route::post('/customer-register', 'c_ustomer@register');

Route::view('/register_success', 'register_success');
Route::get('/customer-account', 'c_ustomer@cus_accoutnt')->middleware('isValidUser')->name('customer.account');

Route::group(['middleware' => ['isAdmin', 'isValidUser']], function () {
  // account_update
  Route::post('/account_update', 'c_ustomer@updateProfile');
  //

  Route::get('/customer-order', 'c_ustomer@order_view');
  Route::get('/customer-orders', 'c_ustomer@orders_view');
  Route::post('/add-new-product', 'c_ustomer@add_food');
  // Route::post('/account_update', 'c_ustomer@');
  Route::get('/change_password', 'c_ustomer@chnge_pword');
  // Route::get('/catalogue', 'ProductController@productCatalogue');
  // Route::get('/orders/all', 'OrdersController@show_all_orders');
  // Route::get('/orders/new', 'OrdersController@show_new_orders');
  // Route::get('/order/{id}', 'OrdersController@show_order_with_id');
  // Route::get('/modify/{id}', 'ProductController@modifyView');
  // Route::post('/modify-product', 'ProductController@editProductDetails');
  // Route::get('/view/{id}', 'ProductController@viewProductDetails');
  // Route::get('/confirm-delete/{id}', 'ProductController@deleteProductView');
  // Route::get('/delete/{id}', 'ProductController@deleteProduct');
  // Route::get('/add-to/{id}', 'ProductController@addToView');
  // Route::post('/add-to', 'ProductController@addTo');
  // Route::post('/change-order-status', 'OrdersController@changeOrderStatus');
  // Route::get('/orders/all/{cat}', 'OrdersController@showOrderCategory');


  // Route::get('/invoice', 'OrdersController@adminDownloadInvoice');


  // Route::get('/settings', function () {
  //   return view('dashboard.settings');
  // })->name('dashboard.settings');

  // Route::fallback(function () {
  //   return response()->view('dashboard.404', [], 404);
  // });

});
