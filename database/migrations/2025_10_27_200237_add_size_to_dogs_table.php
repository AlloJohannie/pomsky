<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void {
        Schema::table('dogs', function (Blueprint $table) {
            $table->string('size', 20)->nullable()->after('sex'); // 'standard' | 'miniature' | 'toy'
        });
    }
    public function down(): void {
        Schema::table('dogs', function (Blueprint $table) {
            $table->dropColumn('size');
        });
    }
};
