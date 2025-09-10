<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up(): void
    {
        // Aligne l’ENUM avec les valeurs utilisées par le form
        DB::statement("
            ALTER TABLE puppies
            MODIFY status ENUM(
                'available',
                'reserved',
                'adopted',
                'hold',
                'not_available'
            ) NOT NULL DEFAULT 'available'
        ");
    }

    public function down(): void
    {
        // Reviens à un set plus restreint **si tu en avais un avant**.
        // Ajuste cette liste à ton ancien schéma si nécessaire :
        DB::statement("
            ALTER TABLE puppies
            MODIFY status ENUM(
                'available',
                'reserved'
            ) NOT NULL DEFAULT 'available'
        ");
    }
};
