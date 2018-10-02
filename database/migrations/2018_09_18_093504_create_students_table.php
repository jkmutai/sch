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
            $table->increments('id');
            $table->string('adm',20)->unique();
            $table->string('name',60);
            $table->string('class',60);
            $table->string('stream',60);
            $table->string('house',60);
            $table->date('dob')->default('2000-01-01');
            $table->string('gender',20);
            $table->string('old_school',60);
            $table->date('adm_date')->default('2000-01-01');
            $table->string('adm_type',60);
            $table->string('photo',60);
            $table->string('entry_grade',20);
            $table->string('special_needs',20);
            $table->string('parent_name',60);
            $table->string('parent_phone',60);
            $table->string('parent_address',60);
            $table->string('parent_email',60);
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
