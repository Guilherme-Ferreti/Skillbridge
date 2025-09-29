<?php

declare(strict_types=1);

use App\Models\Lesson;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('lesson_translations', function (Blueprint $table) {
            $table->id();

            $table->foreignIdFor(Lesson::class, 'item_id')
                ->constrained('lessons')
                ->cascadeOnDelete();

            $table->string('locale');

            $table->string('name')->nullable();

            $table->unique(['item_id', 'locale']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('lesson_translations');
    }
};
