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
            $table->string('name_en');
            $table->string('name_bn');
            $table->string('class');
            $table->string('section');
            $table->string('admission_fee');
            $table->string('roll');
            $table->string('group');
            $table->string('scholarship');
            $table->string('admission_session');
            $table->string('admission_year');
            $table->string('father_name_en');
            $table->string('father_name_bn');
            $table->string('father_mobile');
            $table->string('mother_name_en');
            $table->string('mother_name_bn');
            $table->string('mother_mobile');
            $table->string('father_occ');
            $table->string('mother_occ');
            $table->string('blood_group');
            $table->string('gender');
            $table->string('religion');
            $table->string('nationality');
            $table->string('email');

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
