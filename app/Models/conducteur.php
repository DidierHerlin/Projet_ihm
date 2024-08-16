<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class conducteur extends Model
{
    use HasFactory;
    protected $fillable = [
        'cin',
        'nom_conducteur',
        'telephone',
        'adresse'
    ];

    public function recettes()
    {
        return $this->hasMany(Recette::class);
    }
}
