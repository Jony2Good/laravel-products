<?php

use Illuminate\Support\Facades\Auth;
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

Route::group(['namespace' => 'App\Http\Controllers\Admin', 'prefix' => 'admin', 'middleware' => 'admin'], function () {

    Route::group(['namespace' => 'Main'], function () {
        Route::get('/', 'IndexController')->name('admin.index');
        Route::get('/create', 'CreateController')->name('admin.create');
        Route::get('/{item}', 'ShowController')->name('admin.show');
        Route::post('/create', 'StoreController')->name('admin.store');
        Route::get('/edit/{item}', 'EditController')->name('admin.edit');
        Route::patch('/{item}', 'UpdateController')->name('admin.update');
        Route::delete('/{item}', 'DestroyController')->name('admin.destroy');
    });
});

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


