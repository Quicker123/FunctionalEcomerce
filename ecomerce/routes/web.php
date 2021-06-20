<?php

use App\Http\Controllers\subCategoryViewLoader;
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

Route::get('/home','subCategoryViewLoader@home');

Route::get('/blog', function(){
    return view('home.blog.blog');
});


