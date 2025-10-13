<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('templates', function (Blueprint $table) {
            $table->id();
            $table->foreignId('attribute_id')->nullable()->constrained('attributes')->nullOnDelete();
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('template_translations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('template_id')->constrained('templates')->cascadeOnDelete();
            $table->string('locale', 10)->index();
            $table->string('title');
            $table->text('content')->nullable();
            $table->timestamps();

            $table->unique(['template_id', 'locale']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('template_translations');
        Schema::dropIfExists('templates');
    }
};
