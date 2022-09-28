<?php

use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\DocumentController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\TypeController;
use Illuminate\Http\Request;
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

// DOCUMENT ROUTES
//get all document
Route::get('documents', [DocumentController::class, 'index']);

//get single document
Route::get('documents/{id}', [DocumentController::class, 'show']);

//post/ create document api
Route::post('documents', [DocumentController::class, 'store']);

// update  document api
Route::put('documents/{id}', [DocumentController::class, 'update']);

// delete document api
Route::delete('documents/{id}', [DocumentController::class, 'destroy']);

// TYPE ROUTES

//get all types
Route::get('types', [TypeController::class, 'index']);

//get single type
Route::get('types/{id}', [TypeController::class, 'show']);

//post/ create type api
Route::post('types', [TypeController::class, 'store']);

// update  type api
Route::put('types/{id}', [TypeController::class, 'update']);

// delete type api
Route::delete('types/{id}', [TypeController::class, 'destroy']);

// ROLES ROUTES

//get all roles
Route::get('roles', [RoleController::class, 'index']);

//get single role
Route::get('roles/{id}', [RoleController::class, 'show']);

//post/ create role api
Route::post('roles', [RoleController::class, 'store']);

// update  role api
Route::put('roles/{id}', [RoleController::class, 'update']);

// delete role api
Route::delete('roles/{id}', [RoleController::class, 'destroy']);

// DEPARTMENT ROUTES

//get all departments
Route::get('departments', [DepartmentController::class, 'index']);

//get single department
Route::get('departments/{id}', [DepartmentController::class, 'show']);

//post/ create department api
Route::post('departments', [DepartmentController::class, 'store']);

// update  department api
Route::put('departments/{id}', [DepartmentController::class, 'update']);

// delete department api
Route::delete('departments/{id}', [DepartmentController::class, 'destroy']);
