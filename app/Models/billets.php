<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class billets extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_voyageur',
        'id_voyage',
        'id_trajet',
        'montant_billet'
    ];

    public function voyageur()
    {
        return $this->belongsTo(voyageur::class, 'nom_voyageur', 'id_voyage');
    }

    public function voyage()
    {
        return $this->belongsTo(voyage::class, 'date_voyage', 'id_trajet');
    }
    public function trajet()
    {
        return $this->belongsTo(trajets::class, 'ville_arriver', 'id');
    }
}
