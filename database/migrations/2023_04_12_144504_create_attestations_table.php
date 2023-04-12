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
            $table->string('postnompere');
            $table->string('prenompere');
            $table->string('adressepere');
            $table->string('nationalitepere');
            $table->string('lieudenassancepere');
            $table->date('datenaissancepere');
            $table->string('telephonepere');
            $table->string('nomenfant');
            $table->string('postnomenfant');
            $table->string('prenomenfant')->nullable();
            $table->string('genre');
            // $table->string('lieudenaissance');
            // $table->string('datedenaissance');
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
