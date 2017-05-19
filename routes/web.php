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
//auth
 
Route::auth();


Route::get('/', function () {
    return view('auth\login');

});

Route::get('/home',[
	'uses' => 'HomeController@index',
	'as' => 'admin',
	
]);

//endAuth

//admin route



Route::get('adminpanel', [
	'uses' => 'Admin\AdminController@index',
	'as' => 'admin',
	
]);

Route::get('/admin/employees', [
	'uses' => 'Admin\EmployeeController@index',
	'as' => 'admin.employee',
]);

Route::get('/admin/employee/add', [
	'uses' => 'Admin\EmployeeController@create',
	'as' => 'admin.employee.create',
]);
Route::get('/admin/employee/{id}/edit', [
	'uses' => 'Admin\EmployeeController@edit',
	'as' => 'admin.employee.edit',
]);
Route::post('/admin/{id}/employee/save', [
	'uses' => 'Admin\EmployeeController@update',
	'as' => 'admin.employee.save',
]);
Route::post('/admin/employee/delete', [
	'uses' => 'Admin\EmployeeController@destroy',
	'as' => 'admin.employee.delete',
]);
Route::post('/admin/employee/store', [
	'uses' => 'Admin\EmployeeController@store',
	'as' => 'admin.employee.store',
]);


//admin customer 

Route::get('/admin/customers', [
	'uses' => 'Admin\CustomerController@index',
	'as' => 'admin.customer',
]);

Route::get('/admin/customers/add', [
	'uses' => 'Admin\CustomerController@create',
	'as' => 'admin.customer.create',
]);
Route::post('/admin/customer/store', [
	'uses' => 'Admin\CustomerController@store',
	'as' => 'admin.customer.store',
]);

Route::get('/admin/customer/{id}/assign', [
	'uses' => 'Admin\CustomerController@assign',
	'as' => 'admin.customer.assign',
]);


Route::get('/admin/customers/{id}/edit', [
	'uses' => 'Admin\CustomerController@edit',
	'as' => 'admin.customer.edit',
]);
Route::post('/admin/{id}/customers/save', [
	'uses' => 'Admin\CustomerController@update',
	'as' => 'admin.customer.save',
]);
Route::post('/admin/customers/delete', [
	'uses' => 'Admin\CustomerController@destroy',
	'as' => 'admin.customer.delete',
]);

Route::get('/admin/customer/{userId}/{customerId}/assignto', [
	'uses' => 'Admin\CustomerController@assignto',
	'as' => 'admin.customer.assignto',
]);

//endAdminRoute

//employeeroute
Route::get('employeepanel', [
	'uses' => 'employee\EmployeeController@index',
	'as' => 'employee',
	
]);
//endEmployeeroute

//employeecustomer

Route::get('/employee/customers', [
	'uses' => 'Employee\CustomerController@index',
	'as' => 'employee.customer',
]);

Route::get('/employee/customers/add', [
	'uses' => 'Employee\CustomerController@create',
	'as' => 'employee.customer.create',
]);

Route::post('/employee/customer/store', [
	'uses' => 'Employee\CustomerController@store',
	'as' => 'employee.customer.store',
]);

Route::get('/employee/customers/{id}/edit', [
	'uses' => 'Employee\CustomerController@edit',
	'as' => 'employee.customer.edit',
]);

Route::post('/employee/{id}/customers/save', [
	'uses' => 'Employee\CustomerController@update',
	'as' => 'employee.customer.save',
]);

Route::post('/employee/customers/delete', [
	'uses' => 'Employee\CustomerController@destroy',
	'as' => 'employee.customer.delete',
]);

Route::get('/employee/myCustomers', [
	'uses' => 'Employee\CustomerController@myCustomer',
	'as' => 'employee.myCustomer',
]);


Route::get('/employee/customers/{id}/action', [
	'uses' => 'Employee\CustomerController@action',
	'as' => 'employee.customer.action',
]);


//actionRoute

Route::post('/employee/{id}/action/store', [
	'uses' => 'Employee\ActionController@store',
	'as' => 'employee.action.store',
]);

Route::get('/employee/customer/{id}/viewAction', [
	'uses' => 'Employee\ActionController@viewAction',
	'as' => 'employee.customer.viewAction',
]);

Route::get('/employee/action/{id}/edit', [
	'uses' => 'Employee\ActionController@edit',
	'as' => 'employee.action.edit',
]);

Route::post('/employee/{id}/action/save', [
	'uses' => 'Employee\ActionController@update',
	'as' => 'employee.action.save',
]);

Route::post('/employee/action/delete', [
	'uses' => 'Employee\ActionController@destroy',
	'as' => 'employee.action.delete',
]);

//endActionRoute

//endemployeecustomer