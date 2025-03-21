<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Add440300City extends Migration
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
        $upid = 440300;
        $level = 3;
        $data = [
            ['id' => 440309, 'cname' => '龙华区', 'cname1' => '', 'upid' => $upid, 'ename' => '', 'pinyin' => '', 'level' => $level],
            ['id' => 440310, 'cname' => '坪山区', 'cname1' => '', 'upid' => $upid, 'ename' => '', 'pinyin' => '', 'level' => $level],
            ['id' => 440311, 'cname' => '光明区', 'cname1' => '', 'upid' => $upid, 'ename' => '', 'pinyin' => '', 'level' => $level],
        ];

        DB::table('qs_area')->insert($data);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        $ids = [440309, 440310, 440311];
        DB::table('qs_area')->whereIn('id', $ids)->delete();
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
