<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use app\Http\Controllers\Contactcontroller;

use function PHPUnit\Framework\assertStringNotContainsStringIgnoringCase;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();


// });

Route::get('/contacts',[App\Http\Controllers\Contactcontroller::class,'index']);
Route::post('/contacts', [App\Http\Controllers\ContactController::class, 'store']);
Route::delete('/contacts/{id}', [App\Http\Controllers\ContactController::class, 'destroy']);