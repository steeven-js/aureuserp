<?php

return [
    'title' => 'Paiement',

    'navigation' => [
        'title' => 'Paiements',
        'group' => 'Factures',
    ],

    'form' => [
        'sections' => [
            'fields' => [
                'payment-type'          => 'Type de paiement',
                'memo'                  => 'Mémo',
                'date'                  => 'Date',
                'amount'                => 'Montant',
                'payment-method'        => 'Mode de paiement',
                'customer'              => 'Client',
                'journal'               => 'Journal',
                'customer-bank-account' => 'Compte bancaire du client',
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'name'                             => 'Nom',
            'company'                          => 'Société',
            'bank-account-holder'              => 'Titulaire du compte bancaire',
            'paired-internal-transfer-payment' => 'Paiement de transfert interne associé',
            'payment-method-line'              => 'Ligne de mode de paiement',
            'payment-method'                   => 'Mode de paiement',
            'currency'                         => 'Devise',
            'partner'                          => 'Partenaire',
            'outstanding-amount'               => 'Montant en suspens',
            'destination-account'              => 'Compte de destination',
            'created-by'                       => 'Créé par',
            'payment-transaction'              => 'Transaction de paiement',
        ],

        'groups' => [
            'name'                             => 'Nom',
            'company'                          => 'Société',
            'partner'                          => 'Partenaire',
            'payment-method-line'              => 'Ligne de mode de paiement',
            'payment-method'                   => 'Mode de paiement',
            'partner-bank-account'             => 'Compte bancaire du partenaire',
            'paired-internal-transfer-payment' => 'Paiement de transfert interne associé',
            'created-at'                       => 'Créé le',
            'updated-at'                       => 'Modifié le',
        ],

        'filters' => [
            'company'                          => 'Société',
            'customer-bank-account'            => 'Compte bancaire du client',
            'paired-internal-transfer-payment' => 'Paiement de transfert interne associé',
            'payment-method'                   => 'Mode de paiement',
            'currency'                         => 'Devise',
            'partner'                          => 'Partenaire',
            'payment-method-line'              => 'Ligne de mode de paiement',
            'created-at'                       => 'Créé le',
            'updated-at'                       => 'Modifié le',
        ],

        'actions' => [
            'delete' => [
                'notification' => [
                    'title' => 'Paiement supprimé',
                    'body'  => 'Le paiement a été supprimé avec succès.',
                ],
            ],
        ],

        'bulk-actions' => [
            'delete' => [
                'notification' => [
                    'title' => 'Paiements supprimés',
                    'body'  => 'Les paiements ont été supprimés avec succès.',
                ],
            ],
        ],
    ],

    'infolist' => [
        'sections' => [
            'payment-information' => [
                'title'   => 'Informations de paiement',
                'entries' => [
                    'state'                 => 'État',
                    'payment-type'          => 'Type de paiement',
                    'journal'               => 'Journal',
                    'customer-bank-account' => 'Compte bancaire du client',
                    'customer'              => 'Client',
                ],
            ],

            'payment-details' => [
                'title'   => 'Détails du paiement',
                'entries' => [
                    'amount' => 'Montant',
                    'date'   => 'Date',
                    'memo'   => 'Mémo',
                ],
            ],

            'payment-method' => [
                'title'   => 'Mode de paiement',
                'entries' => [
                    'payment-method' => 'Mode de paiement',
                ],
            ],
        ],
    ],

    'presets' => [
        'customer_payments' => 'Paiements clients',
        'vendor_payments'   => 'Paiements fournisseurs',
        'draft'             => 'Brouillon',
        'in_process'        => 'En cours',
        'sent'              => 'Envoyé',
        'not_sent'          => 'Non envoyé',
        'no_bank_matching'  => 'Aucune correspondance bancaire',
        'reconciled'        => 'Rapproché',
    ],

];
