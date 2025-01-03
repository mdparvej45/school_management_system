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
        Schema::create('admission_applications', function (Blueprint $table) {
            $table->id();
            $table->string('image');
            $table->string('name_en');
            $table->integer('birth_reg_no');
            $table->string('gender');
            $table->string('blood_group');
            $table->date('dob');
            $table->string('religion');
            $table->string('nationality');
            $table->string('admission_year');
            $table->string('class');
            $table->string('section');
            $table->string('father_name_en');
            $table->integer('f_nid');
            $table->string('f_occ');
            $table->string('f_orgz');
            $table->integer('f_mobile');
            $table->string('f_email');
            $table->string('mother_name_en');
            $table->integer('m_nid');
            $table->string('m_occ');
            $table->string('m_orgz');
            $table->integer('m_mobile');
            $table->string('m_email');
            $table->integer('emerg_number');
            $table->string('guardian_name');
            $table->string('guardian_occ');
            $table->integer('guardian_mobile');
            $table->string('guardian_relation');
            $table->string('guardian_email');
            $table->string('present_address');
            $table->string('parmanent_address');
            $table->string('about');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('admission_applications');
    }
};
