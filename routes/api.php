<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;

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

Route::get('employees',[EmployeeController::class, 'getAllEmployees']);
Route::get('employees/{id}',[EmployeeController::class, 'getEmployee']);
Route::post('employees',[EmployeeController::class, 'createEmployee']);
Route::put('employees/{id}',[EmployeeController::class, 'updateEmployee']);
Route::delete('employees/{id}',[EmployeeController::class, 'deleteEmployee']);

