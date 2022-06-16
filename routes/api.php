<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\NftController;
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


Route::post("/login",[LoginController::class,"login"]);
Route::post("/register",[RegisterController::class,"register"]);
Route::post("/logout",[LoginController::class,"logout"]);
Route::get("/nfts",[NftController::class,"getNFTS"]);
Route::get("/nfts/details/{nft}",[NftController::class,"getNftDetails"]);
Route::get("/projects/all",[NftController::class,"getProjects"]);
Route::post("/projects/search",[NftController::class,"getProjectsBySearch"]);
Route::middleware("auth:sanctum")->get("/user",[LoginController::class,"getUser"]);
