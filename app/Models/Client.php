<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $fillable = [
        'nomClient',
        'prenomClient',
        'sexeClient',
        'numeroClient',
        'adresseClient',
        'idA',
    ];

    // Relation avec la table Admin
    public function admin()
    {
        return $this->belongsTo(Admin::class, 'idA');
    }

    // Relation avec la table Commande
    public function commandes()
    {
        return $this->hasMany(Commande::class, 'idC');
    }
}
