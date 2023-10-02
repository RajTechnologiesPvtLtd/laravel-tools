<?php

use Illuminate\Support\Facades\Route;
use RajTechnologies\Tools\Http\Controllers\HttpListController;
use RajTechnologies\Tools\Http\Controllers\RouteController;

Route::get('clear-cache', [RouteController::class, 'clearcache'])->name('clearcache');
Route::get('routeslist', [RouteController::class, 'index'])->name('routeslist');
Route::get('httplist', [HttpListController::class, 'index'])->name('httplist');