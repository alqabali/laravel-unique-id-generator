<?php namespace Alqabali\UniqueIdGenerator;

use Illuminate\Support\ServiceProvider;

class UniqueIdGeneratorServiceProvider extends ServiceProvider
{

    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
    }


    public function register()
    {
        $this->app->make('Alqabali\UniqueIdGenerator\UniqueIdGenerator');
    }

}
