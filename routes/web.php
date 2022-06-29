<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('/test', function () {
    return view('test');
});

Route::get('/test', [BlogController::class, 'showAll']);

Route::post('/test/{id}', [BlogController::class, 'update']);

Route::post('/test', [BlogController::class, 'create']);

Route::delete('/test/{id}', [BlogController::class, 'delete']);

Route::post('/update/{id}', [BlogController::class, 'update']);

Route::get('/details/{id}', [BlogController::class, 'details']);





// Route::post('/', [BlogController::class, 'comments']);