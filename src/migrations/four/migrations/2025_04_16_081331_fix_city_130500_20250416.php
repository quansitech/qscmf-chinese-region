<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class FixCity13050020250416 extends Migration
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

        DB::table($table)->where('id', '130502')->update(['cname'=>'襄都区']);
        DB::table($table)->where('id', '130503')->update(['cname'=>'信都区']);
        DB::table($table)->where('id', '130526')->update(['cname'=>'任泽区']);
        DB::table($table)->where('id', '130527')->update(['cname'=>'南和区']);
        DB::table($table)->where('id', '130571')->update(['cname'=>'邢台经济开发区']);

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

        DB::table($table)->where('id', '130502')->update(['cname'=>'桥东区']);
        DB::table($table)->where('id', '130503')->update(['cname'=>'桥西区']);
        DB::table($table)->where('id', '130526')->update(['cname'=>'任县']);
        DB::table($table)->where('id', '130527')->update(['cname'=>'南和县']);
        DB::table($table)->where('id', '130571')->update(['cname'=>'河北邢台经济开发区']);

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
