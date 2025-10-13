<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('product_attribute_values', function (Blueprint $table) {
            $table->id();
            $table->foreignId('product_id')->constrained('products')->cascadeOnDelete();
            $table->foreignId('attribute_id')->constrained('attributes')->cascadeOnDelete();
            $table->float('float')->nullable();
            $table->integer('int')->nullable();
            $table->boolean('bool')->nullable();
            $table->dateTime('data_time')->nullable();
            $table->foreignId('template_id')->nullable()->constrained('templates')->nullOnDelete();
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('value_translations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('value_id')->constrained('product_attribute_values')->cascadeOnDelete();
            $table->string('locale', 10)->index();
            $table->string('title')->nullable();
            $table->text('content')->nullable();
            $table->timestamps();

            $table->unique(['value_id', 'locale']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('value_translations');
        Schema::dropIfExists('product_attribute_values');
    }
};
