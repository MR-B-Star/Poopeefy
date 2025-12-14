<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SuratController;

Route::post('/surat/update-status', [SuratController::class, 'updateStatus']);
