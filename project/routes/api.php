<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Movie;
use App\Http\Resources\UserResource;

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

Route::apiResource('/getAllUsers', 'UserController');

Route::apiResource('/getAllMovies', 'MovieController');

Route::apiResource('/getAllReviews', 'ReviewController');

Route::apiResource('/getuser', 'UserController');

Route::apiResource('/getmovie', 'MovieController');

Route::apiResource('/getreview', 'ReviewController');
