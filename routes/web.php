<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\ContractController;
use App\Http\Controllers\MaterialController;
use App\Http\Controllers\OrderDetailController;
use App\Http\Controllers\PlanController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ProviderController;
use App\Http\Controllers\RequirementOrderController;
use App\Http\Controllers\UploadedDocumentController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('index');
});



Route::resources(
    [
        'clients' => ClientController::class,
        'contracts' => ContractController::class,
        'plans' => PlanController::class,
        'requirementOrders'=>RequirementOrderController::class,
        'requirementOrders.orderDetails' => OrderDetailController::class,
        'users'=> UserController::class,
        'materials' => MaterialController::class,
        'providers' => ProviderController::class,
        'projects' => ProjectController::class,
        'uploaded-documents' => UploadedDocumentController::class
    ]
);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
