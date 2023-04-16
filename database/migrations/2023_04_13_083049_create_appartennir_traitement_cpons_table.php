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
        Schema::create('appartennir_traitement_cpons', function (Blueprint $table) {
            $table->foreignId("traitement_cpn_cpon_id")->constrained()->OnDelete("cascade");
            $table->foreignId('cpn_id')->constrained()->onDelete('cascade');
            $table->string("traitement_cpn_cpon_descrition");
            $table->dateTime("date_traitement");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('appartennir_traitement_cpons');
    }
};
