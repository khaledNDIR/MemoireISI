<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use App\Services\PayDunyaService;
use Illuminate\Http\Request;

class PaiementController extends Controller
{
    protected $paydunya;

    public function __construct(PayDunyaService $paydunya)
    {
        $this->paydunya = $paydunya;
    }

    public function initierPaiement($reservation_id)
    {
        $reservation = Reservation::findOrFail($reservation_id);

        $customerInfo = [
            'name' => $reservation->nom,
            'email' => $reservation->email,
            'phone' => $reservation->telephone,
        ];

        $description = "Paiement pour la réservation du vol " . $reservation->vol_id;

        $invoiceUrl = $this->paydunya->createInvoice($description, $reservation->vol->prix, $customerInfo);

        if ($invoiceUrl) {
            return redirect($invoiceUrl);
        } else {
            return redirect()->back()->withErrors('Erreur lors de l\'initialisation du paiement.');
        }
    }

    public function confirmation(Request $request)
{
    $status = $this->paydunya->confirmPayment($request->token);

    if ($status === "completed") {
        // Mettre à jour le statut de la réservation
        // ...
        return redirect()->route('home')->with('success', 'Paiement réussi!');
    } else {
        return redirect()->route('home')->with('error', 'Paiement non validé.');
    }
}

}
