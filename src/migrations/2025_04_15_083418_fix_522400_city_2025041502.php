<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Fix522400City2025041502 extends Migration
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
        DB::table('qs_area')->where('id', '522400')->where('cname', '毕节地区')->update([
            'cname'=>'毕节市','cname1'=>'毕节'
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        DB::table('qs_area')->where('id', '522400')->where('cname', '毕节市')->update([
            'cname'=>'毕节地区','cname'=>'毕节地'
        ]);
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
