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
        Schema::create('traitement_cpon_cpons', function (Blueprint $table) {
            $table->foreignId("traitement_cpon_id")->constrained()->OnDelete("cascade");
            $table->foreignId('cpon_id')->constrained()->onDelete('cascade');
            $table->string("traitement_cpon_description");
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
        Schema::dropIfExists('traitement_cpon_cpons');
    }
};
