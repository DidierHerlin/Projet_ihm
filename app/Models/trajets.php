<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class trajets extends Model
{
    use HasFactory;
    protected $fillable = [
        'ville_depart',
        'ville_arriver',
        'distance',
        'montant_trajet'
    ];
}
