<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservation;
use App\Models\Vols;
use App\Services\PayDunyaService;


class ReserverController extends Controller
{
    protected $paydunya;

    public function __construct(PayDunyaService $paydunya)
    {
        $this->paydunya = $paydunya;
    }

    public function valider(Request $request)
    {
      

        // Validation des données de la réservation
        $request->validate([
            'vol_id' => 'required|exists:vols,id',
            'nom' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'telephone' => 'required|string|max:20',
        ]);

        // Créer la réservation dans la base de données
        $reservation = Reservation::create([
            'vol_id' => $request->vol_id,
            'nom' => $request->nom,
            'email' => $request->email,
            'telephone' => $request->telephone,
        ]);

        // Récupérer les informations du vol associé
        $vol = Vols::find($request->vol_id);

        // Générer la facture PayDunya
        $customerInfo = [
            'name' => $reservation->nom,
            'email' => $reservation->email,
            'phone' => $reservation->telephone,
        ];

        $description = "Paiement pour la réservation du vol " . $vol->compagnie_aerienne . " de " . $vol->aeroport_depart . " à " . $vol->aeroport_destination;

        $invoiceUrl = $this->paydunya->createInvoice($description, $vol->prix, $customerInfo);
        
        
        if ($invoiceUrl) {
            // Rediriger vers la page de paiement PayDunya
            return redirect($invoiceUrl);
        } else {
            return redirect()->back()->withErrors('Erreur lors de l\'initialisation du paiement.');
        }
    }


    public function confirmPayment(Request $request)
    {
        $token = $request->input('token');

        // Confirmer le paiement via le service PayDunya
        $status = $this->paydunya->confirmPayment($token);

        if ($status == 'completed') {
            // Mettre à jour l'état de la réservation comme payée
            // Logique pour trouver la réservation et la mettre à jour
            return response()->json(['message' => 'Paiement confirmé et réservation mise à jour.']);
        } else {
            return response()->json(['message' => 'Paiement non confirmé ou échoué.'], 400);
        }
    }
}
