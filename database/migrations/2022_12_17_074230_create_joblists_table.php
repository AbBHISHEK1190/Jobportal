<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('joblists', function (Blueprint $table) {
            $table->id();
            $table->string('user_id');
            $table->string('job_title');
            $table->string('job_location');
            $table->string('job_type');
            $table->string('no_of_hire');
            $table->string('min_package');
            $table->string('max_package');
            $table->string('any_benfits');
            $table->string('mobile');
            $table->string('email');
            $table->string('job_responsibility');
            $table->string('minimum_education');
            $table->string('level_of_exprerienc');
            $table->string('status');
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
        Schema::dropIfExists('joblists');
    }
};
