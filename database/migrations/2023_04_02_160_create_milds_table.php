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
        Schema::create('milds', function (Blueprint $table) {
            $table->id();
            $table->foreignId('visite_cpn_id')->constrained()->onDelete('cascade');
            $table->string('mild_dist_cpn1',45)->nullable();
            $table->string('mild_dist_cpn2',45)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('milds');
    }
};
