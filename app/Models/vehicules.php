<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class vehicules extends Model
{
    use HasFactory;
    protected $fillable = [
        'immatricule',
        'marque',
        'modele',
        'nbr_place'
    ];

    public function recettes()
    {
        return $this->hasMany(Recette::class);
    }
}
