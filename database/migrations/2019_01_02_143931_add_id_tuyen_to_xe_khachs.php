<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddIdTuyenToXeKhachs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('xe_khachs', function (Blueprint $table) {
            $table->integer('id_tuyen')->after('ten_xe')->unsigned()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('xe_khachs', function (Blueprint $table) {
            $table->dropColmn('id_tuyen');
        });
    }
}
