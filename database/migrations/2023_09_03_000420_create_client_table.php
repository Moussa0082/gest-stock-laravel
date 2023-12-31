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
        Schema::create('client', function (Blueprint $table) {
            $table->id('idClient');
            $table->string('nomClient');
            $table->string('prenomClient');
            $table->string('sexeClient');
            $table->string('numeroClient');
            $table->string('adresseClient');
            $table->unsignedBigInteger('idA'); // Clé étrangère vers la table "admins"
           
            $table->timestamps();

          // Définir la relation avec la table "admins"
          $table->foreign('idA')->references('idA')->on('admin');


        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('client');
    }
};
