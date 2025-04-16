<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class FixAreaGuizhou20241023 extends Migration
{

    public function beforeCmmUp()
    {
        //
    }

    public function beforeCmmDown()
    {
        //
    }

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        $table = \Qscmf\ChineseRegion\Lib\MigrationCommon::getTableName();
        
        $sql = <<<SQL
UPDATE `$table` SET `cname` = '七星关区' WHERE `$table`.`id` = 522401;

UPDATE `$table` SET `cname` = '铜仁市', `cname1` = '铜仁' WHERE `$table`.`id` = 522200;
SQL;

        \Illuminate\Support\Facades\DB::unprepared($sql);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        $table = \Qscmf\ChineseRegion\Lib\MigrationCommon::getTableName();

        $sql = <<<SQL
UPDATE `$table` SET `cname` = '毕节市' WHERE `$table`.`id` = 522401;

UPDATE `$table` SET `cname` = '铜仁地区', `cname1` = '铜仁地' WHERE `$table`.`id` = 522200;
SQL;

        \Illuminate\Support\Facades\DB::unprepared($sql);
    }

    public function afterCmmUp()
    {
        //
    }

    public function afterCmmDown()
    {
        //
    }
}
