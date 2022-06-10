<?php

use Illuminate\Support\Facades\Route;

// We use Invokable Controller(MainServer) to route all pages to VUE (#app).

use App\Http\Controllers\MainServer;

/*
|--------------------------------------------------------------------------
| Web Route
|--------------------------------------------------------------------------
|
| Here we register web route for our VUE application. These
| route are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group.
|
*/

Route::get('{page}', MainServer::class)
    ->where('page', '.*');
