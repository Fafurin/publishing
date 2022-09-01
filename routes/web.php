<?php

use App\Http\Controllers\Admin\BookController;
use App\Http\Controllers\Admin\FormatController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\TypeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::group(['namespace' => 'App\Http\Controllers\Admin', 'prefix' => 'admin'], function (){
    Route::group(['prefix' => 'order'], function (){
        Route::get('/', [OrderController::class, 'index'])->name('admin.order.index');
        Route::get('/create', [OrderController::class, 'create'])->name('admin.order.create');
        Route::post('/', [OrderController::class, 'store'])->name('admin.order.store');
    });

    Route::group(['prefix' => 'format'], function (){
        Route::get('/', [FormatController::class, 'index'])->name('admin.format.index');
        Route::get('/create', [FormatController::class, 'create'])->name('admin.format.create');
        Route::post('/', [FormatController::class, 'store'])->name('admin.format.store');
        Route::get('/{format}', [FormatController::class, 'show'])->name('admin.format.show');
        Route::get('/{format}/edit', [FormatController::class, 'edit'])->name('admin.format.edit');
        Route::patch('/{format}', [FormatController::class, 'update'])->name('admin.format.update');
        Route::delete('/{format}', [FormatController::class, 'delete'])->name('admin.format.delete');
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
});
