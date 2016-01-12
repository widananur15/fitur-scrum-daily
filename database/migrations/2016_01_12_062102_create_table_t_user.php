<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Leaf\Util\SchemaUtil;
use Leaf\Util\DateUtil;

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
            SchemaUtil::master($table);


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
