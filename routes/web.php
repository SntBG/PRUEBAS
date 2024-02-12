<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\InventoryInputController;
use App\Http\Controllers\InventoryOutputController;
use App\Http\Controllers\PackagingTypeController;
use App\Http\Controllers\PersonController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductsInputController;
use App\Http\Controllers\ProductsOutputController;
use App\Http\Controllers\RegionalStockBogotaController;
use App\Http\Controllers\RegionalStockController;
use App\Http\Controllers\SupplierController;



/*

use App\Http\Controllers\;
Route::resource('', Controller::class);
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');

});

Route::resource('categories', CategoryController::class);
Route::resource('clients', ClientController::class);
Route::resource('inventory-inputs', InventoryInputController::class);
Route::resource('inventory-outputs', InventoryOutputController::class);
Route::resource('packaging-types', PackagingTypeController::class);
Route::resource('people', PersonController::class);
Route::resource('products', ProductController::class);
Route::resource('products-inputs', ProductsInputController::class);
Route::resource('products-outputs', ProductsOutputController::class);
Route::resource('regional-bogota', RegionalStockBogotaController::class);
Route::resource('regional-stocks', RegionalStockController::class);
Route::resource('suppliers', SupplierController::class);
