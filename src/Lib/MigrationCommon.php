<?php

namespace Qscmf\ChineseRegion\Lib;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Str;

class MigrationCommon
{

    public static function getTableName():string
    {

        $table = env('QSCMF_CHINESE_REGION_TABLE_NAME', '');
        if (empty($table)) {
            self::throwErr("请在.env文件中设置QSCMF_CHINESE_REGION_TABLE_NAME");
        }

        if (!Schema::hasTable($table)){
            self::throwErr("表{$table}不存在");
        }

        return $table;

    }

    public static function throwErr(string $msg): void
    {
        throw new \Exception($msg);

    }

    public static function isProduction():bool
    {
        return env('APP_ENV') === 'production';
    }

    public static function delCity(int $id)
    {

        $table = self::getTableName();
        $level = DB::table($table)->where('id', $id)->value('level');

        return match($level){
            3 => DB::table($table)->where('id', $id)->orWhere('upid', $id)->delete(),
        };

    }

}
