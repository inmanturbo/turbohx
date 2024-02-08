<?php

namespace Inmanturbo\TurboHX;

use Illuminate\Support\Facades\Route;
use Laravel\Folio\FolioManager;
use Laravel\Folio\Router as FolioRouter;

class TurboHXServiceProvider extends \Illuminate\Support\ServiceProvider
{
    public function register()
    {
        $this->app->singleton(FolioManager::class, TurboHX::class);
        $this->app->bind(FolioRouter::class, Router::class);
    }
}
