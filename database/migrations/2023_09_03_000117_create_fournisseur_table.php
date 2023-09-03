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
        Schema::create('fournisseur', function (Blueprint $table) {
            $table->id('idFrs');
            $table->string('nomFrs');
            $table->string('prenomFrs');
            $table->string('sexeFrs');
            $table->string('numeroFrs');
            $table->string('adresseFrs');
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
        Schema::dropIfExists('fournisseur');
    }
};
