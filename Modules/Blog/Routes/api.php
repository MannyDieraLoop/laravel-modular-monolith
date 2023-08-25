<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Modules\Blog\Http\Controllers\BlogController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/blog/simple-error', [BlogController::class, 'simpleError']);

Route::get('/blog/error', [BlogController::class, 'unexpectedError']);
