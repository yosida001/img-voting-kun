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

Route::get("/test", function() {
    return "test";
});

Route::get("/section/create", [\App\Http\Controllers\SectionController::class, "create"])->name("section.create");
Route::post("/section/store", [\App\Http\Controllers\SectionController::class, "store"])->name("section.store");
