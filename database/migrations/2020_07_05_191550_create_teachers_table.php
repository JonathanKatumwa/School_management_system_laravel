<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeachersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teachers', function (Blueprint $table) {
            $table->id();
            $table->string('first_Name');
            $table->string('last_Name');
            $table->string('gender');
            $table->string('email')->unique();
            $table->date('dob');
            $table->string('phone');
            $table->longText('address');
            $table->longText('current_Address');
            $table->string('nationality');
            $table->string('passport_No');
            $table->tinyInteger('status');
            $table->date('dateregistered');
            $table->integer('user_Id');
            $table->integer('class_Id');
            $table->string('image')->nullable();
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
        Schema::dropIfExists('teachers');
    }
}
