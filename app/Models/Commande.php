<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commande extends Model
{
    use HasFactory;

    
    protected $fillable = [
        'idAchat',
        'dateAchat',
        'idClient',
        'idP',
        'idEmp',
    ];

    
    // Relation "belongsTo" vers Client
    public function client()
    {
        return $this->hasMany(Client::class, 'idClient');
    }
    
    // Relation "belongsTo" vers Employer
    public function employer()
    {
        return $this->hasMany(Employer::class, 'idEmp');
    }
    
    // Relation "belongsTo" vers Produit
    public function produit()
    {
        return $this->hasMany(Produit::class, 'idP');
    }


}
