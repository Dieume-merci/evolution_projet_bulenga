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
        Schema::create('depistage_vih_hommes', function (Blueprint $table) {
            $table->id();
            $table->string('depistage_vih_hommes_Groupe_Age_Homme',45)->nullable();
            $table->string('depistage_vih_hommes_Conseillee_VIH',45)->nullable();
            $table->string('depistage_vih_hommes_Testees_Pour_VIH',45)->nullable();
            $table->string('depistage_vih_hommes_Resultat_Test',45)->nullable();
            $table->string('depistage_vih_hommes_Post_Test',45)->nullable();
            $table->dateTime('date');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('depistage_vih_hommes');
    }
};
