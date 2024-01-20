<?php

use App\Http\Controllers\HomeController;
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
    // return view('welcome');
});
Route::get('hello', function () {
    return "<h1>Hello BBU</h1>";
});
Route::match(['get', 'post'], '/match', function () {
    return "this is the match for multiple routes";
});
Route::get('/student/{id}', function ($id) {
    return "student info is:" . $id;
})->where('id', '[0,3]+');
Route::get('/home', function () {
    return view('home');
});
// Route::get('/category', function () {
// //     return view('category');
// });
// Route::get('/product', function () {
//     return view('product');
// });

Route::get('/home', [HomeController::class, 'index']);
Route::get('/category', [HomeController::class, 'category']);
Route::get('/product', [HomeController::class, 'product']);
