<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonaController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\CategoryController;
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

Route::get('/', function () {
    return view('welcome');
})->middleware('auth') ;

// Route::get('/saludo', function () {
//     return "Bienvenido Usuario";
// });


Route::get('/saludo/{nombre?}',  
[PersonaController::class,'mostrar'])-> where
('nombre','[A-Za-zÑñ]+');

//show
Route::get('/products',[ProductController::class, 'show']);
Route::get('/brands',[BrandController::class, 'show']);
Route::get('/categories',[CategoryController::class, 'show']);

//save
Route::post('/product/save',[ProductController::class, 'save'])->name('product.save');
Route::post('/brand/save',[BrandController::class, 'save'])->name('brand.save');
Route::post('/category/save',[CategoryController::class, 'save'])->name('category.save');



//form
Route::get('product/form/{id?}',[ProductController::class,'form'])->name('product.form');
Route::get('brand/form/{id?}',[BrandController::class,'form'])->name('brand.form');
Route::get('category/form/{id?}',[CategoryController::class,'form'])->name('category.form');

//Delete
Route::get('/product/delete/{id}',[ProductController::class, 'delete'])->name('product.delete');
Route::get('/brand/delete/{id}',[BrandController::class, 'delete'])->name('brand.delete');
Route::get('/category/delete/{id}',[CategoryController::class, 'delete'])->name('category.delete');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
