<?php

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
        Schema::create('dogs', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->enum('sex', ['male','female']);
            $table->date('dob')->nullable();
            $table->string('color')->nullable();
            $table->decimal('weight_kg', 5, 2)->nullable();
            $table->string('photo')->nullable(); // chemin storage/app/public/...
            $table->text('description')->nullable();
            $table->boolean('is_active')->default(true); // retiré ou non
            $table->string('slug')->unique();
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dogs');
    }
};
