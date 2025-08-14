<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class Alter445323And610126City20250814 extends Migration
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
        DB::table(\Qscmf\ChineseRegion\Lib\MigrationCommon::getTableName())->where('id', '445323')->where('cname', '云安县')->update(['cname'=>'云安区']);
        DB::table(\Qscmf\ChineseRegion\Lib\MigrationCommon::getTableName())->where('id', '610126')->where('cname', '高陵县')->update(['cname'=>'高陵区']);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::table(\Qscmf\ChineseRegion\Lib\MigrationCommon::getTableName())->where('id', '445323')->where('cname', '云安区')->update(['cname'=>'云安县']);
        DB::table(\Qscmf\ChineseRegion\Lib\MigrationCommon::getTableName())->where('id', '610126')->where('cname', '高陵区')->update(['cname'=>'高陵县']);
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
