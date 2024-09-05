<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vols extends Model
{
    use HasFactory;
    protected $fillable = [
        'voyage_id', 'compagnie_aerienne', 'aeroport_depart', 'aeroport_destination', 'heure_depart', 'heure_arrivee', 'prix'
    ];

    public function voyage()
    {
        return $this->belongsTo(Voyage::class);
    }
}
