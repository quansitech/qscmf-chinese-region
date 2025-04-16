<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Add650000City250324 extends Migration
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
        $upid = 650000;
        $level = 2;
        $data = [
            ['id' => 659004, 'cname' => '五家渠市', 'cname1' => '五家渠', 'upid' => $upid, 'ename' => '', 'pinyin' => '', 'level' => $level],
        ];

        DB::table(\Qscmf\ChineseRegion\Lib\MigrationCommon::getTableName())->insertOrIgnore($data);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
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
