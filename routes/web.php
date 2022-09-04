<?php

use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\TypeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'admin'], function (){
    Route::get('/', [\App\Http\Controllers\Admin\MainController::class, 'index'])->name('admin.main.index');

    Route::group(['prefix' => 'order'], function (){
        Route::get('/', [OrderController::class, 'index'])->name('admin.order.index');
        Route::get('/create', [OrderController::class, 'create'])->name('admin.order.create');
        Route::post('/', [OrderController::class, 'store'])->name('admin.order.store');
        Route::get('/{order}', [OrderController::class, 'show'])->name('admin.order.show');
        Route::get('/{order}/edit', [OrderController::class, 'edit'])->name('admin.order.edit');
        Route::patch('/{order}', [OrderController::class, 'update'])->name('admin.order.update');
        Route::delete('/{order}', [OrderController::class, 'delete'])->name('admin.order.delete');
    });

    Route::group(['namespace' => 'Format', 'prefix' => 'format'], function (){
        Route::get('/', 'ListController')->name('admin.format.index');
        Route::get('/create', 'CreateController')->name('admin.format.create');
        Route::post('/', 'StoreController')->name('admin.format.store');
        Route::get('/{format}', 'ShowController')->name('admin.format.show');
        Route::get('/{format}/edit', 'EditController')->name('admin.format.edit');
        Route::patch('/{format}', 'UpdateController')->name('admin.format.update');
        Route::delete('/{format}', 'DeleteController')->name('admin.format.delete');
    });

    Route::group(['prefix' => 'type'], function (){
        Route::get('/', [TypeController::class, 'index'])->name('admin.type.index');
        Route::get('/create', [TypeController::class, 'create'])->name('admin.type.create');
        Route::post('/', [TypeController::class, 'store'])->name('admin.type.store');
        Route::get('/{type}', [TypeController::class, 'show'])->name('admin.type.show');
        Route::get('/{type}/edit', [TypeController::class, 'edit'])->name('admin.type.edit');
        Route::patch('/{type}', [TypeController::class, 'update'])->name('admin.type.update');
        Route::delete('/{type}', [TypeController::class, 'delete'])->name('admin.type.delete');
    });

    Route::group(['namespace' => 'Customer', 'prefix' => 'customer'], function (){
        Route::get('/', 'ListController')->name('admin.customer.index');
        Route::get('/create', 'CreateController')->name('admin.customer.create');
        Route::post('/', 'StoreController')->name('admin.customer.store');
        Route::get('/{customer}', 'ShowController')->name('admin.customer.show');
        Route::get('/{customer}/edit', 'EditController')->name('admin.customer.edit');
        Route::patch('/{customer}', 'UpdateController')->name('admin.customer.update');
        Route::delete('/{customer}', 'DeleteController')->name('admin.customer.delete');
    });
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
