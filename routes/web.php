<?php

use Illuminate\Support\Facades\Route;
//use App\Http\Controllers\PageController;
//use App\Http\Controllers\HomeController; 
//use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;
//use App\Http\Controllers\PastaController;

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
/*//practicum 1
Route::get('/', function () {
    echo "Hi! Welcome to Laravel";
    });

Route::get('/about', function () {
    echo "2041720161 <br>";
    echo "Hilda Khoirotul Hidayah <br>";
    echo "TI-2I";
    });

    Route::get('/article/{id}', function ($id) {
        echo "This is Article Pages with ID : ".$id;
        });
    
//practicum 2
Route::get('/', [HomeController::class,'index']);
Route::get('/about', [AboutController::class,'about']);
Route::get('/articles/{id}', [ArticleController::class,'articles']);
//Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Jobsheet 3
//Route::get('/', function (){
//    return view ('index');
 //   });


//Jobsheet 4
Route::get('/', [PastaController::class,'index']);
//Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
*/
//Jobsheet 10
Route::resource('articles', ArticleController::class);
Route::get('/article/print_pdf', [ArticleController::class,'print_pdf'])->name('print_pdf');
