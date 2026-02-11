<?php

namespace Giannels\TestResultLaravel;

use Illuminate\Support\ServiceProvider;

class TestResultServiceProvider extends ServiceProvider
{
    /**
     * Daftarkan layanan apa pun di dalam container.
     */
    public function register()
    {
        //
    }

    /**
     * Jalankan layanan (bootstrapping).
     */
    public function boot()
    {
        // Cek apakah aplikasi dijalankan lewat terminal (CLI)
        if ($this->app->runningInConsole()) {
            $this->commands([
                // Daftarkan class Command Anda di sini
                // Contoh: \Giannels\TestResultLaravel\Commands\TestExportCommand::class,
            ]);
        }
    }
}