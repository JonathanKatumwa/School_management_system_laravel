<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdmissionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admissions', function (Blueprint $table) {
            $table->id();
            $table->string('roll_No');
            $table->string('first_Name');
            $table->string('last_Name');
            $table->string('father_Name');
            $table->string('father_Phone');
            $table->string('mother_Name');
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
        Schema::dropIfExists('admissions');
    }
}
