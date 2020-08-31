<?php

Route::get('/index','FrontController@index');
Route::get('/categories','FrontController@getCategory');
Route::get('/category-products/{id}','FrontController@getCategoryProduct');
Route::get('/product-details/{id}','FrontController@productDetails');
Route::post('/add-to-cart','FrontController@addToCart');
Route::get('/show-cart','FrontController@showCart');
Route::get('/delete-cart/{rowid}','FrontController@deleteCart');
Route::post('/update-cart/{rowId}','FrontController@updateCart');
//Route::get('/{anypath}', 'FrontController@index')->where('any', '.*');
//Route::get('/category/{id}','FrontController@category')->name('category');
//Route::get('/products/{id}/{name}','FrontController@products')->name('products');
//Route::get('/about','FrontController@about')->name('about');
Route::get('/checkout','FrontController@Checkout');
Route::post('/checkout-registration','CustomerController@CheckoutReg');
Route::post('/checkout/login','CustomerController@checkoutLogin');
Route::get('/shipping','CustomerController@shippingForm');
Route::post('/shipping/save','CustomerController@shippingSave');



Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');


Route::get('/admin-category', 'CategoryController@index')->name('admin-category');
Route::get('/add-category', 'CategoryController@addCategory')->name('add-category');
Route::post('/save-category', 'CategoryController@saveCategory')->name('save-category');
Route::get('/unpublished-category/{id}', 'CategoryController@UnpublishCategory')->name('unpublished-category');
Route::get('/published-category/{id}', 'CategoryController@publishCategory')->name('published-category');
Route::get('/edit-category/{id}', 'CategoryController@EditCategory')->name('edit-category');
Route::post('/update-category', 'CategoryController@UpdateCategory')->name('update-category');
Route::get('/delete-category/{id}', 'CategoryController@DeleteCategory')->name('delete-category')->middleware('superAdmin');

Route::resource('brand','BrandController');
Route::resource('product','ProductController');

Route::resource('user','UserController')->middleware('superAdmin');

