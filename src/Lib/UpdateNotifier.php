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
        $lastNotifiedVersion = @file_get_contents($flagFilePath) ?: '0';
        if ($lastNotifiedVersion === $currentVersion) {
            return 0;
        }

        // 3. 读取变更日志文件
        $deprecationLogFile = $packagePath . '/deprecation-log.json';
        if (!file_exists($deprecationLogFile)) return 0;

        $logData = json_decode(file_get_contents($deprecationLogFile), true);
        if (empty($logData)) {
            @file_put_contents($flagFilePath, $currentVersion);
            return 0;
        }

        // 4. 获取需要通知的弃用地区
        $deprecatedRegions = self::getDeprecatedRegionsSinceVersion($logData, $lastNotifiedVersion, $currentVersion);
        
        if (empty($deprecatedRegions)) {
            @file_put_contents($flagFilePath, $currentVersion);
            return 0;
        }

        // 5. 输出警告
        fwrite(STDOUT, ''. PHP_EOL);
        fwrite(STDOUT, '=================================================='. PHP_EOL);
        fwrite(STDOUT, '' . $packageName . ' 已更新至 ' . $currentVersion. PHP_EOL);
        
        if ($lastNotifiedVersion) {
            fwrite(STDOUT, '从版本 ' . $lastNotifiedVersion . ' 升级到 ' . $currentVersion . PHP_EOL);
        }
        
        fwrite(STDOUT, '发现以下地区数据已被撤销，请检查您的业务逻辑：'. PHP_EOL);
        fwrite(STDOUT, ''. PHP_EOL);

        foreach ($deprecatedRegions as $version => $regions) {
            fwrite(STDOUT, '版本 ' . $version . ' 的变更：'. PHP_EOL);
            foreach ($regions as $region) {
                fwrite(STDOUT, sprintf('  - 地区: %s (ID: %s) - %s', $region['name'], $region['id'], $region['message']). PHP_EOL);
            }
            fwrite(STDOUT, ''. PHP_EOL);
        }
        
        fwrite(STDOUT, '请按需进行必要的数据库迁移或代码调整。'. PHP_EOL);
        fwrite(STDOUT, '=================================================='. PHP_EOL);
        fwrite(STDOUT, ''. PHP_EOL);

        // 6. 更新状态文件
        @file_put_contents($flagFilePath, $currentVersion);
        
        return 0;

    }

    /**
     * 获取从指定版本到当前版本之间的所有弃用地区
     *
     * @param array $logData 弃用日志数据
     * @param string|null $fromVersion 起始版本（null 表示从最早版本开始）
     * @param string $toVersion 目标版本
     * @return array
     */
    private static function getDeprecatedRegionsSinceVersion($logData, $fromVersion, $toVersion)
    {
        $result = [];
        
        // 按版本号排序日志数据
        usort($logData, function($a, $b) {
            return version_compare($a['version'], $b['version']);
        });

        foreach ($logData as $versionData) {
            $version = $versionData['version'];
            
            // 如果版本在指定范围内，则包含该版本的弃用地区
            if (self::shouldIncludeVersion($version, $fromVersion, $toVersion)) {
                if (!empty($versionData['deprecated_regions'])) {
                    $result[$version] = $versionData['deprecated_regions'];
                }
            }
        }

        return $result;
    }

    /**
     * 判断版本是否应该包含在结果中
     *
     * @param string $version 当前检查的版本
     * @param string|null $fromVersion 起始版本
     * @param string $toVersion 目标版本
     * @return bool
     */
    private static function shouldIncludeVersion($version, $fromVersion, $toVersion)
    {
        // 如果版本大于目标版本，不包含
        if (version_compare($version, $toVersion) > 0) {
            return false;
        }
        
        // 如果没有起始版本，包含所有小于等于目标版本的版本
        if (empty($fromVersion)) {
            return true;
        }
        
        // 如果版本大于起始版本且小于等于目标版本，包含
        return version_compare($version, $fromVersion) > 0 && version_compare($version, $toVersion) <= 0;
    }
}
