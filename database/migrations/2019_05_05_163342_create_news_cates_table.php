<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewsCatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news_cates', function (Blueprint $table) {
            $table->increments('id');
            $table->string('cate_news_name');
            $table->string('cate_news_slug');
            $table->tinyInteger('created_by');
            $table->tinyInteger('updated_by');
            $table->string('cate_news_active');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('news_cates');
    }
}