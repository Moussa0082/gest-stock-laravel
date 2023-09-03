<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fournisseur extends Model
{
    use HasFactory;

    protected $fillable = [
        'nomFrs',
        'prenomFrs',
        'sexeFrs',
        'numeroFrs',
        'adresseFrs',
        'idA',
        'idP',
    ];

    // Relation avec la table Admin
    public function admin()
    {
        return $this->belongsTo(Admin::class, 'idA');
    }

    // Relation avec la table Produit
    public function produits()
    {
        return $this->hasMany(Produit::class, 'idP');
    }
    
}
