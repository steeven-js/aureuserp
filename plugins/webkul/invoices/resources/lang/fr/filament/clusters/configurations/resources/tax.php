<?php

return [
    'title' => 'Taxes',

    'navigation' => [
        'title' => 'Taxes',
        'group' => 'Comptabilité',
    ],

    'global-search' => [
        'company'     => 'Société',
        'amount-type' => 'Type de montant',
        'name'        => 'Nom',
    ],

    'form' => [
        'sections' => [
            'fields' => [
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

                    'fields' => [
                        'invoice-label'       => 'Libellé de facture',
                        'tax-group'           => 'Groupe de taxes',
                        'country'             => 'Pays',
                        'include-in-price'    => 'Inclus dans le prix',
                        'include-base-amount' => 'Inclure le montant de base',
                        'is-base-affected'    => 'Base affectée',
                    ],
                ],

                'description-and-legal-notes' => [
                    'title'  => 'Description et mentions légales',
                    'fields' => [
                        'description' => 'Description',
                        'legal-notes' => 'Mentions légales',
                    ],
                ],
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'name'                    => 'Nom',
            'amount-type'             => 'Type de montant',
            'company'                 => 'Société',
            'tax-group'               => 'Groupe de taxes',
            'country'                 => 'Pays',
            'type-tax-use'            => 'Type d\'utilisation de taxe',
            'tax-scope'               => 'Portée de la taxe',
            'amount-type'             => 'Type de montant',
            'invoice-label'           => 'Libellé de facture',
            'tax-exigibility'         => 'Exigibilité de la taxe',
            'price-include-override'  => 'Prix inclus (forcer)',
            'amount'                  => 'Montant',
            'status'                  => 'Statut',
            'include-base-amount'     => 'Inclure le montant de base',
            'is-base-affected'        => 'Base affectée',
        ],

        'groups' => [
            'name'         => 'Nom',
            'company'      => 'Société',
            'tax-group'    => 'Groupe de taxes',
            'country'      => 'Pays',
            'created-by'   => 'Créé par',
            'type-tax-use' => 'Type d\'utilisation de taxe',
            'tax-scope'    => 'Portée de la taxe',
            'amount-type'  => 'Type de montant',
        ],

        'actions' => [
            'delete' => [
                'notification' => [
                    'title' => 'Condition de paiement supprimée',
                    'body'  => 'La condition de paiement a été supprimée avec succès.',
                ],
            ],
        ],

        'bulk-actions' => [
            'delete' => [
                'notification' => [
                    'title' => 'Taxes supprimées',
                    'body'  => 'Les taxes ont été supprimées avec succès.',
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

];
