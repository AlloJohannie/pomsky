<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('puppies', function (Blueprint $table) {
            $table->id();
            $table->foreignId('litter_id')->constrained()->cascadeOnDelete();
            $table->string('name')->nullable();
            $table->enum('sex', ['female','male'])->nullable();
            $table->string('color')->nullable();
            $table->integer('price_cents')->nullable();  // 250000 = 2500.00$
            $table->enum('status', ['available','reserved','sold'])->default('available');
            $table->string('photo')->nullable();        // storage path
            $table->text('description')->nullable();
            $table->date('born_at')->nullable();
            $table->string('slug')->unique();
            $table->unsignedInteger('sort')->default(0);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('puppies');
    }
};
