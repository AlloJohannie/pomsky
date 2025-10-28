<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up(): void
    {
        // 1) Ajouter la colonne weight_lb si elle n'existe pas déjà
        if (! Schema::hasColumn('dogs', 'weight_lb')) {
            Schema::table('dogs', function (Blueprint $table) {
                // même précision que weight_kg (5,2), après 'color' pour rester cohérent
                $table->decimal('weight_lb', 5, 2)->nullable()->after('color');
            });
        }

        // 2) Backfill: copier les valeurs existantes telles quelles (sans conversion)
        //    Si tu veux convertir kg -> lb: remplace par ROUND(weight_kg * 2.20462, 2)
        DB::statement('UPDATE dogs SET weight_lb = weight_kg WHERE weight_kg IS NOT NULL');
    }

    public function down(): void
    {
        // Retirer la colonne weight_lb
        if (Schema::hasColumn('dogs', 'weight_lb')) {
            Schema::table('dogs', function (Blueprint $table) {
                $table->dropColumn('weight_lb');
            });
        }
    }
};
