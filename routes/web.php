<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::group(['namespace' => 'App\Http\Controllers\Admin', 'prefix' => 'admin'], function () {

    Route::group(['namespace' => 'Main'], function () {
        Route::get('/', 'IndexController')->name('admin.index');
    });

//    Route::group(['namespace' => 'Category', 'prefix' => 'categories'], function () {
//        Route::get('/', 'IndexController')->name('admin.categories');
//        Route::get('/create', 'CreateController')->name('admin.categories.create');
//        Route::post('/create', 'StoreController')->name('admin.categories.store');
//        Route::get('/{category}', 'ShowController')->name('admin.categories.show');
//        Route::get('/{category}/edit', 'EditController')->name('admin.categories.edit');
//        Route::patch('/{category}', 'UpdateController')->name('admin.categories.update');
//        Route::delete('/{category}', 'DestroyController')->name('admin.categories.delete');
//    });

});