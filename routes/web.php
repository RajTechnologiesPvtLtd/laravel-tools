<?php
Route::get('clear-cache', [RajTechnologies\Tools\Http\Controllers\RouteController::class, 'clearcache'])->name('clearcache');
Route::get('routeslist', [RajTechnologies\Tools\Http\Controllers\RouteController::class, 'index'])->name('routeslist');
Route::get('httplist', [RajTechnologies\Tools\Http\Controllers\HttpListController::class, 'index'])->name('httplist');