<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {

            $table->increments('user_id');
            $table->integer('facility_id');
            $table->string('user_last_name');
            $table->string('user_first_name');
            $table->integer('user_role_id');
            $table->string('email');
            $table->string('password');
            $table->integer('active_flag');
            $table->string('user_icon');
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
        Schema::dropIfExists('users');
    }
}
