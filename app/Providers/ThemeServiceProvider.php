<?php

namespace App\Providers;

use Roots\Acorn\ServiceProvider;

class ThemeServiceProvider extends ServiceProvider
{
    use Concerns\HasHooks,
        Concerns\HasCommands;
        
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
      if ($this->app->runningInConsole()) {
        $this->registerCommands();
      }
    }
}
