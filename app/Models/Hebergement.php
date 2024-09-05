<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hebergement extends Model
{
    use HasFactory;
    protected $fillable = [
        'voyage_id', 'nom_hotel', 'emplacement', 'type_chambre', 'prix_par_nuit'
    ];

    public function voyage()
    {
        return $this->belongsTo(Voyage::class);
    }
}
