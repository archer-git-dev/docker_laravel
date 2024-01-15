<?php

use App\Http\Controllers\PostController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::group([
    'controller' => PostController::class,
    'prefix' => 'post',
    'as' => 'post.'
], function () {
    Route::get('/', 'getPosts')->name('get');
    Route::post('/create', 'store')->name('store');
});
