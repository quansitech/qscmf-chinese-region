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
        $sql = <<<SQL
UPDATE `$table` SET `cname` = '田阳区' WHERE `$table`.`id` = 451021;
UPDATE `$table` SET `cname` = '平果市' WHERE `$table`.`id` = 451023;
UPDATE `$table` SET `cname` = '靖西市' WHERE `$table`.`id` = 451025;
SQL;

        DB::unprepared($sql);
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

        $sql = <<<SQL
UPDATE `$table` SET `cname` = '田阳县' WHERE `$table`.`id` = 451021;
UPDATE `$table` SET `cname` = '平果县' WHERE `$table`.`id` = 451023;
UPDATE `$table` SET `cname` = '靖西县' WHERE `$table`.`id` = 451025;
SQL;

        DB::unprepared($sql);
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
