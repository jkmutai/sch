<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SubjectSettings extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subject_settings', function (Blueprint $table) {
            $table->increments('id')->unique();
            $table->string('code',20)->unique();
            $table->string('subject_name',60)->unique();
            $table->string('marking_structure',60);
            $table->integer('possible_mark')->default(0);
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
        Schema::dropIfExists('subject_settings');
    }
}
