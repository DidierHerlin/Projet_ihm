<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class depenses extends Model
{
    use HasFactory;
    protected $fillable = [
        'date_depense',
        'id_conducteur',
        'id_vehicule',
        'type_depense',
        'montant_depense'
    ];

    public function conducteur()
    {
        return $this->belongsTo(conducteurs::class);
    }

    public function vehicule()
    {
        return $this->belongsTo(vehicules::class);
    }
}
