<?php

use Fhsinchy\Inspire\Controllers\InspirationController;
use Illuminate\Support\Facades\Route;

Route::get('/inspire', [InspirationController::class,'inspire'])->name('inspire');
Route::get('inspire/add', [InspirationController::class,'add']);
?>