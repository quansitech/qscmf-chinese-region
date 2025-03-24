<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Fix450300City250324 extends Migration
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
        DB::unprepared("UPDATE `qs_area` SET `cname` = '临桂区' WHERE `qs_area`.`id` = 450322;");
        DB::unprepared("UPDATE `qs_area` SET `cname` = '荔浦市' WHERE `qs_area`.`id` = 450331;");

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        DB::unprepared("UPDATE `qs_area` SET `cname` = '临桂县' WHERE `qs_area`.`id` = 450322;");
        DB::unprepared("UPDATE `qs_area` SET `cname` = '荔浦县' WHERE `qs_area`.`id` = 450331;");

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
