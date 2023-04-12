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
        Schema::create('ptmes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('cpn_id')->constrained()->onDelete('cascade');
            $table->string('ptme_statut_vih_avant',45)->nullable();
            $table->string('ptme_conseillee_vih',45)->nullable();
            $table->string('ptme_testees_pour_le_vih',45)->nullable();
            $table->string('ptme_resultat_vih',45)->nullable();
            $table->string('ptme_post_test',45)->nullable();
            $table->string('ptme_ctx',45)->nullable();
            $table->string('ptme_tarv',45)->nullable();
            $table->string('ptme_test_syphilis',45)->nullable();
            $table->string('ptme_resultat_test_syphilis',45)->nullable();
            $table->string('ptme_traitement_syphilis',45)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ptmes');
    }
};
