<?php


Route ::get('/', 'SiteController@index')->name('index');
Route ::get('/product', 'SiteController@product')->name('product');

Auth::routes();
Route::get('/dashboard', 'HomeController@index')->name('home');
Route::get('/brand/add-brand', 'BrandController@addBrand')->name('add-brand');
Route::post('/brand/save-brand', 'BrandController@saveBrand')->name('save-brand');
Route::get('/brand/manage-brand', 'BrandController@manageBrand')->name('manage-brand');
Route::get('/brand/inactive/{id}', 'BrandController@inactive')->name('inactive-brand');
Route::get('/brand/active/{id}', 'BrandController@active')->name('active-brand');
Route::get('/brand/delete/{id}', 'BrandController@delete')->name('delete-brand');






?>
                                                                                                                                                                                                                                                                                                                                                                                
