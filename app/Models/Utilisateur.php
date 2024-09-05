<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Utilisateur extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom', 'adresse_email', 'mot_de_passe'
    ];

    public function reservations()
    {
        return $this->hasMany(Reservation::class);
    }
}
