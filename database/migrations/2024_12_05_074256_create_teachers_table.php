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
        Schema::create('teachers', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->unique(); // Ensure one-to-one
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('name_en');
            $table->string('name_bn');
            $table->string('qualification');
            $table->string('designation');
            $table->string('assign_class')->nullable(); //nullable
            $table->string('assign_section')->nullable();//nullable
            $table->string('department')->nullable();//nullable
            $table->string('father_name');
            $table->string('mother_name'); 
            $table->string('gender'); 
            $table->string('religion'); 
            $table->string('mobile'); 
            $table->string('dob'); 
            $table->string('date_of_join');
            $table->string('married_status');
            $table->string('marriage_date')->nullable(); //nullable
            $table->string('salary'); 
            $table->string('email'); 
            $table->string('blood_group')->nullable(); //nullable
            $table->string('present_address'); 
            $table->string('parmanent_address'); 
            $table->timestamps();
    
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teachers');
    }
};
