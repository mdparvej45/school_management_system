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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->unique(); // Ensure one-to-one
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('unique_id')->unique();
            $table->integer('roll');
            $table->string('image')->nullable();
            $table->string('name_en');
            $table->string('name_bn');
            $table->string('class');
            $table->string('section');
            $table->integer('admission_fee')->nullable();
            $table->string('group');
            $table->string('scholarship')->nullable();
            $table->string('admission_session');
            $table->string('admission_year');
            $table->string('father_name_en')->nullable();
            $table->string('father_name_bn')->nullable();
            $table->string('father_mobile')->nullable();
            $table->string('mother_name_en')->nullable();
            $table->string('mother_name_bn')->nullable();
            $table->string('mother_mobile')->nullable();
            $table->string('father_occ')->nullable();
            $table->string('mother_occ')->nullable();
            $table->enum('blood_group', ['A(+)','A(-)','B(+)','B(-)','AB(+)','AB(-)','O(+)','O(-)'])->nullable();
            $table->enum('gender', ['Male','Female']);
            $table->enum('religion', ['Islam','Hinduisum','Buddist','Chirstian','Others']);
            $table->string('nationality')->nullable();
            $table->string('email')->nullable();
            $table->date('dob');
            $table->string('guardian_name')->nullable();
            $table->string('guardian_occ')->nullable();
            $table->integer('guardian_mobile')->nullable();
            $table->string('guardian_relation')->nullable();
            $table->longText('present_address')->nullable();
            $table->longText('parmanent_address')->nullable();
            $table->longText('about')->nullable();
            $table->enum('status', ['Unapproved', 'Active', 'Inactive'])->default('Unapproved');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
