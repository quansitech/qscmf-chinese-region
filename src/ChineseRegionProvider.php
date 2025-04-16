<?php
namespace Qscmf\ChineseRegion;

use Bootstrap\LaravelProvider;
use Bootstrap\Provider;
use Bootstrap\RegisterContainer;

class ChineseRegionProvider implements LaravelProvider, Provider {

    public function registerLara(): void
    {
        $dir = env('QSCMF_CHINESE_REGION_MIGRATION_DIR');
        if (empty($dir)){
            throw new \Exception("请在.env文件中设置 QSCMF_CHINESE_REGION_MIGRATION_DIR ");
        }

        RegisterContainer::registerMigration(__DIR__.'/migrations/'.$dir.'/migrations');
    }

    public function register()
    {

    }
}