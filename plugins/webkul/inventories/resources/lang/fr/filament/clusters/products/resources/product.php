<?php

return [
    'navigation' => [
        'title' => 'Produits',
        'group' => 'Inventaire',
    ],

    'form' => [
        'sections' => [
            'inventory' => [
                'title' => 'Inventaire',

                'fieldsets' => [
                    'tracking' => [
                        'title' => 'Traçabilité',

                        'fields' => [
                            'track-inventory'              => 'Suivre l\'inventaire',
                            'track-inventory-hint-tooltip' => 'Un produit stockable est un produit qui nécessite une gestion de l\'inventaire.',
                            'track-by'                     => 'Suivre par',
                            'expiration-date'              => 'Date d\'expiration',
                            'expiration-date-hint-tooltip' => 'Si sélectionné, vous pouvez spécifier des dates d\'expiration pour le produit et ses lots/numéros de série associés.',
                        ],
                    ],

                    'operation' => [
                        'title' => 'Opérations',

                        'fields' => [
                            'routes'              => 'Routes',
                            'routes-hint-tooltip' => 'En fonction des modules installés, ce paramètre vous permet de définir la route du produit, comme l\'achat, la fabrication ou le réapprovisionnement sur commande.',
                        ],
                    ],

                    'logistics' => [
                        'title' => 'Logistique',

                        'fields' => [
                            'responsible'              => 'Responsable',
                            'responsible-hint-tooltip' => 'Le délai de livraison (en jours) représente la durée promise entre la confirmation de la commande de vente et la livraison du produit.',
                            'weight'                   => 'Poids',
                            'volume'                   => 'Volume',
                            'sale-delay'               => 'Délai client (Jours)',
                            'sale-delay-hint-tooltip'  => 'Le délai de livraison (en jours) représente la durée promise entre la confirmation de la commande de vente et la livraison du produit.',
                        ],
                    ],

                    'traceability' => [
                        'title' => 'Traçabilité',

                        'fields' => [
                            'expiration-date'               => 'Date d\'expiration (Jours)',
                            'expiration-date-hint-tooltip'  => 'Si sélectionné, vous pouvez définir des dates d\'expiration pour le produit et ses lots/numéros de série associés.',
                            'best-before-date'              => 'Date de consommation préférentielle (Jours)',
                            'best-before-date-hint-tooltip' => 'Le nombre de jours avant la date d\'expiration où le produit commence à se détériorer, bien qu\'il soit encore sûr à utiliser. Ceci est calculé en fonction du lot/numéro de série.',
                            'removal-date'                  => 'Date de retrait (Jours)',
                            'removal-date-hint-tooltip'     => 'Le nombre de jours avant la date d\'expiration où le produit doit être retiré du stock. Ceci est calculé en fonction du lot/numéro de série.',
                            'alert-date'                    => 'Date d\'alerte (Jours)',
                            'alert-date-hint-tooltip'       => 'Le nombre de jours avant la date d\'expiration où une alerte doit être déclenchée pour le lot/numéro de série. Ceci est calculé en fonction du lot/numéro de série.',
                        ],
                    ],
                ],
            ],

            'additional' => [
                'title' => 'Supplémentaire',
            ],
        ],
    ],

    'infolist' => [
        'sections' => [
            'inventory' => [
                'title' => 'Inventaire',

                'entries' => [
                ],

                'fieldsets' => [
                    'tracking' => [
                        'title' => 'Traçabilité',

                        'entries' => [
                            'track-inventory' => 'Suivre l\'inventaire',
                            'track-by'        => 'Suivre par',
                            'expiration-date' => 'Date d\'expiration',
                        ],
                    ],

                    'operation' => [
                        'title' => 'Opérations',

                        'entries' => [
                            'routes' => 'Routes',
                        ],
                    ],

                    'logistics' => [
                        'title' => 'Logistique',

                        'entries' => [
                            'responsible' => 'Responsable',
                            'weight'      => 'Poids',
                            'volume'      => 'Volume',
                            'sale-delay'  => 'Délai client (Jours)',
                        ],
                    ],

                    'traceability' => [
                        'title' => 'Traçabilité',

                        'entries' => [
                            'expiration-date'  => 'Date d\'expiration (Jours)',
                            'best-before-date' => 'Date de consommation préférentielle (Jours)',
                            'removal-date'     => 'Date de retrait (Jours)',
                            'alert-date'       => 'Date d\'alerte (Jours)',
                        ],
                    ],
                ],
            ],
        ],
    ],
];
