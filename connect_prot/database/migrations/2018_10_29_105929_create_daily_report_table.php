<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDailyReportTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('daily_report', function (Blueprint $table) {
            $table->increments('daily_report_id');
            $table->integer('student_id');
            $table->integer('user_id');
            $table->integer('facility_id');
            $table->date('attendance_date');
            $table->integer('attendance_flag');
            $table->integer('achievement_rate');
            $table->integer('joyful_rate');
            $table->string('comment');
            $table->time('start_time');
            $table->time('finish_time');
            $table->integer('pick_up_id');
            $table->integer('snack_flag');
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
        Schema::dropIfExists('daily_report');
    }
}
