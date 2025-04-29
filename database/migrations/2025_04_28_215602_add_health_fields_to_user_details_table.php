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
        Schema::table('user_details', function (Blueprint $table) {
            // Campos para estadísticas
            $table->integer('ejercicios')->default(0);
            $table->integer('kcal')->default(0);
            $table->integer('minutos')->default(0);
            
            // Campos para seguimiento de peso
            $table->decimal('peso_meta', 5, 2)->nullable();
            $table->decimal('peso_inicial', 5, 2)->nullable();
            
            // Asegurarnos de que el campo user_id existe y es foráneo
            if (!Schema::hasColumn('user_details', 'user_id')) {
                $table->foreignId('user_id')->constrained()->onDelete('cascade');
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('user_details', function (Blueprint $table) {
            $table->dropColumn([
                'ejercicios',
                'kcal',
                'minutos',
                'peso_meta',
                'peso_inicial'
            ]);
        });
    }
};
