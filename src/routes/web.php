<?php

use Giannels\TestResultLaravel\Http\Controllers\ExportTestController;
use Illuminate\Support\Facades\Route;

Route::middleware(['web'])->group(function () {
    Route::get('test-result/preview', [ExportTestController::class, 'previewPDF']);
    Route::get('test-result/download', [ExportTestController::class, 'downloadPDF']);
});