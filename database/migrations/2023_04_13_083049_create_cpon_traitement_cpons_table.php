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
        Schema::create('cpon_traitement_cpons', function (Blueprint $table) {
            $table->foreignId('cpon_id')->constrained()->onDelete('cascade');
            $table->foreignId("traitement_cpon_id")->constrained()->OnDelete("cascade");
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
