<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;


Route::controller(HomeController::class)->group(function() {
    Route::get('/', 'index');
    Route::get('companies', 'companies');
    Route::get('employees', 'employees');
    Route::get('contact-us', 'contact');
});

Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'dashboard']);

Route::get('/login', [App\Http\Controllers\LoginController::class, 'admin_login']);
Route::get('/forgot-password', [App\Http\Controllers\LoginController::class, 'forgot_password']);

Route::post('/admin-login', [App\Http\Controllers\LoginController::class, 'custom_login']);
Route::get('/sign-out', [App\Http\Controllers\LoginController::class, 'sign_out']);

Route::get('/all-role', [App\Http\Controllers\DashboardController::class, 'all_role']);
Route::get('role/activate/{id?}', [App\Http\Controllers\DashboardController::class, 'activate']);
Route::get('role/deactivate/{id?}', [App\Http\Controllers\DashboardController::class, 'deactivate']);
Route::get('/get-role-data', [App\Http\Controllers\DashboardController::class, 'getRoleData']);

Route::get('/all-user', [App\Http\Controllers\DashboardController::class, 'all_user']);
Route::get('/all-admin-user', [App\Http\Controllers\DashboardController::class, 'all_admin_user']);

