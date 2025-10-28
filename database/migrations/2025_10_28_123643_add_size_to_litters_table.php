<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::table('litters', function (Blueprint $table) {
            $table->string('size', 20)->nullable()->after('status'); // 'standard' | 'miniature' | 'toy'
        });
    }

    public function down(): void
    {
        Schema::table('litters', function (Blueprint $table) {
            $table->dropColumn('size');
        });
    }
};
