<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('attributes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('unit_id')->nullable()->constrained('units')->nullOnDelete();
//            $table->string('code', 64)->unique();
            $table->integer('priority')->default(0);
            $table->enum('type', ['int', 'float', 'string', 'bool', 'datetime'])->default('string');
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('attribute_translations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('attribute_id')->constrained('attributes')->cascadeOnDelete();
            $table->string('locale', 10)->index();
            $table->string('title');
            $table->text('content')->nullable();
            $table->timestamps();

            $table->unique(['attribute_id', 'locale']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('attribute_translations');
        Schema::dropIfExists('attributes');
    }
};
