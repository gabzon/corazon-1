<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
// use Orion\Facades\Orion;
use App\Http\Controllers\Api\EventController;
use App\Http\Controllers\Api\OrganizationController;
use App\Http\Controllers\Api\UserController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Route::group(['as' => 'api.'], function() {
//     Orion::resource('events', EventController::class);
// });

Route::get('events',[EventController::class,'index']);
Route::get('parties',[EventController::class,'parties']);
Route::get('workshops',[EventController::class,'workshops']);
Route::get('festivals',[EventController::class,'festivals']);
Route::get('events/{event}',[EventController::class,'show']);
Route::get('select-organizations', [OrganizationController::class,'select']);
Route::get('select-users', [UserController::class,'select']);