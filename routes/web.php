<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

Route::get("/", [HomeController::class, 'index'])->name("pages.home");
Route::post("/task", [TaskController::class, 'store']);

Route::delete("/task/{id}/delete", [TaskController::class, 'destroy']);
Route::get("/task/{id}/edit", [TaskController::class, 'edit']);
Route::put("/task/{id}/edit", [TaskController::class, 'update']);
