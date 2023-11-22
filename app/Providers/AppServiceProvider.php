<?php

namespace App\Providers;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Carbon;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
        Schema::defaultStringLength(191);

        // Configura la zona horaria de la aplicación
        config(['app.timezone' => 'America/Lima']);

        // Establece la localización de Carbon para fechas y horas
        Carbon::setLocale('es');
    }
}
