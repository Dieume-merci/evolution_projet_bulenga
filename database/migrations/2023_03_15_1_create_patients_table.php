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
        Schema::create('patients', function (Blueprint $table) {
            $table->id();
            $table->string('code')->unique();
            $table->string('nom',50);
            $table->string('postnom',50);
            $table->string('prenom',50)->nullable();
            $table->string('sexe',1);
            $table->date('date_of_birth');
            $table->string('phone',15)->nullable();
            $table->string('email',50)->nullable();
            $table->string('adresse',50);
            $table->string('photo')->default('/assets/img/profile-img.jpg');
            $table->string('mode',10);
            $table->string('groupe_sanguin',4)->nullable();
            $table->string('facteur_rh')->nullable();
            // $table->foreignId('typeid_id')->nullable()->constrained()->onDelete();
            $table->string('num_id')->nullable();
            $table->foreignId('typepatient_id')->constrained()->onDelete("cascade");
            $table->foreignId('assureur_id')->constrained()->onDelete("cascade");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('patients');
    }
};
