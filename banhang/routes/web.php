<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/',[\App\Http\Controllers\adminController::class,'loginAdmin'])->name('login');
Route::post('/',[\App\Http\Controllers\adminController::class,'postloginAdmin'])->name('postLogin');
Route::get('/home', function () {
    return view('home');
})->name('home');

Route::prefix('categories')->group(function () {
    Route::get('/', [
        'as' => 'categories.index',
        'uses' => 'CategoryController@index'
    ]);

    Route::get('/create', [
        'as' => 'categories.create',
        'uses' => 'CategoryController@create'
    ]);

    Route::post('/store', [
        'as' => 'categories.store',
        'uses' => 'CategoryController@store'
    ]);
   Route::get('/edit/{id}',[
    'as' => 'categories.edit',
    'uses' => 'CategoryController@edit'
   ]);
   Route::get('/update/{id}',[
    'as' => 'categories.update',
    'uses' => 'CategoryController@update'
   ]);
    Route::get('/delete/{id}', [
        'as' => 'categories.delete',
        'uses' => 'CategoryController@delete'
    ]);
   
});
Route::prefix('menus')->group(function () {
    Route::get('/', [
        'as' => 'menus.index',
        'uses' => 'menuController@index'
    ]);
    Route::get('/create', [
        'as' => 'menus.create',
        'uses' => 'menuController@create'
    ]);
    Route::post('/store', [
        'as' => 'menus.store',
        'uses' => 'menuController@store'
    ]);
    Route::get('/edit/{id}', [
        'as' => 'menus.edit',
        'uses' => 'menuController@edit'
    ]);
    Route::get('/update/{id}', [
        'as' => 'menus.update',
        'uses' => 'menuController@update'
    ]);
    Route::get('/delete/{id}', [
        'as' => 'menus.delete',
        'uses' => 'menuController@delete'
    ]);

    

   
});




