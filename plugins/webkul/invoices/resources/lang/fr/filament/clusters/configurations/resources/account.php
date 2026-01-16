<?php

return [
    'title' => 'Comptes',

    'navigation' => [
        'title' => 'Comptes',
        'group' => 'Comptabilité',
    ],

    'global-search' => [
        'currency' => 'Devise',
        'name'     => 'Nom',
    ],

    'form' => [
        'sections' => [
            'fields' => [
                'code'          => 'Code',
                'account-name'  => 'Nom du compte',
                'accounting'    => 'Comptabilité',
                'account-type'  => 'Type de compte',
                'default-taxes' => 'Taxes par défaut',
                'tags'          => 'Étiquettes',
                'journals'      => 'Journaux',
                'currency'      => 'Devise',
                'deprecated'    => 'Obsolète',
                'reconcile'     => 'Lettrage',
                'non-trade'     => 'Hors commerce',
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'code'         => 'Code',
            'account-name' => 'Nom du compte',
            'account-type' => 'Type de compte',
            'currency'     => 'Devise',
            'deprecated'   => 'Obsolète',
            'reconcile'    => 'Lettrage',
            'non-trade'    => 'Hors commerce',
        ],

        'actions' => [
            'delete' => [
                'notification' => [
                    'title' => 'Compte supprimé',
                    'body'  => 'Le compte a été supprimé avec succès.',
                ],
            ],
        ],

        'bulk-actions' => [
            'delete' => [
                'notification' => [
                    'title' => 'Comptes supprimés',
                    'body'  => 'Les comptes ont été supprimés avec succès.',
                ],
            ],
        ],
    ],

    'infolist' => [
        'sections' => [
            'entries' => [
                'name'            => 'Nom',
                'tax-type'        => 'Type de taxe',
                'tax-computation' => 'Calcul de la taxe',
                'tax-scope'       => 'Portée de la taxe',
                'status'          => 'Statut',
                'amount'          => 'Montant',
            ],

            'field-set' => [
                'advanced-options' => [
                    'title' => 'Options avancées',

                    'entries' => [
                        'invoice-label'       => 'Libellé de facture',
                        'tax-group'           => 'Groupe de taxes',
                        'country'             => 'Pays',
                        'include-in-price'    => 'Inclus dans le prix',
                        'include-base-amount' => 'Inclure le montant de base',
                        'is-base-affected'    => 'Base affectée',
                    ],
                ],

                'description-and-legal-notes' => [
                    'title'   => 'Description et mentions légales',
                    'entries' => [
                        'description' => 'Description',
                        'legal-notes' => 'Mentions légales',
                    ],
                ],
            ],
        ],
    ],

    'infolist' => [
        'sections' => [
            'entries' => [
                'code'          => 'Code',
                'account-name'  => 'Nom du compte',
                'accounting'    => 'Comptabilité',
                'account-type'  => 'Type de compte',
                'default-taxes' => 'Taxes par défaut',
                'tags'          => 'Étiquettes',
                'journals'      => 'Journaux',
                'currency'      => 'Devise',
                'deprecated'    => 'Obsolète',
                'reconcile'     => 'Lettrage',
                'non-trade'     => 'Hors commerce',
            ],
        ],
    ],
];
