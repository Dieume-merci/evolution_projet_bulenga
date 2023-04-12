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
        Schema::create('visite_cpons', function (Blueprint $table) {
            $table->id();
            $table->foreignId('cpon_id')->constrained()->onDelete('cascade');
            $table->foreignId('mere_id')->constrained()->onDelete('cascade');
            $table->foreignId('bebe_id')->constrained()->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('visite_cpons');
    }
};
