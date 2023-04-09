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
        Schema::create('mort_nes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('accouchement_id')->constrained()->onDelete('cascade');
            $table->string('mort_ne_designation',45)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mort_nes');
    }
};
