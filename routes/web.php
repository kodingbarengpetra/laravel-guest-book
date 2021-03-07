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

use App\Http\Controllers\GuestBookController;

Route::get('/', [GuestBookController::class, 'index']);
Route::post('/', [GuestBookController::class, 'newPost']);

Route::get('/health', function() {
    return "healthy";
});