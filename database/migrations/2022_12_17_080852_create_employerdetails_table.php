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

        Schema::create('employerdetails', function (Blueprint $table) {
            $table->id();
            $table->string('user_id');
            // $table->string('company_name');
            // $table->number('total_employee');
            // $table->string('hiring_manager');
            // $table->string('heard_source');
            // $table->number('mobile');
            // $table->string('industry_type');
            // $table->string('company_desc');
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
        Schema::dropIfExists('employerdetails');
    }
};
