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
        Schema::create('problemes_nns', function (Blueprint $table) {
            $table->id();
            $table->foreignId('accouchement_id')->constrained()->onDelete('cascade');
            $table->string('problemes_nn_conjonctivite_nn',45)->nullable();
            $table->string('problemes_nn_asphyxie_nn',45)->nullable();
            $table->string('problemes_nn_infection_majeure',45)->nullable();
            $table->string('problemes_nn_malformation_cong_visible',45)->nullable();
            $table->string('problemes_nn_autres',45)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('problemes_nns');
    }
};
