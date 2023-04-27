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
        Schema::create('Statut_enfants', function (Blueprint $table) {
            $table->id();
            $table->foreignId('bebe_id')->constrained()->onDelete('cascade');
            $table->string('designation',255)->nullable();
            $table->string('statut',50);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Statut_enfants');
    }
};
