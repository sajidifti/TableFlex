<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/tables', [AdminController::class, 'tables'])->name('tables');
    Route::get('/tables/create', [AdminController::class, 'createTables'])->name('tables.create');
    Route::get('/tables/{table_id}/columns', [AdminController::class, 'viewRows'])->name('tables.columns');
    Route::get('/tables/{table_id}/rows', [AdminController::class, 'viewRows'])->name('tables.rows');
    Route::get('/tables/{table_id}/insert', [AdminController::class, 'insertData'])->name('tables.insert');
});
