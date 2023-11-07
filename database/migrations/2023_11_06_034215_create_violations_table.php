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
        Schema::create('violations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('student_classroom_id')
                ->constrained('student_classrooms')
                ->onUpdate('cascade')
                ->onDelete('restrict');
            $table->foreignId('created_by')
                ->constrained('teachers')
                ->onUpdate('cascade')
                ->onDelete('restrict');
            $table->foreignId('violation_type_id')
                ->constrained('violation_types')
                ->onUpdate('cascade')
                ->onDelete('restrict');
            $table->boolean("is_approved")->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('violations');
    }
};
