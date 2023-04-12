<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('attestations', function (Blueprint $table) {
            $table->id();
            $table->string('nompere');
            $table->string('postnom_pere');
            $table->string('prenom_pere');
            $table->string('adresse_pere');
            $table->string('nationalite_pere');
            $table->string('lieudenassance_pere');
            $table->date('datenaissance_pere');
            $table->string('telephone_pere');
            $table->string('nom_enfant');
            $table->string('postnom_enfant');
            $table->string('prenom_enfant')->nullable();
            $table->string('genre');
            $table->string('lieu_de_naissance');
            $table->string('date_de_naissance');
            // $table->foreignId('patient_id')->constrained()->onDelete('cascade');
            // $table->foreignId('user_id')->constrained()->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('attestations');
    }
};
