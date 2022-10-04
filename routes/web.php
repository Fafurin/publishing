<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('personal.main.index');
})->middleware('auth', 'verified');

Route::group(['namespace' => 'Admin', 'prefix' => 'admin', 'middleware' => ['admin', 'auth', 'verified']], function () {
    Route::get('/', [\App\Http\Controllers\Admin\MainController::class, 'index'])->name('admin.main.index');

    Route::group(['namespace' => 'User', 'prefix' => 'user'], function () {
        Route::get('/', 'ListController')->name('admin.user.index');
        Route::get('/create', 'CreateController')->name('admin.user.create');
        Route::post('/', 'StoreController')->name('admin.user.store');
        Route::get('/{user}', 'ShowController')->name('admin.user.show');
        Route::get('/{user}/edit', 'EditController')->name('admin.user.edit');
        Route::patch('/{user}', 'UpdateController')->name('admin.user.update');
        Route::delete('/{user}', 'DeleteController')->name('admin.user.delete');
    });

    Route::group(['namespace' => 'Position', 'prefix' => 'position'], function () {
        Route::get('/', 'ListController')->name('admin.position.index');
        Route::get('/create', 'CreateController')->name('admin.position.create');
        Route::post('/', 'StoreController')->name('admin.position.store');
        Route::get('/{position}', 'ShowController')->name('admin.position.show');
        Route::get('/{position}/edit', 'EditController')->name('admin.position.edit');
        Route::patch('/{position}', 'UpdateController')->name('admin.position.update');
        Route::delete('/{position}', 'DeleteController')->name('admin.position.delete');
    });

    Route::group(['namespace' => 'Role', 'prefix' => 'role'], function () {
        Route::get('/', 'ListController')->name('admin.role.index');
        Route::get('/create', 'CreateController')->name('admin.role.create');
        Route::post('/', 'StoreController')->name('admin.role.store');
        Route::get('/{role}', 'ShowController')->name('admin.role.show');
        Route::get('/{role}/edit', 'EditController')->name('admin.role.edit');
        Route::patch('/{role}', 'UpdateController')->name('admin.role.update');
        Route::delete('/{role}', 'DeleteController')->name('admin.role.delete');
    });

    Route::group(['namespace' => 'Order', 'prefix' => 'order'], function () {
        Route::get('/', 'ListController')->name('admin.order.index');
        Route::get('/create', 'CreateController')->name('admin.order.create');
        Route::post('/', 'StoreController')->name('admin.order.store');
        Route::get('/{order}', 'ShowController')->name('admin.order.show');
        Route::get('/{order}/edit', 'EditController')->name('admin.order.edit');
        Route::patch('/{order}', 'UpdateController')->name('admin.order.update');
        Route::delete('/{order}', 'DeleteController')->name('admin.order.delete');
    });

    Route::group(['namespace' => 'Task', 'prefix' => 'task'], function () {
        Route::get('/', 'ListController')->name('admin.task.index');
        Route::get('/{order}/create', 'CreateController')->name('admin.task.create');
        Route::post('/', 'StoreController')->name('admin.task.store');
        Route::get('/{task}', 'ShowController')->name('admin.task.show');
        Route::get('/{task}/edit', 'EditController')->name('admin.task.edit');
        Route::patch('/{task}', 'UpdateController')->name('admin.task.update');
        Route::delete('/{task}', 'DeleteController')->name('admin.task.delete');
    });

    Route::group(['namespace' => 'Format', 'prefix' => 'format'], function () {
        Route::get('/', 'ListController')->name('admin.format.index');
        Route::get('/create', 'CreateController')->name('admin.format.create');
        Route::post('/', 'StoreController')->name('admin.format.store');
        Route::get('/{format}', 'ShowController')->name('admin.format.show');
        Route::get('/{format}/edit', 'EditController')->name('admin.format.edit');
        Route::patch('/{format}', 'UpdateController')->name('admin.format.update');
        Route::delete('/{format}', 'DeleteController')->name('admin.format.delete');
    });

    Route::group(['namespace' => 'Type', 'prefix' => 'type'], function () {
        Route::get('/', 'ListController')->name('admin.type.index');
        Route::get('/create', 'CreateController')->name('admin.type.create');
        Route::post('/', 'StoreController')->name('admin.type.store');
        Route::get('/{type}', 'ShowController')->name('admin.type.show');
        Route::get('/{type}/edit', 'EditController')->name('admin.type.edit');
        Route::patch('/{type}', 'UpdateController')->name('admin.type.update');
        Route::delete('/{type}', 'DeleteController')->name('admin.type.delete');
    });

    Route::group(['namespace' => 'Customer', 'prefix' => 'customer'], function () {
        Route::get('/', 'ListController')->name('admin.customer.index');
        Route::get('/{customer}', 'ShowController')->name('admin.customer.show');
        Route::get('/{customer}/edit', 'EditController')->name('admin.customer.edit');
        Route::patch('/{customer}', 'UpdateController')->name('admin.customer.update');
    });
});

Route::group(['namespace' => 'Personal', 'prefix' => 'personal', 'middleware' => ['auth', 'verified']], function () {
    Route::get('/', 'MainController')->name('personal.main.index');
//    Route::get('/', [\App\Http\Controllers\Admin\MainController::class, 'index'])->name('admin.main.index');

    Route::group(['namespace' => 'Task', 'prefix' => 'task'], function () {
        Route::get('/', 'ListController')->name('personal.task.index');
        Route::get('/{task}', 'ShowController')->name('personal.task.show');
    });
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
