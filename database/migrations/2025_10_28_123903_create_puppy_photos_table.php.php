<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('puppy_photos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('puppy_id')->constrained()->cascadeOnDelete();
            $table->string('path');                 // storage path (public disk)
            $table->date('taken_at')->nullable();   // date de prise de vue
            $table->unsignedTinyInteger('week')->nullable(); // 0..12 (0 = naissance)
            $table->boolean('is_primary')->default(false);   // pour marquer une “cover”
            $table->integer('sort')->default(0);    // ordre manuel
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('puppy_photos');
    }
};
