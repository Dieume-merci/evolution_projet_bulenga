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
        Schema::create('visite_cpns', function (Blueprint $table) {
            $table->id();
            $table->foreignId('cpn_id')->constrained()->onDelete('cascade');
            $table->string('visite_cpn_designation',45)->nullable();
            $table->string('visite_cpn_obs',45)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('visite_cpns');
    }
};
