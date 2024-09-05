<?php

namespace App\Services;

 
use Paydunya\Setup;
use Paydunya\Checkout\CheckoutInvoice;
use Paydunya\Checkout\Store;

class PayDunyaService
{
    public function createInvoice($description, $amount, $customerInfo)
    {
        // Configuration des clés API PayDunya
        Setup::setMasterKey(env('PAYDUNYA_MASTER_KEY'));
        Setup::setPrivateKey(env('PAYDUNYA_PRIVATE_KEY'));
        Setup::setPublicKey(env('PAYDUNYA_PUBLIC_KEY'));
        Setup::setToken(env('PAYDUNYA_TOKEN'));

        // Mode 'sandbox' pour les tests, 'live' pour la production
        Setup::setMode(env('PAYDUNYA_MODE'));

        // Personnaliser les informations de votre entreprise (optionnel)
        //Configuration des informations de votre service/entreprise
        Store::setName("WestSNvoyage"); // Seul le nom est requis
        Store::setTagline("rever debout");
        Store::setPhoneNumber("775446061");
        Store::setPostalAddress("Dakar Plateau - chez ndir");
      


        /**
         * Créer une facture PayDunya
         *
         * @param string $description Description de l'achat
         * @param float $amount Montant de la facture
         * @param array $customerInfo Informations du client
         * @return string|bool L'URL de la facture ou false en cas d'échec
         */


        $invoice = new CheckoutInvoice();

        // Ajouter un élément à la facture
        $invoice->addItem($description, 1, $amount, $amount);
        $invoice->setTotalAmount($amount);

        // Définir la description de la facture
        $invoice->setDescription($description);

        // Définir les informations du client
        $invoice->addCustomData('nom :', $customerInfo['name']);
        $invoice->addCustomData('email :', $customerInfo['email']);
        $invoice->addCustomData('telephone :', $customerInfo['phone']);

        // Créer la facture et obtenir l'URL de paiement
        if ($invoice->create()) {
            return $invoice->getInvoiceUrl();
        } else {
            return false;
        }
    }



    /**
     * Confirmer le paiement d'une facture PayDunya
     *
     * @param string $token Le token de la facture
     * @return string|bool Le statut du paiement ou false en cas d'échec
     */
    public function confirmPayment($token)
    {
        $invoice = new CheckoutInvoice();

        // Confirmer le paiement
        if ($invoice->confirm($token)) {
            return $invoice->getStatus(); // Statut du paiement
        } else {
            return false; // Retourner false en cas d'échec
        }
    }
}
