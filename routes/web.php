<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/app', [PostController::class, 'show']);
Route::get('/app', [PostController::class, 'index']);
Route::get('/images/{filename}', function ($filename) {
    return asset('images/' . $filename);
})->name('image.show');
Route::get('/svg/{filename}', function ($filename) {
    return asset('svg/' . $filename);
})->name('svg.show');
