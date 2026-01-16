<?php

return [
    'navigation' => [
        'title' => 'Règles',
        'group' => 'Gestion d\'entrepôt',
    ],

    'form' => [
        'sections' => [
            'general' => [
                'title'  => 'Général',

                'fields' => [
                    'name'                        => 'Nom',
                    'action'                      => 'Action',
                    'operation-type'              => 'Type d\'opération',
                    'source-location'             => 'Emplacement source',
                    'destination-location'        => 'Emplacement de destination',
                    'supply-method'               => 'Méthode d\'approvisionnement',
                    'supply-method-hint-tooltip'  => 'Prendre du stock : Les produits sont prélevés directement du stock disponible à l\'emplacement source.<br/>Déclencher une autre règle : Le système ignore le stock disponible et recherche une règle de stock pour réapprovisionner l\'emplacement source.<br/>Prendre du stock, si indisponible, déclencher une autre règle : Les produits sont d\'abord pris du stock disponible. Si aucun n\'est disponible, le système applique une règle de stock pour amener les produits à l\'emplacement source.',
                    'automatic-move'              => 'Mouvement automatique',
                    'automatic-move-hint-tooltip' => 'Opération manuelle : Crée un mouvement de stock séparé après le mouvement actuel.<br/>Automatique sans étape ajoutée : Remplace directement l\'emplacement dans le mouvement d\'origine sans ajouter d\'étape supplémentaire.',

                    'action-information' => [
                        'pull' => 'Lorsque des produits sont requis dans <b>:sourceLocation</b>, :operation est généré depuis <b>:destinationLocation</b> pour répondre à la demande.',
                        'push' => 'Lorsque des produits arrivent à <b>:sourceLocation</b>,</br><b>:operation</b> est généré pour les transférer vers <b>:destinationLocation</b>.',
                        'buy'  => 'Lorsque des produits sont nécessaires à <b>:destinationLocation</b>, une demande de devis est créée pour répondre au besoin.',
                    ],
                ],
            ],

            'settings' => [
                'title'  => 'Paramètres',

                'fields' => [
                    'partner-address'              => 'Adresse du partenaire',
                    'partner-address-hint-tooltip' => 'Adresse où les marchandises doivent être livrées. Optionnel.',
                    'lead-time'                    => 'Délai (Jours)',
                    'lead-time-hint-tooltip'       => 'La date de transfert prévue sera calculée en utilisant ce délai.',
                ],

                'fieldsets' => [
                    'applicability' => [
                        'title'  => 'Applicabilité',

                        'fields' => [
                            'route'   => 'Route',
                            'company' => 'Société',
                        ],
                    ],

                    'propagation' => [
                        'title'  => 'Propagation',

                        'fields' => [
                            'propagation-procurement-group'              => 'Propagation du groupe d\'approvisionnement',
                            'propagation-procurement-group-hint-tooltip' => 'Si sélectionné, l\'annulation du mouvement créé par cette règle annulera également le mouvement suivant.',
                            'cancel-next-move'                           => 'Annuler le mouvement suivant',
                            'warehouse-to-propagate'                     => 'Entrepôt à propager',
                            'warehouse-to-propagate-hint-tooltip'        => 'L\'entrepôt assigné au mouvement ou à l\'approvisionnement créé, qui peut différer de l\'entrepôt auquel cette règle s\'applique (par exemple, pour les règles de réapprovisionnement depuis un autre entrepôt).',
                        ],
                    ],
                ],

            ],
        ],
    ],

    'table' => [
        'columns' => [
            'name'                 => 'Nom',
            'action'               => 'Action',
            'source-location'      => 'Emplacement source',
            'destination-location' => 'Emplacement de destination',
            'route'                => 'Route',
            'deleted-at'           => 'Supprimé le',
            'created-at'           => 'Créé le',
            'updated-at'           => 'Mis à jour le',
        ],

        'groups' => [
            'action'               => 'Action',
            'source-location'      => 'Emplacement source',
            'destination-location' => 'Emplacement de destination',
            'route'                => 'Route',
            'created-at'           => 'Créé le',
            'updated-at'           => 'Mis à jour le',
        ],

        'filters' => [
            'action'               => 'Action',
            'source-location'      => 'Emplacement source',
            'destination-location' => 'Emplacement de destination',
            'route'                => 'Route',
            'company'              => 'Société',
        ],

        'actions' => [
            'edit' => [
                'notification' => [
                    'title' => 'Règle mise à jour',
                    'body'  => 'La règle a été mise à jour avec succès.',
                ],
            ],

            'restore' => [
                'notification' => [
                    'title' => 'Règle restaurée',
                    'body'  => 'La règle a été restaurée avec succès.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Règle supprimée',
                    'body'  => 'La règle a été supprimée avec succès.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'success' => [
                        'title' => 'Règle supprimée définitivement',
                        'body'  => 'La règle a été supprimée définitivement avec succès.',
                    ],

                    'error' => [
                        'title' => 'La règle n\'a pas pu être supprimée',
                        'body'  => 'La règle ne peut pas être supprimée car elle est actuellement utilisée.',
                    ],
                ],
            ],
        ],

        'bulk-actions' => [
            'restore' => [
                'notification' => [
                    'title' => 'Règles restaurées',
                    'body'  => 'Les règles ont été restaurées avec succès.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Règles supprimées',
                    'body'  => 'Les règles ont été supprimées avec succès.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'success' => [
                        'title' => 'Règles supprimées définitivement',
                        'body'  => 'Les règles ont été supprimées définitivement avec succès.',
                    ],

                    'error' => [
                        'title' => 'Les règles n\'ont pas pu être supprimées',
                        'body'  => 'Les règles ne peuvent pas être supprimées car elles sont actuellement utilisées.',
                    ],
                ],
            ],
        ],
    ],

    'infolist' => [
        'sections' => [
            'general' => [
                'title' => 'Détails de la règle',

                'description' => [
                    'pull' => 'Lorsque des produits sont requis dans <b>:sourceLocation</b>, <b>:operation</b> est généré depuis <b>:destinationLocation</b> pour répondre à la demande.',
                    'push' => 'Lorsque des produits arrivent à <b>:sourceLocation</b>, <b>:operation</b> est généré pour les transférer vers <b>:destinationLocation</b>.',
                ],

                'entries' => [
                    'name'                 => 'Nom de la règle',
                    'action'               => 'Action',
                    'operation-type'       => 'Type d\'opération',
                    'source-location'      => 'Emplacement source',
                    'destination-location' => 'Emplacement de destination',
                    'route'                => 'Route',
                    'company'              => 'Société',
                    'partner-address'      => 'Adresse du partenaire',
                    'lead-time'            => 'Délai',
                    'action-information'   => 'Informations sur l\'action',
                ],
            ],

            'record-information' => [
                'title' => 'Informations de l\'enregistrement',

                'entries' => [
                    'created-by'   => 'Créé par',
                    'created-at'   => 'Créé le',
                    'last-updated' => 'Dernière mise à jour',
                ],
            ],
        ],
    ],
];
