<?php

namespace Inmanturbo\TurboHX\Tests;

use Illuminate\Support\Facades\View;
use Inmanturbo\TurboHX\TurboHXServiceProvider;
use Laravel\Folio\FolioServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;

class TestCase extends Orchestra
{
    protected function setUp(): void
    {
        $this->afterApplicationCreated(fn () => View::addLocation(__DIR__.'/Feature/resources/views'));

        parent::setUp();
    }

    protected function getPackageProviders($app)
    {
        return [
            FolioServiceProvider::class,
            TurboHXServiceProvider::class,
        ];
    }
}
