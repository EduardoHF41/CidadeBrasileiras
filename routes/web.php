<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CidadeController;
Route::get('/', [CidadeController::class, 'index']);
Route::get('/cidade/{id}', [CidadeController::class, 'show']);



