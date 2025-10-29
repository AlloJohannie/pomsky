<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('dog_photos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('dog_id')->constrained()->cascadeOnDelete();
            $table->string('path');
            $table->boolean('is_primary')->default(false);
            $table->unsignedSmallInteger('sort')->default(0);
            $table->timestamps();
        });
        // Optionnel: si tu veux garder Dog.photo comme cover existante
    }
    public function down(): void {
        Schema::dropIfExists('dog_photos');
    }
};