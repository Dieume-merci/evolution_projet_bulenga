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
        Schema::create('maternites', function (Blueprint $table) {
            $table->id();
            $table->string('maternite_grossesse_a_terme',45)->nullable();
            $table->string('maternite_date_entree_terme',45)->nullable();
            $table->string('maternite_statut_serologique_vih_terme',45)->nullable();
            $table->string('maternite_date_sortie_terme',45)->nullable();
            $table->string('maternite_obs_terme',45)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('maternites');
    }
};
