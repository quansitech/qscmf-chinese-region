<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Alter341422City250324 extends Migration
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
        DB::unprepared("UPDATE `$table` SET `cname` = '无为市' WHERE `$table`.`id` = 341422;");

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

        DB::unprepared("UPDATE `$table` SET `cname` = '无为区' WHERE `$table`.`id` = 341422;");

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
