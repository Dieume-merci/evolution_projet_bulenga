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
        Schema::create('bebes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('attestation_id')->constrained()->onDelete('cascade');
            $table->string('bebe_complicationsAlaNaiss',45)->nullable();
            $table->string('bebe_prc',45)->nullable();
            $table->string('bebe_arv',45)->nullable();
            $table->string('bebe_ctx',45)->nullable();
            $table->string('bebe_probleme_constate',45)->nullable();
            $table->string('bebe_soins_traitement',45)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bebes');
    }
};
