<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class voyage extends Model
{
    use HasFactory;
    protected $fillable = [
        'date_voyage',
        'nombre_voageur',
        'id_conducteur',
        'id_vehicule',
        'id_trajet',

    ];

    public function conducteur()
    {
        return $this->belongsTo(conducteurs::class);
    }

    public function vehicule()
    {
        return $this->belongsTo(vehicules::class);
    }
    public function trajet()
    {
        return $this->belongsTo(trajets::class);
    }

}
