<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ProductController;

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

Route::get('/',[PublicController::class ,'home'])->name('homepage');
Route::get('/contacts',[PublicController::class,'contacts'])->name('contacts');

Route::post('/contacts/submit',[PublicController::class,'submit'])->name('contacts.submit');

Route::get('/article/create',[ArticleController::class,'create'])->name('article.create');

Route::post('/article/store',[ArticleController::class,'store'])->name('article.store');


Route::get('/article/author/{author}',[ArticleController::class,'getArticleByAuthor'])->name('article.author');
Route::get('/article/edit/{article}',[ArticleController::class,'edit'])->name('article.edit');

Route::put('/article/update/{article}', [ArticleController::class,'update'])->name('article.update');

Route::delete('/article/destroy/{article}',[ArticleController::class,'destroy'])->name('article.delete');

Route::get('/product/create',[ProductController::class,'create'])->name('product.create');
Route::post('/product/store',[ProductController::class,'store'])->name('product.store');

 Route::get('/user/product/{user}',[ProductController::class,'getProductByUser'])->name('user.product');
 Route::get('/product',[PublicController::class,'index'])->name('product.index');
