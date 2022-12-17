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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('account_type');
            $table->string('status');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            //for company
            $table->string('company_name')->nullable();
            $table->string('total_employee')->nullable();
            $table->string('hiring_manager')->nullable();
            $table->string('heard_source')->nullable();
            $table->string('mobile')->nullable();
            $table->string('industry_type')->nullable();
            $table->string('company_desc')->nullable();
            //end company
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
};
