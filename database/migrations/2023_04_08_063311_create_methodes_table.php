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
        Schema::create('methodes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('pf_id')->constrained()->onDelete('cascade');
            $table->string('methode_designation',45)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('methodes');
    }
};
