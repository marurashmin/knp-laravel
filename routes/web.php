<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\CategoryController;

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

Route::get('/',['uses'=>'CategoryController@index']);

Route::resource('/category', CategoryController::class);
Route::resource('/product', ProductController::class);
Route::get('category-tree-view',['uses'=>'CategoryController@manageCategory'])->name("manageCategory");
Route::post('add-category',['as'=>'add.category','uses'=>'CategoryController@addCategory']);
