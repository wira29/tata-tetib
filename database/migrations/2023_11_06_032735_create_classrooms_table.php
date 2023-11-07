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
        Schema::create('classrooms', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->foreignId("major_id")
                ->constrained("majors")
                ->onUpdate("cascade")
                ->onDelete("restrict");
            $table->foreignId("homeroom_teacher_id")
                ->constrained("teachers")
                ->onUpdate("cascade")
                ->onDelete("restrict");
            $table->foreignId("school_year_id")
                ->constrained("school_years")
                ->onUpdate("cascade")
                ->onDelete("restrict");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('classrooms');
    }
};
