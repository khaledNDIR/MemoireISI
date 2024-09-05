<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;
    // protected $fillable = [
    //     'voyage_id', 'utilisateur_id'
    // ];

    protected $fillable = [
        'vol_id',
        'nom',
        'email',
        'telephone',
    ];

    public function voyage()
    {
        return $this->belongsTo(Voyage::class);
    }

    public function utilisateur()
    {
        return $this->belongsTo(Utilisateur::class);
    }
}
