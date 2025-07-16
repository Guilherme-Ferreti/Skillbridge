<?php

declare(strict_types=1);

use App\Enums\CourseSkillLevel;
use App\Models\Instructor;
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
        Schema::create('courses', function (Blueprint $table) {
            $table->ulid('id')->primary();
            $table->string('name');
            $table->string('teaser');
            $table->string('teaser_image_path');
            $table->string('slug')->unique();
            $table->enum('skill_level', array_column(CourseSkillLevel::cases(), 'value'));
            $table->unsignedTinyInteger('expected_completion_weeks');
            $table->boolean('is_featured')->default(false);
            $table->foreignIdFor(Instructor::class)->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('courses');
    }
};
