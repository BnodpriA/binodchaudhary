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

Route::get('/', function () {
    return view('welcome');
});
// Route::domain('quackfoot'.env('APP_DOMAIN'))->group(function () {
//     return 123;
// });
Route::domain('quackfoot.binodchaudhary.test')->group(function () {
    Route::get('/about', function () {
        return "Quackfoot Pvt. Ltd.";
    });
});
Route::domain('cy2nepal.binodchaudhary.test')->group(function () {
    Route::get('/about', function () {
        return "CY2 Nepal";
    });
});