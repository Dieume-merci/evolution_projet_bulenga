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
        Schema::create('meres', function (Blueprint $table) {
            $table->id();
            $table->foreignId('patient_id')->constrained()->onDelete('cascade');
            $table->foreignId('visite_cpon_id')->constrained()->onDelete('cascade');
            $table->string('mere_problemesMat',45)->nullable();
            $table->string('mere_soins_traitement',45)->nullable();
            $table->string('mere_fer_folate',45)->nullable();
            $table->string('mere_vit_a',45)->nullable();
            $table->string('mere_mild',45)->nullable();
            $table->string('mere_arv',45)->nullable();
            $table->string('mere_ctx',45)->nullable();
            $table->string('mere_conseiller_pf',45)->nullable();
            $table->string('mere_methode_pf',45)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('meres');
    }
};
