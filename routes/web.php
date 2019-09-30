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

Route::get('/', function () {
  return view('index');
});

Route::get('/customer-login', function () {
  if (Session::get('logged_in')) {
    return redirect('/');
  }
  return view('customer-login');
})->name('customer-login');

Route::post('/customer-login', 'customers@login');

Route::get('/customer-register', function () {

  return view('/customer-register');
})->name('register');

Route::post('/customer-register', 'customers@register');

Route::view('/register_success', 'register_sucess');
