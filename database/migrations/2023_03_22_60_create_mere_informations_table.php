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
        Schema::create('mere_informations', function (Blueprint $table) {
            $table->foreignId('accouchement_id')->constrained()->onDelete('cascade')->unique();
            $table->string('problemesMat',45)->nullable();
            $table->string('soins_traitement',45)->nullable();
            $table->string('fer_folate',45)->nullable();
            $table->string('vit_a',45)->nullable();
            $table->string('mild',45)->nullable();
            $table->string('arv',45)->nullable();
            $table->string('ctx',45)->nullable();
            $table->string('conseiller_pf',45)->nullable();
            $table->string('methode_pf',45)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mere_informations');
    }
};
