<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Fix522400City20250415 extends Migration
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
        DB::table(\Qscmf\ChineseRegion\Lib\MigrationCommon::getTableName())->where('id', '522423')->where('cname', '黔西县')->update(['cname'=>'黔西市']);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        DB::table(\Qscmf\ChineseRegion\Lib\MigrationCommon::getTableName())->where('id', '522423')->where('cname', '黔西市')->update(['cname'=>'黔西县']);
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
