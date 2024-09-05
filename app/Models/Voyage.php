<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Voyage extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom', 'destination', 'duree', 'description'
    ];

    public function vols()
    {
        return $this->hasMany(Vols::class);
    }

    public function hebergements()
    {
        return $this->hasMany(Hebergement::class);
    }

    public function reservations()
    {
        return $this->hasMany(Reservation::class);
    }
}
