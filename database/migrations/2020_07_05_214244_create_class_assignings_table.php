<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClassAssigningsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('class_assignings', function (Blueprint $table) {
            $table->id();
            $table->integer('course_Id');
            $table->integer('level_Id');
            $table->integer('shift_Id');
            $table->integer('classroom_Id');
            $table->integer('batch_Id');
            $table->integer('day_Id');
            $table->integer('time_Id');
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
        Schema::dropIfExists('class_assignings');
    }
}
