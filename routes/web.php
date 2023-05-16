<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebsiteController;

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

Route::get('/', [WebsiteController::class, 'home']);

Route::get('/about', [WebsiteController::class, 'about']);

Route::get('/service', [WebsiteController::class, 'service']);

Route::get('/price', [WebsiteController::class, 'price']);

Route::get('/open', [WebsiteController::class, 'open']);

Route::get('/contact', [WebsiteController::class, 'contact']);

Route::get('/appointment', [WebsiteController::class, 'appointment']);