<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Fix610600City20250415 extends Migration
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
        DB::table('qs_area')->where('id', '610624')->where('cname', '安塞县')->update(['cname'=>'安塞区']);
        DB::table('qs_area')->where('id', '610623')->where('cname', '子长县')->update(['cname'=>'子长市']);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        DB::table('qs_area')->where('id', '610624')->where('cname', '安塞区')->update(['cname'=>'安塞县']);
        DB::table('qs_area')->where('id', '610623')->where('cname', '子长市')->update(['cname'=>'子长县']);
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
