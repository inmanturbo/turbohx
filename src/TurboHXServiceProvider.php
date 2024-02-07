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

        Route::get('/turbo', function () {
            return 'Hello World';
        });
    }

    public function boot()
    {
        // foreach (File::glob(base_path('.www').'/[0-9]*', GLOB_ONLYDIR) as $version) {
        //     $version = basename($version);
        //     Folio::path(base_path('.www/'.$version))
        //         ->uri('/v'.$version)
        //         ->middleware([
        //             'web',
        //             'auth:sanctum',
        //             config('jetstream.auth_session'),
        //             'verified',
        //         ]);
        // }
    }
}
