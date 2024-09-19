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
        Schema::table('materias', function (Blueprint $table) {
            // Asegúrate de que la columna no exista antes de agregarla
            if (!Schema::hasColumn('materias', 'profesor_id')) {
                $table->foreignId('profesor_id')->nullable()->constrained('profesores')->onDelete('set null');
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('materias', function (Blueprint $table) {
            // Opcionalmente, elimina la columna si necesitas revertir la migración
            if (Schema::hasColumn('materias', 'profesor_id')) {
                $table->dropForeign(['profesor_id']);
                $table->dropColumn('profesor_id');
            }
        });
    }
};
