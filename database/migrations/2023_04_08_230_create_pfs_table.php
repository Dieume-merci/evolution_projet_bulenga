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
        Schema::create('pfs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('patient_id')->constrained()->onDelete('cascade');
            $table->foreignId('methode_id')->constrained()->onDelete('cascade');
            $table->string('pf_obs',45)->nullable();
            $table->string('pf_infecondite',45)->nullable();
            $table->string('pf_ist',45)->nullable();
            $table->string('pf_statut_serologique_vih',45)->nullable();
            $table->dateTie('pf_date')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pfs');
    }
};
