<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfessorController;
use App\Http\Controllers\DisciplinaController;

Route::prefix('api')->group(function () {
    Route::apiResource('professores', ProfessorController::class);
    Route::apiResource('disciplinas', DisciplinaController::class);
});
