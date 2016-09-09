<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/',[
	'as' => 'welcome.index',
	'uses' => 'WelcomeController@index'
]);

Route::bind('product', function($slug){
	return App\Product::where('slug', $slug)->first();
});
Route::get('products/{slug}',[
	'as' => 'products.show',
	'uses' => 'WelcomeController@show'
]);
Route::get('categories/{slug}', [
	'uses' => 'WelcomeController@searchCategory',
	'as' => 'welcome.search.category'
]);

Route::get('cart/show', [
	'as' => 'cart.show',
	'uses' => 'CartController@show'
]);
Route::get('cart/delete/{product}', [
	'as' => 'cart.delete',
	'uses' => 'CartController@delete'
]);

Route::get('cart/add/{product}', [
	'as' => 'cart.add',
	'uses' => 'CartController@add'
]);
Route::get('cart/trash',[
	'as' => 'cart.trash',
	'uses' => 'CartController@trash'
]);
Route::get('cart/update/{product}/{quantity?}', [
	'as' => 'cart.update',
	'uses' => 'CartController@update'
]);

Route::get('users/register', [
	'as' => 'users.register',
	'uses' => 'Auth\AuthController@showRegistrationForm'
]);
Route::post('users/register', [
	'as' => 'users.register',
	'uses' => 'Auth\AuthController@register'
]);

Route::get('order-detail',[
	'middleware' => 'auth',
	'as' => 'order.detail',
	'uses' => 'CartController@orderDetail'
]);

Route::get('users/login', [
	'as' => 'users.login',
	'uses' => 'Auth\AuthController@showLoginForm'
]);
Route::post('users/login', [
	'as' => 'users.login',
	'uses' => 'Auth\AuthController@login'
]);
Route::get('users/logout', [
	'as' => 'users.logout',
	'uses' => 'Auth\AuthController@logout'
]);

Route::get('payment', [
	'as' => 'payment',
	'uses' => 'PaypalController@postPayment'
]);

Route::get('payment/status', [
	'as' => 'payment.status',
	'uses' => 'PaypalController@getPaymentStatus'
]);
// Administrador

Route::group(['prefix' => 'admin', 'middleware' => ['auth','admin']], function() {
	Route::get('home', function(){
		return view('admin.home');
	});
	Route::resource('categories', 'Admin\CategoriesController');
	Route::get('categories/{id}/destroy', [
		'as' => 'admin.categories.destroy',
		'uses' => 'Admin\CategoriesController@destroy'
	]);
	Route::resource('products', 'Admin\ProductsController');
	Route::get('products/{id}/destroy', [
		'as' => 'admin.products.destroy',
		'uses' => 'Admin\ProductsController@destroy'
	]);
	Route::resource('users', 'Admin\UsersController');
	Route::get('users/{id}/destroy', [
		'as' => 'admin.users.destroy',
		'uses' => 'Admin\UsersController@destroy'
	]);
	Route::get('orders',[
		'as' => 'admin.orders.index',
		'uses' => 'Admin\OrderController@index'
	]);
	Route::post('orders/get-items', [
	    'as' => 'admin.orders.getItems',
	    'uses' => 'Admin\OrderController@getItems'
	]);
	Route::get('orders/{id}', [
	    'as' => 'admin.orders.destroy',
	    'uses' => 'Admin\OrderController@destroy'
	]);
});