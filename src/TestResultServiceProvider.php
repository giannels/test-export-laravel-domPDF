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
        $this->loadRoutesFrom(__DIR__ . '/routes/web.php');
        // Cek apakah aplikasi dijalankan lewat terminal (CLI)
        if ($this->app->runningInConsole()) {
            $this->commands([
                // Daftarkan class Command Anda di sini
                // Contoh: \Giannels\TestResultLaravel\Commands\TestExportCommand::class,
                \Giannels\TestResultLaravel\Commands\ExportTestCommand::class,
            ]);
        }

        // Gunakan __DIR__ jika folder resources ada di dalam folder yang sama dengan ServiceProvider
        $this->loadViewsFrom(__DIR__ . '/resources/views', 'test-result-pkg');
    }
}