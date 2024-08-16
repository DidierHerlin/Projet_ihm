<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class recettes extends Model
{
    use HasFactory;
    protected $fillable = [
        'date_recette',
        'montant_recette',
        'conducteur_id',
        'vehicule_id'
    ];

    public function conducteur()
    {
        return $this->belongsTo(Conducteur::class);
    }

    public function vehicule()
    {
        return $this->belongsTo(Vehicule::class);
    }


}
