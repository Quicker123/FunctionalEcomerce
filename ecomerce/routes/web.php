<?php

use App\Http\Controllers\subCategoryViewLoader as subcategory;
use Facade\FlareClient\View;
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

Route::get('/', function () {
    return view('welcome');
});

// This is the route section for all the subcategory

Route::get('/home',[subcategory:: class, 'home'])->name('home');

Route::get('/blog', [subcategory:: class, 'blog'])->name('blog');

Route::get('/contact', [subcategory:: class, 'contact'])->name('contact');

Route::get('/about', [subcategory:: class, 'about'])->name('about');

Route::get('/faq', [subcategory::class, 'faq'])->name('faq');

Route::get('/store', [subcategory::class, 'store'])->name('store');

Route::get('/terms', [subcategory::class, 'terms'])->name('terms');
