<?php
namespace Qscmf\ChineseRegion;

use Bootstrap\LaravelProvider;
use Bootstrap\Provider;
use Bootstrap\RegisterContainer;

class ChineseRegionProvider implements LaravelProvider, Provider {

    public function registerLara(): void
    {
        RegisterContainer::registerMigration(__DIR__.'/migrations');
    }

    public function register()
    {

    }
}