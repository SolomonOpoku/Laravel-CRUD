<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\validationController;
use App\Http\Controllers\photoController;

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

// display home view route
Route::get('/', [validationController::class, 'index']);

// display form route
Route::get('/forms', [validationController::class, 'create']);

// store data forms route
Route::post('/forms', [validationController::class, 'store']);

// Show list of Forms route
Route::get('/showforms', [validationController::class, 'show']);

// display Update forms route
Route::post('/formupdate/{id}', [validationController::class, 'edit']);

// updates form route
Route::get('/formupdate/{id}', [validationController::class, 'update']);

// Delete form route
Route::get('/formdelete/{id}', [validationController::class, 'delete']);