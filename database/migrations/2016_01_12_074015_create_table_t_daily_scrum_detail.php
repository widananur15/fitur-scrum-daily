<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableTDailyScrumDetail extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_daily_scrum_detail', function (Blueprint $table) {

            $table->bigIncrements('daily_scrum_detail_id');
            $table->bigInteger('daily_scrum_id');
            $table->string('daily_scrum_type');
            $table->string('remark');
            $table->string('status');
            $table->bigInteger("create_user_id");
            $table->bigInteger("update_user_id");
            $table->string('create_datetime', 14);
            $table->string('update_datetime', 14);
            $table->bigInteger("version")->default(0);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('t_daily_scrum_detail');
    }
}
