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

Route::get("/section/create", [\App\Http\Controllers\SectionController::class, "create"])->name("section.create");
Route::post("/section/store", [\App\Http\Controllers\SectionController::class, "store"])->name("section.store");
Route::get("/section/create-end", [\App\Http\Controllers\SectionController::class, "createEnd"])->name("section.create-end");

Route::get("/voting/create", [\App\Http\Controllers\VotingController::class, "create"])->name("voting.create");
Route::post("/voting/store", [\App\Http\Controllers\VotingController::class, "store"])->name("voting.store");
Route::get("/voting/create-end", [\App\Http\Controllers\VotingController::class, "createEnd"])->name("voting.create-end");
