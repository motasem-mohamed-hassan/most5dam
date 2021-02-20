<?php

use App\Http\Controllers\Front\AboutController;

use Illuminate\Support\Facades\Route;


Route::namespace('Front')->group(function() {

    Route::get('/', 'productsController@index')->name('home'); #need search and select boxs
    Route::get('product/{id}', 'productsController@show')->name('singleProduct');   #need data
    Route::get('/category/{id}', 'CategoryController@show')->name('categoryPage');   #need data and select box
    Route::get('/price-range', 'CategoryController@range')->name('priceRange');     #need to add slider
    Route::get('/contact', 'ContactController@index')->name('contactPage');         #data
    Route::post('/contact', 'ContactController@store')->name('sendEmail');
    Route::get('/about-us', 'AboutController@index')->name('aboutUs');


});

Route::middleware('auth')->namespace('Front')->group(function() {

    //add products
    Route::get('/adding', 'AddController@index')->name('get_add');
    Route::get('/adding/category', 'AddController@category')->name('get_add_category');
    Route::get('/adding/chose', 'AddController@choseSub')->name('chose_sub');
    Route::post('/adding', 'AddController@store')->name('post_add');
    Route::get('/edit-product/{id}', 'AddController@show')->name('edit_product');
    Route::put('/edit-product/{id}', 'AddController@update')->name('update_product');
    Route::delete('/delete-product/{id}', 'AddController@delete')->name('delete_product');
    Route::get('/profile/{id}', 'ProfileController@show')->name('profile');
    Route::put('/profile/update', 'ProfileController@update')->name('profile.update');
    Route::post('/profile/{id}/avatar', 'ProfileController@avater')->name('add-avatar');
    Route::get('/profile/{id}/products', 'ProfileController@personalProduct')->name('personal-products');

});

Route::namespace('Dashboard')->as('admin.')->middleware('role:admin|superAdmin')->group(function() {

    Route::get('/dashboard', 'DashboardController@index')->name('dashboard');

    //category
    Route::get('/dashboard/categories', 'CategoriesController@index')->name('categories.index');
    Route::post('/dashboard/categories/store', 'CategoriesController@store')->name('categories.store');
    Route::get('/dashboard/categories/edit', 'CategoriesController@edit')->name('categories.edit');
    Route::post('/dashboard/categories/update', 'CategoriesController@update')->name('categories.update');
    Route::delete('/dashboard/categories','CategoriesController@destroy')->name('categories.delete');

    //filter
    Route::get('/dashboard/filters', 'FiltersController@index')->name('filters.index');
    Route::post('/dashboard/filters', 'FiltersController@store')->name('filter.store');
    Route::get('/dashboard/filters/edit', 'FiltersController@edit')->name('filter.edit');
    Route::post('/dashboard/filters/update', 'FiltersController@update')->name('filter.update');
    Route::delete('/dashboard/filters/delete', 'FiltersController@destroy')->name('filter.delete');

    //Value
    Route::get('/dashboard/values', 'ValuesController@index')->name('values.index');

    //products view
    Route::get('/dashboard/products', 'productsController@index')->name('products.index');
    Route::get('/dashboard/waiting', 'ProductsController@waiting')->name('products.waiting');
    Route::get('/dashboard/approved', 'ProductsController@approved')->name('products.approved');

    Route::get('/dashboard/products/approve', 'productsController@approve')->name('products.approve');
    Route::get('/dashboard/products/delete', 'productsController@delete')->name('products.delete');
    Route::get('dashboard/product/{id}', 'productsController@show')->name('show-btn');

    Route::resource('/dashboard/users', 'UsersController');

    Route::put('/makeadmin/{id}', 'UsersController@makeAdmin')->name('makeAdmin');

    Route::get('/dashboard/pages', 'AboutController@index')->name('info');
    Route::get('/dashboard/setting', 'SettingController@index')->name('setting');

    Route::put('/dashboard/setting/update/{id}', 'SettingController@update')->name('update.setting');
    Route::put('/dashboard/about/update/{id}', 'AboutController@update')->name('update.about');


});

Auth::routes();
Route::get('/verify', 'VerifyController@show')->name('verify');
Route::post('/verify', 'VerifyController@verify')->name('verify');



