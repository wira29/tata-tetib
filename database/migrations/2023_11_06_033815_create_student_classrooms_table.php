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
        Schema::create('student_classrooms', function (Blueprint $table) {
            $table->id();
            $table->foreignId('student_id')
                ->constrained('students')
                ->onUpdate('cascade')
                ->onDelete('restrict');
            $table->foreignId('classroom_id')
                ->constrained('classrooms')
                ->onUpdate('cascade')
                ->onDelete('restrict');
            $table->foreignId('school_year_id')
                ->constrained('school_years')
                ->onUpdate('cascade')
                ->onDelete('restrict');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('student_classrooms');
    }
};
