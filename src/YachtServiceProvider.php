<?php

namespace Devbaze\Yacht;

use Devbaze\Yacht\Commands\InstallCommand;
use Illuminate\Support\ServiceProvider;

class YachtServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                InstallCommand::class,
            ]);
        }
    }
}
