<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employer extends Model
{
    use HasFactory;

    protected $fillable = [
     'idEmp',
     'nomEmp',
     'prenomEmp',
     'email',
     'email',
     'numero',
     'adresseEmp',
     'motDePasse',
     'idEmp',
     'idA',

    ]; // Ajoutez vos colonnes ici

    // Relation "hasMany" vers Employer
    public function employers()
    {
        return $this->hasMany(Employer::class, 'idEmp');
    }
    // Relation "hasMany" vers Employer
    public function admin()
    {
        return $this->hasMany(Employer::class, 'idA');
    }
}



