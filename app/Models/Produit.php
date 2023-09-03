<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
    use HasFactory;
    protected $fillable = ['nomP', 'prixP', 'qte', 'description', 'dateCreation', 'idCat', 'idFrs'];

    public function categorie()
    {
        return $this->belongsTo(Categorie::class, 'idCat');
    }

    // Relation avec la table Fournisseur
    public function fournisseur()
    {
        return $this->belongsTo(Fournisseur::class, 'idFrs');
    }
}
