<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\PermissionUserController;

Route::middleware('auth', 'admin' )->group(function () {

    // PermissionUsers

    // Create PermissionUser Instance
    Route::get('/permissionuser/{user}', [PermissionUserController::class, 'create'])
            ->name('create_permissionuser');

    // Store PermissionUser
    Route::post('/permissionuser', [PermissionUserController::class, 'store'])
        ->name('store_permissionuser');



    // USERS
    // Assign permission to user


    // PERMISSIONS
    // View All permissions
    Route::get('/permissions', [PermissionController::class, 'index'])
        ->name('permissions');

    // Create Permissions
    Route::get('/permission/create', [PermissionController::class, 'create'])
        ->name('create_permission');

    // STAFF
    // All Staff
    Route::get('/staff', [UserController::class, 'staff'])
        ->name('staff');



});