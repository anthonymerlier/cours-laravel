<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ServiceController;

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

Route::get('/', [ PagesController::class, "index" ] )->name("homepage");
Route::get('/about', [ PagesController::class, "about" ] )->name("aboutpage");
Route::get('/contactez-nous', [ PagesController::class, "contact" ] )->name("contactpage");
Route::get('/services', [ ServiceController::class, "index" ] )->name("servicespage");


Route::get("/service/create", [ServiceController::class, "create"])->name("createservicepage");

Route::post("/service/store", [ ServiceController::class, "store" ] )->name("servicestore");
Route::post("/service/{slug}/update", [ ServiceController::class, "update" ] )->name("serviceupdate");
Route::get("/service/{slug}/destroy", [ ServiceController::class, "destroy" ] )->name("servicedelete");
Route::get("/service/{slug}/edit", [ServiceController::class, "edit"])->name("editservicepage");

Route::get('/service/{slug}', [ ServiceController::class, "show" ] )->name("servicepage");
