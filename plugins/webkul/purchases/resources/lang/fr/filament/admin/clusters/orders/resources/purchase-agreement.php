<?php

return [
    'navigation' => [
        'title' => 'Accords d\'achat',
        'group' => 'Achat',
    ],

    'form' => [
        'sections' => [
            'general' => [
                'title' => 'Général',

                'fields' => [
                    'vendor'                => 'Fournisseur',
                    'valid-from'            => 'Valide à partir du',
                    'valid-to'              => 'Valide jusqu\'au',
                    'buyer'                 => 'Acheteur',
                    'reference'             => 'Référence',
                    'reference-placeholder' => 'ex. BC/123',
                    'agreement-type'        => 'Type d\'accord',
                    'company'               => 'Société',
                    'currency'              => 'Devise',
                ],
            ],
        ],

        'tabs' => [
            'products' => [
                'title' => 'Produits',

                'columns' => [
                    'product'    => 'Produit',
                    'quantity'   => 'Quantité',
                    'ordered'    => 'Commandé',
                    'uom'        => 'Unité de mesure',
                    'unit-price' => 'Prix unitaire',
                ],

                'fields' => [
                    'product'    => 'Produit',
                    'quantity'   => 'Quantité',
                    'ordered'    => 'Commandé',
                    'uom'        => 'Unité de mesure',
                    'unit-price' => 'Prix unitaire',
                ],
            ],

            'additional' => [
                'title' => 'Informations supplémentaires',
            ],

            'terms' => [
                'title' => 'Conditions générales',
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'agreement'      => 'Accord',
            'vendor'         => 'Fournisseur',
            'agreement-type' => 'Type d\'accord',
            'buyer'          => 'Acheteur',
            'company'        => 'Société',
            'valid-from'     => 'Valide à partir du',
            'valid-to'       => 'Valide jusqu\'au',
            'reference'      => 'Référence',
            'status'         => 'Statut',
        ],

        'groups' => [
            'agreement-type' => 'Type d\'accord',
            'vendor'         => 'Fournisseur',
            'state'          => 'État',
            'created-at'     => 'Créé le',
            'updated-at'     => 'Mis à jour le',
        ],

        'filters' => [
            'agreement'      => 'Accord',
            'vendor'         => 'Fournisseur',
            'agreement-type' => 'Type d\'accord',
            'buyer'          => 'Acheteur',
            'company'        => 'Société',
            'valid-from'     => 'Valide à partir du',
            'valid-to'       => 'Valide jusqu\'au',
            'reference'      => 'Référence',
            'status'         => 'Statut',
            'created-at'     => 'Créé le',
            'updated-at'     => 'Mis à jour le',
        ],

        'actions' => [
            'delete' => [
                'notification' => [
                    'title' => 'Accord d\'achat supprimé',
                    'body'  => 'L\'accord d\'achat a été supprimé avec succès.',
                ],
            ],

            'restore' => [
                'notification' => [
                    'title' => 'Accord d\'achat restauré',
                    'body'  => 'L\'accord d\'achat a été restauré avec succès.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'success' => [
                        'title' => 'Accord d\'achat supprimé définitivement',
                        'body'  => 'L\'accord d\'achat a été supprimé définitivement avec succès.',
                    ],

                    'error' => [
                        'title' => 'L\'accord d\'achat n\'a pas pu être supprimé',
                        'body'  => 'L\'accord d\'achat ne peut pas être supprimé car il est actuellement utilisé.',
                    ],
                ],
            ],
        ],

        'bulk-actions' => [
            'delete' => [
                'notification' => [
                    'title' => 'Accords d\'achat supprimés',
                    'body'  => 'Les accords d\'achat ont été supprimés avec succès.',
                ],
            ],

            'restore' => [
                'notification' => [
                    'title' => 'Accords d\'achat restaurés',
                    'body'  => 'Les accords d\'achat ont été restaurés avec succès.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'success' => [
                        'title' => 'Accords d\'achat supprimés définitivement',
                        'body'  => 'Les accords d\'achat ont été supprimés définitivement avec succès.',
                    ],

                    'error' => [
                        'title' => 'Les accords d\'achat n\'ont pas pu être supprimés',
                        'body'  => 'Les accords d\'achat ne peuvent pas être supprimés car ils sont actuellement utilisés.',
                    ],
                ],
            ],
        ],
    ],

    'infolist' => [
        'sections' => [
            'general' => [
                'title' => 'Général',

                'entries' => [
                    'vendor'                => 'Fournisseur',
                    'valid-from'            => 'Valide à partir du',
                    'valid-to'              => 'Valide jusqu\'au',
                    'buyer'                 => 'Acheteur',
                    'reference'             => 'Référence',
                    'reference-placeholder' => 'ex. BC/123',
                    'agreement-type'        => 'Type d\'accord',
                    'company'               => 'Société',
                    'currency'              => 'Devise',
                ],
            ],

            'metadata' => [
                'title' => 'Métadonnées',

                'entries' => [
                    'created-at' => 'Créé le',
                    'created-by' => 'Créé par',
                    'updated-at' => 'Mis à jour le',
                ],
            ],
        ],

        'tabs' => [
            'products' => [
                'title' => 'Produits',

                'entries' => [
                    'product'    => 'Produit',
                    'quantity'   => 'Quantité',
                    'ordered'    => 'Commandé',
                    'uom'        => 'Unité de mesure',
                    'unit-price' => 'Prix unitaire',
                ],
            ],

            'additional' => [
                'title' => 'Informations supplémentaires',
            ],

            'terms' => [
                'title' => 'Conditions générales',
            ],
        ],
    ],
];
