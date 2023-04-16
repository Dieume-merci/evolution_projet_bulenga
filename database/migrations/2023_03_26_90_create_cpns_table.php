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
        Schema::create('cpns', function (Blueprint $table) {
            $table->id();
            $table->foreignId('patient_id')->constrained()->onDelete('cascade');
            $table->foreignId('depistage_vih_homme_id')->constrained()->onDelete('cascade');
            $table->string('cpn_mebendazole',45)->nullable();
            $table->string('cpn_femme_en_cas_risque_detecte',45)->nullable();
            $table->string('cpn_femme_en_cas_de_risque_refere',45)->nullable();
            $table->string('cpn_Const_Probl_Obs',45)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cpns');
    }
};
