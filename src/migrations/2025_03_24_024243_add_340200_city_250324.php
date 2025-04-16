<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Add340200City250324 extends Migration
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
        $upid = 340200;
        $level = 3;
        $data = [
            ['id' => 340210, 'cname' => '湾沚区', 'cname1' => '', 'upid' => $upid, 'ename' => '', 'pinyin' => '', 'level' => $level],
            ['id' => 340271, 'cname' => '芜湖经济技术开发区', 'cname1' => '', 'upid' => $upid, 'ename' => '', 'pinyin' => '', 'level' => $level],
            ['id' => 340272, 'cname' => '安徽芜湖三山经济开发区', 'cname1' => '', 'upid' => $upid, 'ename' => '', 'pinyin' => '', 'level' => $level],
        ];

        $table = \Qscmf\ChineseRegion\Lib\MigrationCommon::getTableName();
        DB::table($table)->insertOrIgnore($data);

        DB::unprepared("UPDATE `$table` SET `cname` = '繁昌区' WHERE `$table`.`id` = 340222;");
        DB::unprepared("UPDATE `$table` SET `cname` = '无为区' WHERE `$table`.`id` = 341422;");

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

        DB::unprepared("UPDATE `$table` SET `cname` = '繁昌县' WHERE `$table`.`id` = 340222;");
        DB::unprepared("UPDATE `$table` SET `cname` = '无为县' WHERE `$table`.`id` = 341422;");

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
