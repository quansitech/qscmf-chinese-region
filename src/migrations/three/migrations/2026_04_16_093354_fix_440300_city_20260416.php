<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
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
        DB::table(\Qscmf\ChineseRegion\Lib\MigrationCommon::getTableName())->insert([
            [
                'id' => 440312,
                'cname' => '大鹏新区',
                'cname1' => '',
                'upid' => 440300,
                'ename' => '',
                'pinyin' => '',
                'level' => 3
            ]
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::table(\Qscmf\ChineseRegion\Lib\MigrationCommon::getTableName())->where('id', 440312)->delete();
    }

    public function afterCmmUp()
    {
        
    }

    public function afterCmmDown()
    {
        //
    }
};
