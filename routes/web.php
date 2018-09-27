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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::group(['middleware' => 'auth'], function () {
	Route::get('/staff/inventory', array(
		'uses' => 'StaffController@inventory_index',
		'as' => 'staff.inventory'
	));
	Route::get('/staff/items', array(
		'uses' => 'StaffController@items_index',
		'as' => 'staff.items'
	));
	Route::get('/staff/orders', array(
		'uses' => 'StaffController@orders_index',
		'as' => 'staff.orders'
	));
	Route::get('/staff/total', array(
		'uses' => 'StaffController@total_index',
		'as' => 'staff.totals'
	));
	Route::get('/staff/reports', array(
		'uses' => 'StaffController@report_index',
		'as' => 'staff.reports'
	));
	Route::get('/staff/profile/{id}', array(
		'uses' => 'ProfileController@profile',
		'as' => 'profile'
	));
	Route::post('/staff/profile/{id}', array(
		'uses' => 'ProfileController@update_profile',
		'as' => 'update_profile'
	));
	Route::get('/staff/search', array(
		'uses' => 'StaffController@search',
		'as' => 'staff.search'
	));
	Route::post('/staff/inventory', array(
		'uses' => 'InventoryController@save',
		'as' => 'inventory.save'
	));
	Route::get('/inventory/{id}', array(
		'uses' => 'InventoryController@remove',
		'as' => 'remove_stock'
	));
	Route::post('/inventory', array(
		'uses' => 'InventoryController@update',
		'as' => 'updateInventory'
	));
	Route::get('/order/{id}', array(
		'uses' => 'OrderController@select_order',
		'as' => 'staff_select_order'
	));
	Route::get('/delete/{id}', array(
		'uses' => 'OrderController@delete_order',
		'as' => 'staff_delete_order'
	));
	Route::post('order-to-pay/{order_id}', array(
		'uses' => 'OrderController@order_to_pay',
		'as' => 'order_to_pay'
	));
	Route::get('/save/total_payment', array(
		'uses' => 'StaffController@staff_save_report',
		'as' => 'staff_save_report'
	));
	Route::get('/staff/dashboard', array(
		'uses' => 'StaffController@dashboard',
		'as' => 'dashboard'
	));
	Route::get('/total/cancel', array(
		'uses' => 'StaffController@cancel',
		'as' => 'cancel_transactions'
	));
});