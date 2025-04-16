<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class FixArea53052220241025 extends Migration
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
        DB::unprepared("UPDATE `$table` SET `cname` = '腾冲市' WHERE `$table`.`id` = 530522");
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
        DB::unprepared("UPDATE `$table` SET `cname` = '腾冲县' WHERE `$table`.`id` = 530522;");
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
