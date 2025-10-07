<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('units', function (Blueprint $table) {
            $table->id();
            $table->string('slug', 191)->unique();
            $table->integer('priority')->default(0);
            $table->timestamps();
        });
        Schema::create('unit_translations', function (Blueprint $table) {
            $table->increments('id');
            $table->foreignId('unit_id')->constrained('units')->cascadeOnDelete();
            $table->string('locale')->index();
            $table->string('title');
            $table->text('content')->nullable();

            $table->unique(['unit_id', 'locale']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('unit_translations');
        Schema::dropIfExists('units');
    }
};
