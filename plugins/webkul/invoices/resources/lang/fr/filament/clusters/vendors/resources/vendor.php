<?php

return [
    'title' => 'Fournisseurs',

    'navigation' => [
        'title' => 'Fournisseurs',
    ],

    'form' => [
        'fields' => [
            'sales-person'       => 'Commercial',
            'payment-terms'      => 'Conditions de paiement',
            'payment-method'     => 'Mode de paiement',
            'fiscal-position'    => 'Position fiscale',
            'purchase'           => 'Achats',
            'fiscal-information' => 'Informations fiscales',
        ],
        'tabs' => [
            'invoicing' => [
                'title'  => 'Facturation',
                'fields' => [
                    'customer-invoices'              => 'Factures clients',
                    'invoice-sending-method'         => 'Méthode d\'envoi des factures',
                    'invoice-edi-format-store'       => 'Format eFacture',
                    'peppol-eas'                     => 'Adresse Peppol',
                    'endpoint'                       => 'Point de terminaison',
                    'auto-post-bills'                => 'Comptabilisation auto des factures',
                    'automation'                     => 'Automatisation',
                    'ignore-abnormal-invoice-amount' => 'Ignorer les montants de facture anormaux',
                    'ignore-abnormal-invoice-date'   => 'Ignorer les dates de facture anormales',
                ],
            ],
            'internal-notes' => [
                'title' => 'Notes internes',
            ],
        ],
    ],

    'infolist' => [
        'entries' => [
            'sales-person'       => 'Commercial',
            'payment-terms'      => 'Conditions de paiement',
            'payment-method'     => 'Mode de paiement',
            'fiscal-position'    => 'Position fiscale',
            'purchase'           => 'Achats',
            'fiscal-information' => 'Informations fiscales',
        ],
        'tabs' => [
            'invoicing' => [
                'title'   => 'Facturation',
                'entries' => [
                    'customer-invoices'              => 'Factures clients',
                    'invoice-sending-method'         => 'Méthode d\'envoi des factures',
                    'invoice-edi-format-store'       => 'Format eFacture',
                    'peppol-eas'                     => 'Adresse Peppol',
                    'endpoint'                       => 'Point de terminaison',
                    'auto-post-bills'                => 'Comptabilisation auto des factures',
                    'automation'                     => 'Automatisation',
                    'ignore-abnormal-invoice-amount' => 'Ignorer les montants de facture anormaux',
                    'ignore-abnormal-invoice-date'   => 'Ignorer les dates de facture anormales',
                ],
            ],
            'internal-notes' => [
                'title' => 'Notes internes',
            ],
        ],
    ],
];
