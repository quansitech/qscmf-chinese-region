<?php

namespace Qscmf\ChineseRegion\Lib;

use Composer\InstalledVersions;

class UpdateNotifier
{
    
    public static function checkForDeprecations()
    {

        // 1. 找到我们自己的包
        if (!class_exists(InstalledVersions::class)) {
            fwrite(STDERR, 'Composer 2 API not found. Cannot perform check.');
            return 1;
        }

        $packageName = 'quansitech/qscmf-chinese-region'; 
        
        if (!InstalledVersions::isInstalled($packageName)) {
            return 0; // 包不存在
        }
        
        $currentVersion = InstalledVersions::getPrettyVersion($packageName);
        $packagePath = InstalledVersions::getInstallPath($packageName);
        $flagFilePath = LARA_DIR.'/bootstrap/cache/qscmf-chinese-region-notified.txt'; // 使用 Laravel 的缓存目录

        // 2. 检查是否已经通知过
        $lastNotifiedVersion = @file_get_contents($flagFilePath);
        if ($lastNotifiedVersion === $currentVersion) {
            return 0;
        }

        // 3. 读取变更日志文件
        $deprecationLogFile = $packagePath . '/deprecation-log.json';
        if (!file_exists($deprecationLogFile)) return 0;

        $logData = json_decode(file_get_contents($deprecationLogFile), true);
        if (empty($logData['deprecated_regions'])) {
            @file_put_contents($flagFilePath, $currentVersion);
            return 0;
        }

        // 4. 输出警告
        fwrite(STDOUT, ''. PHP_EOL);
        fwrite(STDOUT, '=================================================='. PHP_EOL);
        fwrite(STDOUT, '' . $packageName . ' 已更新至 ' . $currentVersion. PHP_EOL);
        fwrite(STDOUT, '发现以下地区数据已被撤销，请检查您的业务逻辑：'. PHP_EOL);
        fwrite(STDOUT, ''. PHP_EOL);

        foreach ($logData['deprecated_regions'] as $region) {
            fwrite(STDOUT, sprintf('  - 地区: %s (ID: %s) - %s', $region['name'], $region['id'], $region['message']). PHP_EOL);
        }
        
        fwrite(STDOUT, ''. PHP_EOL);
        fwrite(STDOUT, '请按需进行必要的数据库迁移或代码调整。'. PHP_EOL);
        fwrite(STDOUT, '=================================================='. PHP_EOL);
        fwrite(STDOUT, ''. PHP_EOL);

        // 5. 更新状态文件
        @file_put_contents($flagFilePath, $currentVersion);
        
        return 0;

    }
}