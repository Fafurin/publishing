<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'admin'], function (){
    Route::get('/', [\App\Http\Controllers\Admin\MainController::class, 'index'])->name('admin.main.index');

    Route::group(['namespace' => 'Order', 'prefix' => 'order'], function (){
        Route::get('/', 'ListController')->name('admin.order.index');
        Route::get('/create','CreateController')->name('admin.order.create');
        Route::post('/', 'StoreController')->name('admin.order.store');
        Route::get('/{order}', 'ShowController')->name('admin.order.show');
        Route::get('/{order}/edit', 'EditController')->name('admin.order.edit');
        Route::patch('/{order}', 'UpdateController')->name('admin.order.update');
        Route::delete('/{order}', 'DeleteController')->name('admin.order.delete');
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

    Route::group(['namespace' => 'Type', 'prefix' => 'type'], function (){
        Route::get('/', 'ListController')->name('admin.type.index');
        Route::get('/create', 'CreateController')->name('admin.type.create');
        Route::post('/', 'StoreController')->name('admin.type.store');
        Route::get('/{type}','ShowController')->name('admin.type.show');
        Route::get('/{type}/edit', 'EditController')->name('admin.type.edit');
        Route::patch('/{type}', 'UpdateController')->name('admin.type.update');
        Route::delete('/{type}', 'DeleteController')->name('admin.type.delete');
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
