<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableTDailyScrum extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_daily_scrum', function (Blueprint $table) {

            $table->bigIncrements('daily_scrum_id');
            $table->bigInteger('user_id');
            $table->string('doc_no');
            $table->string('doc_date');
            $table->bigInteger("create_user_id");
            $table->bigInteger("update_user_id");
            $table->string('create_datetime', 14);
            $table->string('update_datetime', 14);
            $table->bigInteger("version")->default(0);

            $table->unique(['doc_no','doc_date']);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('t_daily_scrum');
    }
}
