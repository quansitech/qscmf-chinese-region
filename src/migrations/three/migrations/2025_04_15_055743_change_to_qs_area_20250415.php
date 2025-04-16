<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class ChangeToQsArea20250415 extends Migration
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
        DB::table(\Qscmf\ChineseRegion\Lib\MigrationCommon::getTableName())->where('id', '130502')->where('cname', '桥东区')->update(['cname'=>'襄都区']);
        DB::table(\Qscmf\ChineseRegion\Lib\MigrationCommon::getTableName())->where('id', '130503')->where('cname', '桥西区')->update(['cname'=>'信都区']);
        DB::table(\Qscmf\ChineseRegion\Lib\MigrationCommon::getTableName())->where('id', '130526')->where('cname', '任县')->update(['cname'=>'任泽区']);
        DB::table(\Qscmf\ChineseRegion\Lib\MigrationCommon::getTableName())->where('id', '130527')->where('cname', '南和县')->update(['cname'=>'南和区']);
        DB::table(\Qscmf\ChineseRegion\Lib\MigrationCommon::getTableName())->insert([
            'id' => 130571,
            'cname' => '邢台经济开发区',
            'cname1' => '',
            'upid' => 130500,
            'ename' => '',
            'pinyin' => '',
            'level' => 3
        ]);

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::table(\Qscmf\ChineseRegion\Lib\MigrationCommon::getTableName())->where('id', '130502')->where('cname', '襄都区')->update(['cname'=>'桥东区']);
        DB::table(\Qscmf\ChineseRegion\Lib\MigrationCommon::getTableName())->where('id', '130503')->where('cname', '信都区')->update(['cname'=>'桥西区']);
        DB::table(\Qscmf\ChineseRegion\Lib\MigrationCommon::getTableName())->where('id', '130526')->where('cname', '任泽区')->update(['cname'=>'任县']);
        DB::table(\Qscmf\ChineseRegion\Lib\MigrationCommon::getTableName())->where('id', '130527')->where('cname', '南和区')->update(['cname'=>'南和县']);
        DB::table(\Qscmf\ChineseRegion\Lib\MigrationCommon::getTableName())->where('id', 130571)->delete();
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
