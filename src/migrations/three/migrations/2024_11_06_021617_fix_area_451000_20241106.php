<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class FixArea45100020241106 extends Migration
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
        DB::table($table)->where('id', 451021)->update(['cname' => '田阳区']);
        DB::table($table)->where('id', 451023)->update(['cname' => '平果市']);
        DB::table($table)->where('id', 451025)->update(['cname' => '靖西市']);
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
        DB::table($table)->where('id', 451021)->update(['cname' => '田阳县']);
        DB::table($table)->where('id', 451023)->update(['cname' => '平果县']);
        DB::table($table)->where('id', 451025)->update(['cname' => '靖西县']);
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
