<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class FixCity20250416 extends Migration
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
        DB::table(\Qscmf\ChineseRegion\Lib\MigrationCommon::getTableName())->where('id', '630122')->where('cname', '湟中县')->update(['cname'=>'湟中区']);
        DB::table(\Qscmf\ChineseRegion\Lib\MigrationCommon::getTableName())->where('id', '610623')->where('cname', '子长县')->update(['cname'=>'子长市']);
        DB::table(\Qscmf\ChineseRegion\Lib\MigrationCommon::getTableName())->where('id', '350427')->where('cname', '沙县')->update(['cname'=>'沙县区']);
        DB::table(\Qscmf\ChineseRegion\Lib\MigrationCommon::getTableName())->where('id', '520522')->where('cname', '黔西县')->update(['cname'=>'黔西市']);

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
        DB::table(\Qscmf\ChineseRegion\Lib\MigrationCommon::getTableName())->where('id', '630122')->where('cname', '湟中区')->update(['cname'=>'湟中县']);
        DB::table(\Qscmf\ChineseRegion\Lib\MigrationCommon::getTableName())->where('id', '610623')->where('cname', '子长市')->update(['cname'=>'子长县']);
        DB::table(\Qscmf\ChineseRegion\Lib\MigrationCommon::getTableName())->where('id', '350427')->where('cname', '沙县区')->update(['cname'=>'沙县']);
        DB::table(\Qscmf\ChineseRegion\Lib\MigrationCommon::getTableName())->where('id', '520522')->where('cname', '黔西市')->update(['cname'=>'黔西县']);

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
