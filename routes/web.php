<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController; 

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

Route::get('/', function () {
    echo "Hi! Welcome";
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
Route::get('/', [PageController::class,'index']);
Route::get('/about', [PageController::class,'about']);
Route::get('/articles/{id}', [PageController::class,'articles']);