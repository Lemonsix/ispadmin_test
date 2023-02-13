<?php

use App\Http\Controllers\RequirementOrderController;
use App\Models\Material;
use App\Models\Provider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;

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

Route::get('/providers/{material_id}', function ($material_id) {
    // get the providers that sell the selected material
    // $providers = Material::find($material_id)->providers;
    // return the providers as JSON
    return response()->json(Material::find($material_id)->providers);
});

Route::get('/getData', [RequirementOrderController::class,'getData']);
