<?php

return [
    'table' => [
        'columns' => [
            'reference'         => 'Référence',
            'total-amount'      => 'Montant total',
            'confirmation-date' => 'Date de confirmation',
            'status'            => 'Statut',
        ],
    ],

    'infolist' => [
        'settings' => [
            'entries' => [
                'buyer' => 'Acheteur',
            ],

            'actions' => [
                'accept' => [
                    'label' => 'Accepter',

                    'notification' => [
                        'title' => 'Devis accepté',
                        'body'  => 'La demande de devis a été acceptée avec succès.',
                    ],

                    'message' => [
                        'body' => 'La demande de devis a été acceptée par le fournisseur.',
                    ],
                ],

                'decline' => [
                    'label' => 'Refuser',

                    'notification' => [
                        'title' => 'Devis refusé',
                        'body'  => 'La demande de devis a été refusée avec succès.',
                    ],

                    'message' => [
                        'body' => 'La demande de devis a été refusée par le fournisseur.',
                    ],
                ],

                'print' => [
                    'label' => 'Télécharger/Imprimer',
                ],
            ],
        ],

        'general' => [
            'entries' => [
                'purchase-order'        => 'Bon de commande #:id',
                'quotation'             => 'Demande de devis #:id',
                'order-date'            => 'Date de commande',
                'from'                  => 'De',
                'confirmation-date'     => 'Date de confirmation',
                'receipt-date'          => 'Date de réception',
                'products'              => 'Produits',
                'untaxed-amount'        => 'Montant HT',
                'tax-amount'            => 'Montant des taxes',
                'total'                 => 'Total',
                'communication-history' => 'Historique des communications',
            ],
        ],
    ],
];
