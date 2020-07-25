<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Movie;

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

Route::apiResource('/movie', 'MovieController');

Route::apiResource('/user', 'UserController');

Route::apiResource('/review', 'ReviewController');
