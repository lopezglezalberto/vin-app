<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VinsController;
use App\Http\Controllers\PlaceProductionController;
use App\Http\Controllers\EquipmentCodeController;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::resource('vins', VinsController::class)->only('store', 'update', 'index', 'destroy', 'show');

Route::resource('equipmentCodes', EquipmentCodeController::class)->only('index');
Route::resource('placeProductions', PlaceProductionController::class)->only('index');


Route::post('/getSerialNumber', [VinsController::class, 'getSerialNumber']);




