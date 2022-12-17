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
        Schema::create('employeedetails', function (Blueprint $table) {
            $table->id();
            $table->string('user_id');
            $table->string('dob');
            $table->string('address');
            $table->string('city');
            $table->string('state');
            $table->string('pincode');
            $table->string('mobile');
            $table->string('email');
            $table->string('job_type');
            $table->string('employment_type');
            $table->string('current_company');
            $table->string('job_responsibility');
            $table->string('highest_degree');
            $table->string('university_name');
            $table->string('number_of_experience');
            $table->string('current_salary');
            $table->string('cv_name')->nullable();
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
        Schema::dropIfExists('employeedetails');
    }
};
