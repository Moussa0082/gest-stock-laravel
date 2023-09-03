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
        Schema::create('produit', function (Blueprint $table) {
            $table->id('idP');
            $table->integer('prixP');
            $table->string('nomP');
            $table->integer('qte');
            $table->string('description');
            $table->date('dateCreation');
            $table->timestamps();
            
            // Définir la relation avec la table "fournisseurs"
            $table->unsignedBigInteger('idFrs'); // Clé étrangère vers la table "fournisseurs"
            $table->foreign('idFrs')->references('idFrs')->on('fournisseur');

            $table->unsignedBigInteger('idCat'); // Clé étrangère vers la table "categorie"
            $table->foreign('idCat')->references('idCat')->on('categorie');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produit');
    }
};
