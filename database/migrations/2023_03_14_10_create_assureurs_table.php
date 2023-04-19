<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assureurs', function (Blueprint $table) {
            $table->id();
            $table->string("nom",45)->nullable();
            $table->string("status",45)->nullable();
            $table->string("adresse",45)->nullable();
            $table->string("phone1",45)->nullable();
            $table->string("phone2",45)->nullable();
            $table->string("email1",45)->nullable();
            $table->string("email2",45)->nullable();
            $table->string("description",45)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('assureurs');
    }
};
