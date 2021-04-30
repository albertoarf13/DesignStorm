<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\ImageController;

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

Route::get('/', [PageController::class, 'index']);


Route::post('/search', [PageController::class, 'searchPOST']);
Route::get('/search/{search}', [PageController::class, 'search']);


Route::get('/account', [AccountController::class, 'index']);
Route::get('/account/projects', [ProjectController::class, 'index']);
Route::get('/account/projects/create', [ProjectController::class, 'create']);
Route::post('/account/projects', [ProjectController::class, 'store']);
Route::get('/account/projects/{id}', [ProjectController::class, 'show']);
Route::get('/account/projects/{id}/edit', [ProjectController::class, 'edit']);
Route::put('/account/projects/{id}', [ProjectController::class, 'update']);
Route::get('/account/projects/{id}/delete', [ProjectController::class, 'destroy']);
Route::get('/account/projects/{id}/select', [ProjectController::class, 'select']);


// Images
Route::get('/projects/image/{id}/add', [ImageController::class, 'addImage'])
->middleware(['auth']);
Route::get('/projects/image/{id}/delete', [ImageController::class, 'destroy'])
->middleware(['auth']);


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
