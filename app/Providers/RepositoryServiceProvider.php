<?php

namespace App\Providers;

use App\Interfaces\PedidoRepositoryInterface;
use App\Repositories\PedidoRepository;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(PedidoRepositoryInterface::class, PedidoRepository::class);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
