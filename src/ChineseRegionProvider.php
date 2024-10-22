<?php
namespace Qscmf\ChineseRegion;

use Bootstrap\LaravelProvider;
use Bootstrap\RegisterContainer;

class ChineseRegionProvider implements LaravelProvider{

    public function registerLara(): void
    {
        RegisterContainer::registerMigration(__DIR__.'/migrations');
    }

}