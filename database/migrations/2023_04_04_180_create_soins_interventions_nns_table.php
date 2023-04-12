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
        Schema::create('soins_interventions_nns', function (Blueprint $table) {
            $table->id();
            $table->foreignId('accouchement_id')->constrained()->onDelete('cascade');
            $table->string('complication_designation',45)->nullable();
            $table->string('soins_interventions_nn_nn_soins_essentiels',45)->nullable();
            $table->string('soins_interventions_nn_nn_allaites_dans_heure',45)->nullable();
            $table->string('soins_interventions_nn_ayant_recu_at_ben_iv_im',45)->nullable();
            $table->string('soins_interventions_nn_nn_methode_Kangourou',45)->nullable();
            $table->string('soins_interventions_nn_nn_prematures',45)->nullable();
            $table->string('soins_interventions_nn_nn_beneficiant_reanimation',45)->nullable();
            $table->string('soins_interventions_nn_nvp_au_nn',45)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('soins_interventions_nns');
    }
};
