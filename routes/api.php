<?php

use App\Exports\EmployeeExport;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\EmployeesMangersController;
use App\Http\Controllers\FounderController;
use App\Http\Controllers\ManagerController;
use App\Http\Controllers\SearchController;
use App\Imports\EmployeesImport;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Maatwebsite\Excel\Facades\Excel;

//Route::get('founder' ,[FounderController::class , 'index']);
//Route::post('founder' ,[FounderController::class , 'store']);
Route::apiResource('founder', FounderController::class);
Route::apiResource('{founder}/manager', ManagerController::class);
Route::apiResource('{manager}/employee', EmployeeController::class);
Route::get('employee/{id}/managers', [EmployeesMangersController::class , 'managers']);
Route::get('employee/{id}/managers-salary', [EmployeesMangersController::class , 'managersSalary']);
Route::post('search', [SearchController::class , 'search']);


Route::post('import', function () {
    Excel::import(new EmployeesImport, request()->file('file'));
    return redirect()->back()->with('success','Data Imported Successfully');
});
Route::get('export-csv', function () {
    return Excel::download(new EmployeeExport, 'users.csv');
});
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
