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


Route::get('/admin', 'Admin\AdminDashboardController@index');
Route::get('/emp', 'Emp\EmpDashboardController@index');
Route::get('/departments', 'Admin\DepartmentsController@index');
Route::get('/empdetails', 'Admin\EmployeesController@index');
Route::get('/leaves', 'Admin\LeaveApplicationController@index');
Route::get('/leavetypes', 'Admin\LeaveTypesController@index');
Route::get('/admin-profile', 'Admin\ProfileSettingsController@index');
Route::get('/reports', 'Admin\ReportsController@index');





Route::get('/', function () {
    return view('welcome');
});
