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
        Schema::create('employer', function (Blueprint $table) {
            $table->id('idEmp');
            $table->string('nomEmp');
            $table->string('prenomEmp');
            $table->string('email');
            $table->string('numero');
            $table->string('adresseEmp');
            $table->string('motDePasse');
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
        Schema::dropIfExists('employer');
    }
};
