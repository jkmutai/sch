<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id')->unique();
            $table->string('staff_id',20);
            $table->string('name',60);
            $table->date('dob')->default('2000-01-01');
            $table->string('phone',20);
            $table->string('teaching_subjects',60);
            $table->string('address',60);
            $table->string('qualifications',60);
            $table->string('designation',60);
            $table->string('photo',60);
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
