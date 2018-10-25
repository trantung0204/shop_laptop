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
// Route::get('shop','TestController@shop')->name('shop');
// Route::get('home','TestController@home')->name('home');
// Route::get('listing','TestController@listing')->name('listing');
// Route::get('productShop','TestController@productShop')->name('productShop');
// Route::get('checkout','TestController@checkout')->name('checkout');

Route::prefix('shop')->group(function(){
	Route::get('/', 'Shop\ShopController@index')->name('shop.index');
	Route::get('listing/','Shop\ShopController@listing')->name('shop.listing');
	Route::get('productShop/{slug}','Shop\ShopController@productShop')->name('shop.productShop');
	Route::get('loginShop','Shop\ShopController@loginShop')->name('shop.loginShop');
	Route::get('signupShop','Shop\ShopController@signupShop')->name('shop.signupShop');
	Route::get('about','Shop\ShopController@about')->name('shop.about');
	Route::get('contact','Shop\ShopController@contact')->name('shop.contact');
	Route::get('guarantee','Shop\ShopController@guarantee')->name('shop.guarantee');
	Route::get('checkout','Shop\ShopController@checkout')->name('shop.checkout');
	Route::post('card/add','Shop\CartController@addProduct')->name('cart.add');
	Route::get('card/test','Shop\CartController@testCart')->name('cart.test');
	Route::get('card/showCart','Shop\CartController@showCart')->name('cart.showCart');
	Route::get('card/delItem/{rowId}','Shop\CartController@delItem')->name('cart.delItem');
	Route::get('card/editItem/{rowId}/{qty}','Shop\CartController@editItem')->name('cart.editItem');
});

Route::get('/', function(){
	return redirect('/shop');
});
Route::prefix('admin')->group(function(){
	Route::middleware('admin.auth')->group( function ()
	{
		Route::resource('products','Admin\ProductController');
		Route::get('/listProducts', 'Admin\ProductController@anyData')->name('getProducts');
		Route::get('/listProductDetails/{code}', 'Admin\ProductController@getDetail')->name('getProductDetails');
		Route::delete('/products/delDetail/{products}', 'Admin\ProductController@delProductDetail')->name('delProductDetail');
		Route::post('/products/addDetail', 'Admin\ProductController@addDetail')->name('addDetail');
		Route::post('/products/addImage', 'Admin\ProductController@imagesUploadPost')->name('imagesUploadPost');
		Route::get('/products/{products}/{i}', 'Admin\ProductController@quantityIncrement')->name('quantityIncrement');
		Route::get('/listColors/{code}', 'Admin\ProductController@getColors')->name('listColors');
		Route::get('/listImages/{id}', 'Admin\ProductController@getImages')->name('listImages');
		Route::get('/delImages/{id}', 'Admin\ProductController@delImages')->name('delImages');
		Route::post('/addProduct', 'Admin\ProductController@store')->name('addProduct');


		Route::resource('colors','Admin\ColorController');
		Route::get('/listColors', 'Admin\ColorController@anyData')->name('getColors');
		Route::get('/exportColors', 'Admin\ColorController@storeExcel')->name('exportColors');
		Route::get('color/export', 'Admin\ColorController@Export')->name('colors.export');
		Route::post('color/import','Admin\ColorController@Import')->name('colors.import');

		Route::resource('imports','Admin\ImportReceiptController');
		Route::get('listImportReceipts','Admin\ImportReceiptController@anyData')->name('getImportReceipts');
		Route::post('createReceiptData','Admin\ImportReceiptController@createReceiptData')->name('imports.createReceiptData');
		Route::post('updateReceiptData','Admin\ImportReceiptController@updateReceiptData')->name('imports.updateReceiptData');
		Route::get('printReceipt/{id}','Admin\ImportReceiptController@printReceipt')->name('import.printReceipt');
		Route::get('getColorbyProduct/{code}','Admin\ImportReceiptController@getColorbyProduct')->name('import.getColorbyProduct');
		Route::get('getSizebyProductandColor/{code}/{color}','Admin\ImportReceiptController@getSizebyProductandColor')->name('import.getSizebyProductandColor');
		Route::get('getProductDetailId/{code}/{color}/{size}','Admin\ImportReceiptController@getProductDetailId')->name('import.getProductDetailId');
		Route::get('/importProductDetails/{code}', 'Admin\ImportReceiptController@getDetail')->name('import.importProductDetails');
		Route::get('/getProOfCate/{id}', 'Admin\ImportReceiptController@getProOfCate')->name('import.getProOfCate');
		Route::get('import/genCode', 'Admin\ImportReceiptController@generateCode')->name('import.genCode');
		Route::get('import/readMoney/{money}', 'Admin\ImportReceiptController@convert_number_to_words')->name('import.readMoney');

		Route::middleware('admin.checkSuperAdmin')->group( function ()
		{
			Route::resource('admins','Admin\AdminController');
			Route::get('/listAdmins', 'Admin\AdminController@anyData')->name('getAdmins');
			Route::post('admins/updateAvatar/{i}', 'Admin\AdminController@updateAvatar')->name('admins.updateAvatar');
			Route::get('admin/admin/export', 'Admin\AdminController@Export')->name('admins.export');
			Route::post('admin/import','Admin\AdminController@Import')->name('admins.import');
		});

		Route::prefix('categories')->group( function (){
			Route::get('/', 'Admin\CategoryController@index')->name('category.index');
			Route::get('load', 'Admin\CategoryController@loadCategory')->name('category.load');
			Route::get('anyData','Admin\CategoryController@anyData')->name('category.anyData');
			Route::post('store','Admin\CategoryController@store')->name('category.store');
			Route::delete('delete/{id}','Admin\CategoryController@destroy');
			Route::get('edit/{id}','Admin\CategoryController@edit')->name('category.edit');
			Route::post('update/{id}','Admin\CategoryController@update');
			Route::get('export', 'Admin\CategoryController@Export')->name('category.export');
			Route::post('import','Admin\CategoryController@Import')->name('category.import');
		});
		Route::prefix('brands')->group( function (){
			Route::get('/', 'Admin\BrandController@index')->name('brand.index');
			Route::get('anyData','Admin\BrandController@anyData')->name('brand.anyData');
			Route::post('store','Admin\BrandController@store')->name('brand.store');
			Route::delete('delete/{id}','Admin\BrandController@destroy');
			Route::get('edit/{id}','Admin\BrandController@edit')->name('brand.edit');
			Route::post('update/{id}','Admin\BrandController@update');
			Route::get('export', 'Admin\BrandController@Export')->name('brand.export');
			Route::post('import','Admin\BrandController@Import')->name('brand.import');
		});
		Route::prefix('sizes')->group( function (){
			Route::get('/', 'Admin\SizeController@index')->name('size.index');
			Route::get('anyData','Admin\SizeController@anyData')->name('size.anyData');
			Route::post('store','Admin\SizeController@store')->name('size.store');
			Route::delete('delete/{id}','Admin\SizeController@destroy');
			Route::get('edit/{id}','Admin\SizeController@edit')->name('size.edit');
			Route::post('update/{id}','Admin\SizeController@update');
			Route::get('export', 'Admin\SizeController@Export')->name('size.export');
			Route::post('import_parse','Admin\SizeController@parseImport')->name('size.import_parse');
		});
		Route::prefix('user')->group( function (){
			Route::get('/', 'Admin\UserController@index')->name('user.index');
			Route::get('anyData','Admin\UserController@anyData')->name('user.anyData');
			Route::post('store','Admin\UserController@store')->name('user.store');
			Route::delete('delete/{id}','Admin\UserController@destroy');
			Route::get('edit/{id}','Admin\UserController@edit')->name('user.edit');
			Route::post('update/{id}','Admin\UserController@update');
			Route::post('sendMail/{id}', 'Admin\UserController@ship');
			Route::get('export','Admin\UserController@Export')->name('user.export');

			// Route::get('users/{id}', [
			//     'as' => 'ten.route',
			//     'uses' => 'Controller@function',
			// ]);
		});
		Route::get('404',function(){
			return view('admin.404');
		})->name('admin.404');
	});
    Route::get('login', 'AdminAuth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('login', 'AdminAuth\AdminLoginController@login')->name('admin.auth');
    Route::post('logout', 'AdminAuth\AdminLoginController@logout')->name('admin.logout');
    
    Route::get('register', 'AdminAuth\AdminRegisterController@showRegistrationForm')->name('admin.register');
    Route::post('register', 'AdminAuth\AdminRegisterController@register')->name('admin.signup');
});

Auth::routes();