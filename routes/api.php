<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\System\IndContractorsController;

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

Route:: group(['middleware' => 'auth:sanctum'], function() {
   Route::get('/get', \App\Http\Controllers\GetController::class);
});

Route::resource('indContractors', \App\Http\Controllers\IndContractorServer::class);

//Route::get('/system/ind_contractors', [IndContractorsController::class, 'index'])->name('IndContractors.index');
//Route::get('/system/ind_contractors/create', [IndContractorsController::class, 'create'])->name('IndContractors.create');
//Route::post('/system/ind_contractors', [IndContractorsController::class, 'store'])->name('IndContractors.store');
//Route::get('/system/ind_contractors/{indcontractor}', [IndContractorsController::class, 'show'])->name('IndContractors.show');
//Route::get('/system/ind_contractors/{indcontractor}/edit', [IndContractorsController::class, 'edit'])->name('IndContractors.edit');
//Route::patch('/system/ind_contractors/{indcontractor}', [IndContractorsController::class, 'update'])->name('IndContractors.update');
//Route::delete('/system/ind_contractors/{indcontractor}', [IndContractorsController::class, 'destroy'])->name('IndContractors.destroy');


