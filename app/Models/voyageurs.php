<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class voyageurs extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom_voyageur',
        'tel_voyageur',
        'adresse_voyageur'
        
    ];
}
