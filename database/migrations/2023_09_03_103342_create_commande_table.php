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
        Schema::create('commande', function (Blueprint $table) {
            $table->id('idAchat');
            $table->date('dateAchat');
            $table->unsignedBigInteger('idClient'); // Clé étrangère vers la table "client"
            $table->unsignedBigInteger('idEmp'); // Clé étrangère vers la table "employer"
            $table->unsignedBigInteger('idP'); // Clé étrangère vers la table "produit"
            
            $table->timestamps();
            
            // Clé étrangère vers la table client
            $table->foreign('idClient')->references('idClient')->on('client');
            
            // Clé étrangère vers la table employe
            $table->foreign('idEmp')->references('idEmp')->on('employer');
            
            // Clé étrangère vers la table produit
                  $table->foreign('idP')->references('idP')->on('produit');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('commande');
    }
};
