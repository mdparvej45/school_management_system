<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->unique(); // Ensure one-to-one
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('unique_id')->unique();
            $table->enum('type', ['Superadmin', 'Principle', 'Accountant', 'Operator', 'Employee']);
            $table->string('image')->nullable();
            $table->string('name');
            $table->string('blood_group')->nullable();
            $table->string('designation')->nullable();
            $table->string('qualification')->nullable();
            $table->string('department')->nullable();
            $table->integer('monthly_salary');
            $table->string('father_name')->nullable();
            $table->string('mother_name')->nullable();
            $table->enum('gender', ['Male','Female']);
            $table->enum('religion', ['Islam','Hinduisum','Buddist','Chirstian','Others']);
            $table->string('nationality')->nullable();
            $table->integer('nid');
            $table->integer('mobile')->nullable();
            $table->string('email')->unique()->nullable();
            $table->dateTime('join_date');
            $table->dateTime('dob');
            $table->enum('married_status', ['Marrid', 'Unmarrid'])->nullable();
            $table->longText('present_address')->nullable();
            $table->longText('permanent_address')->nullable();
            $table->longText('about');
            $table->string('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};
