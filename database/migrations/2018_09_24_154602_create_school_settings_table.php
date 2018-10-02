<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSchoolSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('school_settings', function (Blueprint $table) {
            $table->increments('id');
            $table->string('school_name',50)->unique();
            $table->string('school_address',50);
            $table->string('school_motto',50);
            $table->string('school_logo',20);
            $table->string('school_email',50);
            $table->string('school_website',50);
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
        Schema::dropIfExists('school_settings');
    }
}
