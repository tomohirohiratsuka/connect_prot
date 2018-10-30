<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {

            $table->increments('student_id');
            $table->integer('facility_id');
            $table->string('student_last_name');
            $table->string('student_first_name');
            $table->integer('student_legal_age');
            $table->integer('student_birth_year');
            $table->date('student_birth_date');
            $table->string('student_icon');
            $table->integer('male_flag');
            $table->integer('female_flag');
            $table->integer('active_flag');
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
        Schema::dropIfExists('students');
    }
}
