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
        Schema::create('complications', function (Blueprint $table) {
            $table->id();
            $table->foreignId('accouchement_id')->constrained()->onDelete('cascade');
            $table->string('complication_designation',45)->nullable();
            $table->string('complication_complications_obstetricales',45)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('complications');
    }
};
