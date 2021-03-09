<?php

use Illuminate\Support\Facades\Route;

Route::get('/clear', function () {
    \Illuminate\Support\Facades\Artisan::call('cache:clear');
    \Illuminate\Support\Facades\Artisan::call('config:clear');
    \Illuminate\Support\Facades\Artisan::call('config:cache');
    \Illuminate\Support\Facades\Artisan::call('view:clear');
    \Illuminate\Support\Facades\Artisan::call('route:clear');
    return 'Cleared!';
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// front-end
Route::get('/', 'FrontController@index')->name('home');
// Route::get('/category-two-e-photos/{id}', 'FrontController@header')->name('category-two-e-photos');

Route::get('/audio', 'FrontController@audio')->name('audio');
Route::get('photo', 'FrontController@photo')->name('photo');
Route::get('illustration', 'FrontController@illustration')->name('illustration');
Route::get('vector', 'FrontController@vector')->name('vector');
Route::get('free', 'FrontController@free')->name('free');
Route::get('templates', 'FrontController@templates')->name('templates');
Route::get('three_d_view', 'FrontController@three_d_view')->name('three_d_view');
Route::get('editorial', 'FrontController@editorial')->name('editorial');
Route::get('premium', 'FrontController@premium')->name('premium');
Route::get('video', 'FrontController@video')->name('video');
Route::get('product/{slug}', 'FrontController@product_view')->name('product_view');
Route::get('search', 'FrontController@search')->name('search');

// cart systtem
Route::get('/cart', 'CartController@cart')->name('cart.index');
Route::post('/cart/add', 'CartController@add')->name('cart.store');
Route::post('/cart/update', 'CartController@update')->name('cart.update');
Route::post('/cart/remove', 'CartController@remove')->name('cart.remove');
Route::post('/cart/clear', 'CartController@clear')->name('cart.clear');


Route::group(['as' => 'admin.', 'prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => ['auth', 'admin']], function () {

    Route::get('dashboard', 'DashboardController@index')->name('dashboard');

    Route::get('category', 'CategoryController@index')->name('category');
    Route::get('category-create', 'CategoryController@create')->name('category.create');
    Route::post('category-store', 'CategoryController@store')->name('category.store');
    Route::get('category-edit-{id}', 'CategoryController@edit')->name('category.edit');
    Route::post('category-update', 'CategoryController@update')->name('category.update');
    Route::post('category-delete-{id}', 'CategoryController@delete')->name('category.delete');

    Route::get('subcategory', 'SubcategoryController@index')->name('subcategory');
    Route::get('subcategory-create', 'SubcategoryController@create')->name('subcategory.create');
    Route::post('subcategory-store', 'SubcategoryController@store')->name('subcategory.store');
    Route::get('subcategory-edit-{id}', 'SubcategoryController@edit')->name('subcategory.edit');
    Route::post('subcategory-update', 'SubcategoryController@update')->name('subcategory.update');
    Route::post('subcategory-delete-{id}', 'SubcategoryController@delete')->name('subcategory.delete');

    Route::get('product', 'ProductController@index')->name('product');
    Route::get('product-create', 'ProductController@create')->name('product.create');
    Route::post('product-store', 'ProductController@store')->name('product.store');
    Route::get('product-edit-{id}', 'ProductController@edit')->name('product.edit');
    Route::post('product-update', 'ProductController@update')->name('product.update');
    Route::post('product-delete-{id}', 'ProductController@delete')->name('product.delete');

    Route::get('media', 'MediaController@index')->name('media');
    Route::get('add-media', 'MediaController@add')->name('add_media');
    Route::post('add-video', 'MediaController@add_video')->name('add_video');
    Route::post('add-audio', 'MediaController@add_audio')->name('add_audio');
    Route::post('add-3D', 'MediaController@add_three_d')->name('add_three_d');

    Route::get('edit-video-{id}', 'MediaController@edit_video')->name('edit_video');
    Route::get('edit-audio/{id}', 'MediaController@edit_audio')->name('edit_audio');
    Route::get('edit-3D-{id}', 'MediaController@edit_three_d')->name('edit_three_d');

    Route::post('update-video', 'MediaController@update_video')->name('update_video');
    Route::post('update-audio', 'MediaController@update_audio')->name('update_audio');
    Route::post('update-3D', 'MediaController@update_three_d')->name('update_three_d');

    Route::post('delete-video/{id}', 'MediaController@delete_video')->name('delete_video');
    Route::post('delete-audio/{id}', 'MediaController@delete_audio')->name('delete_audio');
    Route::post('delete-3D-{id}', 'MediaController@delete_three_d')->name('delete_three_d');

});

Route::group(['as' => 'user.', 'prefix' => 'user', 'namespace' => 'User', 'middleware' => ['auth', 'user']], function () {

    Route::get('dashboard', 'DashboardController@index')->name('dashboard');

    Route::get('product', 'DashboardController@user_product')->name('user_product');
    Route::get('add-product', 'DashboardController@add_user_product')->name('add_user_product');
    Route::post('store-product', 'DashboardController@store_user_product')->name('store_user_product');
    Route::get('edit-product-{id}', 'DashboardController@edit_user_product')->name('edit_user_product');
    Route::post('update-product', 'DashboardController@update_user_product')->name('update_user_product');
    Route::post('delete-product-{id}', 'DashboardController@delete_user_product')->name('delete_user_product');

    // account balance

    Route::get('account-balance', 'DashboardController@user_account_balance')->name('user_balance');

    // User profle
    Route::get('settings', 'SettingController@index')->name('settings');
    Route::put('profile-update/{id}', 'SettingController@updateProfile')->name('profile.update');
    Route::put('password-update', 'SettingController@updatePassword')->name('password.update');

    
});

// Ajax route
Route::get('/findProductName', 'Admin\ProductController@findProductName');
