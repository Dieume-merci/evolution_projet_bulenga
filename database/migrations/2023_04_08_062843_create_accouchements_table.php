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
        Schema::create('accouchements', function (Blueprint $table) {
            $table->id();
            $table->foreignId('maternite_id')->constrained()->onDelete('cascade');
            $table->foreignId('type_accouchement_id')->constrained()->onDelete('cascade');
            $table->string('accouchement_lieu_accouchement',45)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('accouchements');
    }
};
