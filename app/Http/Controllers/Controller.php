<?php

namespace App\Http\Controllers;

use App\Models\Vols;
use App\Models\Voyage;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function ListeVoyage()
    {
        // Récupère tous les voyages depuis la base de données
        $voyages = Voyage::all();

        // Retourne la vue correspondante avec les données des voyages
        return view('voyages.liste', compact('voyages'));
    }

    public function ListeVols()
    {
        // Récupère tous les vols depuis la base de données
        $vols = Vols::all();

        // Retourne la vue correspondante avec les données des vols
        return view('frontEnd.index', compact('vols'));
    }

    public function rechercheVols(Request $request)
    {
        $request->validate([
            'from' => 'required|string',
            'to' => 'required|string',
        ]);

        $vols = Vols::where('aeroport_depart', 'like', '%' . $request->from . '%')
                    ->orWhere('aeroport_destination', 'like', '%' . $request->to . '%')
                    ->get();

        return view('frontEnd.indexRecherche', compact('vols'));
    }

    public function reserver($id)
    {
        $vol = Vols::findOrFail($id);
        return view('frontEnd.reservation', compact('vol'));
    }
}
