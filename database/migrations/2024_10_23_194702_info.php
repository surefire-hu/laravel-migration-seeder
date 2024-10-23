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
        Schema::table('trains', function (Blueprint $table) {
            $table->string('azienda', 50)->change();
            $table->string('stazione_partenza', 100)->change();
            $table->string('stazione_arrivo', 100)->change();
            $table->string('codice_treno', 20)->change();
            $table->tinyInteger('numero_carrozze')->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('trains', function (Blueprint $table) {
            $table->string('azienda')->change();
            $table->string('stazione_partenza')->change();
            $table->string('stazione_arrivo')->change();
            $table->string('codice_treno')->change();
            $table->integer('numero_carrozze')->change();
        });
    }
};