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
            $table->string('unique_id')->unique();
            $table->string('name_en');
            $table->string('name_bn');
            $table->string('qualification')->nullable(); //nullable
            $table->string('designation')->nullable(); //nullable
            $table->string('assign_class')->nullable(); //nullable
            $table->string('assign_section')->nullable();//nullable
            $table->string('department')->nullable();//nullable
            $table->string('father_name')->nullable();//nullable
            $table->string('mother_name')->nullable();//nullable
            $table->string('gender')->nullable();//nullable 
            $table->string('religion')->nullable();//nullable
            $table->string('mobile'); 
            $table->string('dob'); 
            $table->string('date_of_join');
            $table->string('married_status')->nullable();//nullable
            $table->string('marriage_date')->nullable(); //nullable
            $table->integer('salary');
            $table->string('email')->nullable();; 
            $table->string('blood_group')->nullable(); //nullable
            $table->string('present_address')->nullable();//nullable
            $table->string('parmanent_address')->nullable();//nullable
            $table->enum('status', ['Unapproved', 'Active', 'Inactive'])->default('Unapproved');
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
