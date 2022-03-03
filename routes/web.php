<?php

use App\Http\Controllers\CountsController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductImagesController;
use App\Http\Controllers\NewsController;
use App\Models\product;
use App\Models\news;
use App\Models\product_images;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

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
App::getLocale();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Auth::routes();

// admin route
// product route
Route::get('/products' , [ProductController::class ,'index'])->middleware('auth')->name('products');
Route::get('/products/create' , [ProductController::class ,'create'])->middleware('auth')->name('products.create');
Route::post('/products/store' , [ProductController::class ,'store'])->middleware('auth')->name('products.store');
Route::get('/product/{product}/edit' , [ProductController::class ,'edit'])->middleware('auth')->name('product.edit');
Route::put('/product/{product}/update' , [ProductController::class ,'update'])->middleware('auth')->name('product.update');
Route::DELETE('/products/{product}/destroy' , [ProductController::class ,'destroy'])->middleware('auth')->name('product.destroy');

Route::get('/demo/{product}' , [ProductImagesController::class ,'demo'])->middleware('auth')->name('demo');
Route::post('/demo/store' , [ProductImagesController::class ,'store'])->middleware('auth')->name('demo.store');

Route::DELETE('/products/{demo}/demo' , [ProductImagesController::class ,'destroy'])->middleware('auth')->name('demo.destroy');


// news route

Route::get('/news' , [NewsController::class ,'index'])->middleware('auth')->name('news');
Route::get('/news/create' , [NewsController::class ,'create'])->middleware('auth')->name('news.create');
Route::post('/news/store' , [NewsController::class ,'store'])->middleware('auth')->name('news.store');
Route::get('/news/{news}/edit' , [NewsController::class ,'edit'])->middleware('auth')->name('news.edit');
Route::put('/news/{news}/update' , [NewsController::class ,'update'])->middleware('auth')->name('news.update');
Route::DELETE('/news/{news}/destroy' , [NewsController::class ,'destroy'])->middleware('auth')->name('news.destroy');

// 
Route::get('/count' , [CountsController::class , 'index'])->middleware('auth')->name('count');

Route::put('/count/{counts}/update' , [CountsController::class , 'update'])->middleware('auth')->name('count.update');

Route::group(
    [
'prefix' => LaravelLocalization::setLocale()
,'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
], function()
{

Route::get('/', [ProductController::class ,'welcome'])->name('welcome');

Route::get('/details/{product}', function ($product) {
    return view('prodcut.details')->with('products',product::all()->where('id',$product))
    ->with('product_images',product_images::all()->where('product_id',$product));
})->name('details');


});

Route::get('/symlink', function () {
    $target ='/www/storage/app/public';
    $link = '/www/public/storage';
    symlink($target, $link);
    echo "Done";
 });