<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSupportPlansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('support_plans', function (Blueprint $table) {

            $table->increments('support_plan_id');
            $table->integer('facility_id');
            $table->integer('student_id');
            $table->date('plan_start_date');
            $table->date('plan_finish_date');
            $table->string('parents_will');
            $table->string('child_will');
            $table->string('middle_term_goal');
            $table->string('long_term_goal');
            $table->string('action_plan');
            $table->string('challenge');
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
        Schema::dropIfExists('support_plans');
    }
}
