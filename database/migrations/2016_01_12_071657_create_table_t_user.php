<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableTUser extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_user', function (Blueprint $table) {

            $table->bigIncrements('user_id');
            $table->string('email');
            $table->string('username');
            $table->string('password');
            $table->string('flg_active',2);
            $table->string('active', 1)->default('Y');
            $table->string('active_datetime', 14);
            $table->string('non_active_datetime', 14);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('t_user');
    }
}
