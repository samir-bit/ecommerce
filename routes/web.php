<?php


Route ::get('/', 'SiteController@index')->name('index');
Route ::get('/product', 'SiteController@product')->name('product');
Auth::routes();


Route:: middleware(['auth'])->group(function (){
Route::get('/dashboard', 'HomeController@index')->name('home');
Route::get('/brand/add-brand', 'BrandController@addBrand')->name('add-brand');
Route::post('/brand/save-brand', 'BrandController@saveBrand')->name('save-brand');
Route::get('/brand/manage-brand', 'BrandController@manageBrand')->name('manage-brand');

/*Route::get('/brand/inactive/{id}', 'BrandController@inactive')->name('inactive-brand');
Route::get('/brand/active/{id}', 'BrandController@active')->name('active-brand');*/

Route::get('/brand/delete/{id}', 'BrandController@delete')->name('delete-brand');
Route::get('/brand/edit/{id}', 'BrandController@edit')->name('edit-brand');
Route::post('/brand/update-brand', 'BrandController@updateBrand')->name('update-brand');
Route::get('/brand/brandStatus/{id}/{s}', 'BrandController@brandStatus')->name('brandStatus');
//Categories
Route::get('/category/manage-category', 'CategoryController@manageCategory')->name('manage-category');
Route::get('/category/add-category', 'CategoryController@addCategory')->name('add-category');
Route::post('/category/save-category', 'CategoryController@saveCategory')->name('save-category');
Route::get('/category/categoryStatus/{id}/{s}', 'CategoryController@categoryStatus')->name('categoryStatus');
Route::get('/category/delete/{id}', 'CategoryController@delete')->name('delete-category');
Route::get('/category/edit/{id}', 'CategoryController@edit')->name('edit-category');
Route::post('/category/update-category', 'CategoryController@updateCategory')->name('update-category');
//Sub Category
Route::get('/category/manage-sub-category', 'SubCategoryController@manageSubCategory')->name('manage-sub-category');
Route::get('/category/add-sub-category', 'SubCategoryController@addSubCategory')->name('add-sub-category');
Route::post('/category/save-subcategory', 'SubCategoryController@saveSubCategory')->name('save-subcategory');
Route::get('/category/editt/{id}', 'SubCategoryController@edit')->name('edit-subcategory');
Route::post('/category/update-subcategory', 'SubCategoryController@updateSubCategory')->name('update-subcategory');
Route::get('/category/deletee/{id}', 'SubCategoryController@deleteSubCategory')->name('delete-subcategory');
Route::get('/category/subcategoryStatus/{id}/{s}', 'SubCategoryController@subcategoryStatus')->name('subcategoryStatus');
//Sub Sub Category
Route::get('/category/manage-sub-subcategory', 'SubsubCategoryController@manageSubsubCategory')->name('manage-sub-subcategory');
Route::get('/category/add-sub-subcategory', 'SubsubCategoryController@addSubsubCategory')->name('add-sub-subcategory');
Route::post('/category/save-sub-subcategory', 'SubsubCategoryController@saveSubsubCategory')->name('save-sub-subcategory');

//add product
Route::get('/product/add-product', 'ProductController@addProduct ')->name('add-product');



});

?>
                                                                                                                                                                                                                                                                                                                                                                                
