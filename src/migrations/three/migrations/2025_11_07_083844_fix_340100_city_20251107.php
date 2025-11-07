<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Fix340100City20251107 extends Migration
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

        $upid = 340100;
        $level = 3;
        $data = [
            ['id' => 340176, 'cname' => '合肥高新技术产业开发区', 'cname1' => '', 'upid' => $upid, 'ename' => '', 'pinyin' => '', 'level' => $level],
            ['id' => 340177, 'cname' => '合肥经济技术开发区', 'cname1' => '', 'upid' => $upid, 'ename' => '', 'pinyin' => '', 'level' => $level],
            ['id' => 340178, 'cname' => '合肥新站高新技术产业开发区', 'cname1' => '', 'upid' => $upid, 'ename' => '', 'pinyin' => '', 'level' => $level],
        ];

        DB::table(\Qscmf\ChineseRegion\Lib\MigrationCommon::getTableName())->insertOrIgnore($data);

        DB::table(\Qscmf\ChineseRegion\Lib\MigrationCommon::getTableName())->where('id', '340151')->delete();
        DB::table(\Qscmf\ChineseRegion\Lib\MigrationCommon::getTableName())->where('id', '340191')->delete();
        DB::table(\Qscmf\ChineseRegion\Lib\MigrationCommon::getTableName())->where('id', '341402')->delete();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        $upid = 340100;
        $level = 3;
        $data = [
            ['id' => 340151, 'cname' => '高新区', 'cname1' => '', 'upid' => $upid, 'ename' => '', 'pinyin' => '', 'level' => $level],
            ['id' => 340191, 'cname' => '中区', 'cname1' => '', 'upid' => $upid, 'ename' => '', 'pinyin' => '', 'level' => $level],
            ['id' => 341402, 'cname' => '居巢区', 'cname1' => '', 'upid' => $upid, 'ename' => '', 'pinyin' => '', 'level' => $level],
        ];

        DB::table(\Qscmf\ChineseRegion\Lib\MigrationCommon::getTableName())->insertOrIgnore($data);

        DB::table(\Qscmf\ChineseRegion\Lib\MigrationCommon::getTableName())->where('id', '340176')->delete();
        DB::table(\Qscmf\ChineseRegion\Lib\MigrationCommon::getTableName())->where('id', '340177')->delete();
        DB::table(\Qscmf\ChineseRegion\Lib\MigrationCommon::getTableName())->where('id', '340178')->delete();

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
