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

        DB::table($table)->where('id', 522401)->update(['cname' => '七星关区']);
        DB::table($table)->where('id', 522200)->update(['cname' => '铜仁市', 'cname1' => '铜仁']);
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

        DB::table($table)->where('id', 522401)->update(['cname' => '毕节市']);
        DB::table($table)->where('id', 522200)->update(['cname' => '铜仁地区', 'cname1' => '铜仁地']);
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
