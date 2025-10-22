<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Fix330100City251022 extends Migration
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
        DB::table(\Qscmf\ChineseRegion\Lib\MigrationCommon::getTableName())->where('id', '330183')
            ->where('cname', '富阳市')->update(['cname'=>'富阳区']);

        DB::table(\Qscmf\ChineseRegion\Lib\MigrationCommon::getTableName())->where('id', '330185')
            ->where('cname', '临安市')->update(['cname'=>'临安区']);

        $upid = 330100;
        $level = 3;
        $data = [
            ['id' => 330113, 'cname' => '临平区', 'cname1' => '', 'upid' => $upid, 'ename' => '', 'pinyin' => '', 'level' => $level],
            ['id' => 330114, 'cname' => '钱塘区', 'cname1' => '', 'upid' => $upid, 'ename' => '', 'pinyin' => '', 'level' => $level],
        ];

        DB::table(\Qscmf\ChineseRegion\Lib\MigrationCommon::getTableName())->insertOrIgnore($data);

        DB::table(\Qscmf\ChineseRegion\Lib\MigrationCommon::getTableName())->where('id', '330103')->delete();
        DB::table(\Qscmf\ChineseRegion\Lib\MigrationCommon::getTableName())->where('id', '330104')->delete();

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //

        
        $upid = 330100;
        $level = 3;
        $data = [
            ['id' => 330103, 'cname' => '下城区', 'cname1' => '', 'upid' => $upid, 'ename' => '', 'pinyin' => '', 'level' => $level],
            ['id' => 330104, 'cname' => '江干区', 'cname1' => '', 'upid' => $upid, 'ename' => '', 'pinyin' => '', 'level' => $level],
        ];

        DB::table(\Qscmf\ChineseRegion\Lib\MigrationCommon::getTableName())->insertOrIgnore($data);


        DB::table(\Qscmf\ChineseRegion\Lib\MigrationCommon::getTableName())->where('id', '330114')->delete();
        DB::table(\Qscmf\ChineseRegion\Lib\MigrationCommon::getTableName())->where('id', '330113')->delete();


        DB::table(\Qscmf\ChineseRegion\Lib\MigrationCommon::getTableName())->where('id', '330183')
            ->where('cname', '富阳区')->update(['cname'=>'富阳市']);

        DB::table(\Qscmf\ChineseRegion\Lib\MigrationCommon::getTableName())->where('id', '330185')
            ->where('cname', '临安区')->update(['cname'=>'临安市']);
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
