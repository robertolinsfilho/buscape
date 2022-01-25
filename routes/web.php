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

Route::get('/atualizarbanco', \App\Http\Controllers\WelcomeController::class );
Route::get('/produto/{id}', [\App\Http\Controllers\ProductController::class, 'home'] );
Route::get('/search/{elemento}', [\App\Http\Controllers\SearchController::class, 'search'] );
Route::get('/', [\App\Http\Controllers\HomeController::class, 'home'] );
Route::get('/minhaconta', [\App\Http\Controllers\HomeController::class, 'minhaconta'] );
Route::get('/produtos', [\App\Http\Controllers\DashboardController::class, 'produtos'] );
Route::post('/salvarendereco', [\App\Http\Controllers\DashboardController::class, 'salvarendereco'] );
Route::post('/salvarcoperacao', [\App\Http\Controllers\DashboardController::class, 'salvarcoperacao'] );

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return redirect('/minhaconta');
})->name('');