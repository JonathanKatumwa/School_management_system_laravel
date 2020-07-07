<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClassSchedulingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('class_schedulings', function (Blueprint $table) {
            $table->id();
            $table->integer('course_Id');
            $table->integer('level_Id');
            $table->integer('shift_Id');
            $table->integer('classroom_Id');
            $table->integer('batch_Id');
            $table->integer('day_Id');
            $table->integer('time_Id');
            $table->integer('teacher_Id');
            $table->time('start_Time');
            $table->time('end_Time');
            $table->tinyInteger('status')->default(1);
            $table->softDeletes();
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
        Schema::dropIfExists('class_schedulings');
    }
}
