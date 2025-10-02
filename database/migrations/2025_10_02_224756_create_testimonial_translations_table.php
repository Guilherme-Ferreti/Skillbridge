<?php

declare(strict_types=1);

use App\Models\Testimonial;
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
        Schema::create('testimonial_translations', function (Blueprint $table) {
            $table->id();

            $table->foreignIdFor(Testimonial::class, 'item_id')
                ->constrained('testimonials')
                ->cascadeOnDelete();

            $table->string('locale');

            $table->string('quote')->nullable();

            $table->unique(['item_id', 'locale']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('testimonial_translations');
    }
};
