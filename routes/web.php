<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\ContractController;
use App\Http\Controllers\OrderDetailController;
use App\Http\Controllers\PlanController;
use App\Http\Controllers\RequirementOrderController;
use App\Http\Controllers\UserController;
use App\Models\Client;
use App\Models\Contract;
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
        'users'=> UserController::class
    ]
);

//Asi serian las routes sin el resource

// Route::get('/clients', [ClientController::class, 'index'])->name('clients.index');
// Route::post('/clients', [ClientController::class, 'store'])->name('clients.store');
// Route::get('/clients/create', [ClientController::class, 'create'])->name('clients.create');
// Route::get('/clients/{client}', [ClientController::class, 'show'])->name('clients.show');
// Route::get('/clients/{client}/edit', [ClientController::class, 'edit'])->name('clients.edit');


// Route::get('/contracts', [ContractController::class, 'index'])->name('contracts.index');
// Route::get('/contracts/{contract}', [ContractController::class, 'show'])->name('contracts.show');
// Route::get('/contracts/create', [ContractController::class, 'create'])->name('contracts.create');
// Route::get('/contracts/{contract}/edit', [ContractController::class, 'edit'])->name('contracts.edit');


// Route::get('/plans', [PlanController::class, 'index'])->name('plans.index');
// Route::get('/plans/{plan}', [PlanController::class, 'show'])->name('plans.show');
// Route::get('/plans/create', [PlanController::class, 'create'])->name('plans.create');
// Route::get('/plans/{plan}/edit', [PlanController::class, 'edit'])->name('plans.edit');
