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
        Schema::create('litters', function (Blueprint $table) {
            $table->id();
            $table->string('code')->unique(); // ex: P2025-01
            $table->date('born_at')->nullable();
            $table->date('ready_at')->nullable();
            $table->foreignId('sire_id')->constrained('dogs'); // père
            $table->foreignId('dam_id')->constrained('dogs');  // mère
            $table->unsignedTinyInteger('puppies_count')->nullable();
            $table->enum('status', ['planned','pregnant','born','available','reserved','closed'])->default('planned');
            $table->text('description')->nullable();
            $table->string('slug')->unique();
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('litters');
    }
};
