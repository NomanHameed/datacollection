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
        Schema::create('personals', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('father_name');
            $table->string('email');
            $table->string('phone');
            $table->date('doj')->nullable();
            $table->date('dob')->nullable();
            $table->string('department')->nullable();
            $table->string('designation')->nullable();
            $table->string('currency')->nullable();
            $table->string('salary')->nullable();
            $table->string('location')->nullable();
            $table->string('cnic')->nullable();
            $table->string('employee_type')->nullable();
            $table->string('back_account')->nullable();
            $table->string('back_account_name')->nullable();
            $table->string('back_name')->nullable();
            $table->string('ibn')->nullable();
            $table->string('bank_address')->nullable();
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
        Schema::dropIfExists('personals');
    }
};
