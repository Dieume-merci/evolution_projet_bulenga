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
        Schema::create('risques', function (Blueprint $table) {
            $table->id();
            $table->foreignId('visite_cpn_id')->constrained()->onDelete('cascade');
            $table->string('risque_referer',45)->nullable();
            $table->string('risque_detecter',45)->nullable();
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('risques');
    }
};