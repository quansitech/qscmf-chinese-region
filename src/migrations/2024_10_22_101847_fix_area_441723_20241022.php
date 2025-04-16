<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class FixArea44172320241022 extends Migration
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
        DB::table(\Qscmf\ChineseRegion\Lib\MigrationCommon::getTableName())->where('id', 441723)->update(['cname'=>'阳东区']);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        DB::table(\Qscmf\ChineseRegion\Lib\MigrationCommon::getTableName())->where('id', 441723)->update(['cname'=>'阳东县']);
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
