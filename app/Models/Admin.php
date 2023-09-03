<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;

    protected $fillable = [
        'nomAdmin',
        'prenomAdmin',
        'email',
        'numero',
        'motDePasse',
    ];

    // Relation avec la table Client
    public function clients()
    {
        return $this->hasMany(Client::class, 'idA');
    }

    // Relation avec la table Fournisseur
    public function fournisseurs()
    {
        return $this->hasMany(Fournisseur::class, 'idA');
    }

    // Relation avec la table Employe
    public function employes()
    {
        return $this->hasMany(Employe::class, 'idA');
    }

}
