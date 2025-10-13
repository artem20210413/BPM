<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('units', function (Blueprint $table) {
            $table->id();
            $table->string('slug', 191)->unique();
            $table->integer('priority')->default(0);
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('unit_translations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('unit_id')->constrained('units')->cascadeOnDelete();
            $table->string('locale', 10)->index();
            $table->string('title');
            $table->text('content')->nullable();
            $table->timestamps();

            $table->unique(['unit_id', 'locale']);
        });


    }

    public function down(): void
    {
        Schema::dropIfExists('unit_translations');
        Schema::dropIfExists('units');
    }
};
