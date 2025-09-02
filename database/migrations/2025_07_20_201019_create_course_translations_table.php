<?php

declare(strict_types=1);

use App\Models\Course;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('course_translations', function (Blueprint $table) {
            $table->id();

            $table->foreignIdFor(Course::class, 'item_id')
                ->constrained('courses')
                ->cascadeOnDelete();

            $table->string('locale');

            $table->string('name')->nullable();
            $table->string('teaser')->nullable();
            $table->string('slug')->nullable();

            $table->unique(['item_id', 'locale']);
        });

        DB::statement('CREATE UNIQUE INDEX course_translations_slug_locale_unique ON course_translations (locale, slug) WHERE slug != ""');
    }

    public function down(): void
    {
        Schema::dropIfExists('course_translations');
    }
};
