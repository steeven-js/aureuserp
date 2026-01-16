<?php

return [
    'form' => [
        'sections' => [
            'general' => [
                'title' => 'Général',

                'fields' => [
                    'vendor'                   => 'Fournisseur',
                    'vendor-reference'         => 'Référence fournisseur',
                    'vendor-reference-tooltip' => 'Le numéro de référence de la commande de vente ou de l\'offre fournie par le fournisseur. Il est utilisé pour la correspondance lors de la réception des produits, car cette référence est généralement incluse dans le bon de livraison du fournisseur.',
                    'agreement'                => 'Accord',
                    'currency'                 => 'Devise',
                    'confirmation-date'        => 'Date de confirmation',
                    'order-deadline'           => 'Date limite de commande',
                    'expected-arrival'         => 'Arrivée prévue',
                    'confirmed-by-vendor'      => 'Confirmé par le fournisseur',
                ],
            ],
        ],

        'tabs' => [
            'products' => [
                'title' => 'Produits',

                'repeater' => [
                    'products' => [
                        'title'            => 'Produits',
                        'add-product-line' => 'Ajouter un produit',

                        'fields' => [
                            'product'             => 'Produit',
                            'expected-arrival'    => 'Arrivée prévue',
                            'quantity'            => 'Quantité',
                            'received'            => 'Reçu',
                            'billed'              => 'Facturé',
                            'unit'                => 'Unité',
                            'packaging-qty'       => 'Qté emballage',
                            'packaging'           => 'Emballage',
                            'taxes'               => 'Taxes',
                            'discount-percentage' => 'Remise (%)',
                            'unit-price'          => 'Prix unitaire',
                            'amount'              => 'Montant',
                        ],

                        'columns' => [
                            'product'             => 'Produit',
                            'expected-arrival'    => 'Arrivée prévue',
                            'quantity'            => 'Quantité',
                            'received'            => 'Reçu',
                            'billed'              => 'Facturé',
                            'unit'                => 'Unité',
                            'packaging-qty'       => 'Qté emballage',
                            'packaging'           => 'Emballage',
                            'taxes'               => 'Taxes',
                            'discount-percentage' => 'Remise (%)',
                            'unit-price'          => 'Prix unitaire',
                            'amount'              => 'Montant',
                        ],
                    ],

                    'section' => [
                        'title' => 'Ajouter une section',

                        'fields' => [
                        ],
                    ],

                    'note' => [
                        'title' => 'Ajouter une note',

                        'fields' => [
                        ],
                    ],
                ],
            ],

            'additional' => [
                'title' => 'Informations supplémentaires',

                'fields' => [
                    'buyer'             => 'Acheteur',
                    'company'           => 'Société',
                    'source-document'   => 'Document source',
                    'incoterm'          => 'Incoterm',
                    'incoterm-tooltip'  => 'Les Incoterms (International Commercial Terms) sont un ensemble de termes commerciaux standardisés utilisés dans les transactions internationales pour définir les responsabilités entre acheteurs et vendeurs.',
                    'incoterm-location' => 'Lieu Incoterm',
                    'payment-term'      => 'Conditions de paiement',
                    'fiscal-position'   => 'Position fiscale',
                ],
            ],

            'terms' => [
                'title' => 'Conditions générales',
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'favorite'         => 'Favori',
            'priority'         => 'Priorité',
            'vendor-reference' => 'Référence fournisseur',
            'reference'        => 'Référence',
            'vendor'           => 'Fournisseur',
            'buyer'            => 'Acheteur',
            'company'          => 'Société',
            'order-deadline'   => 'Date limite de commande',
            'source-document'  => 'Document source',
            'untaxed-amount'   => 'Montant HT',
            'total-amount'     => 'Montant total',
            'status'           => 'Statut',
            'billing-status'   => 'Statut de facturation',
            'currency'         => 'Devise',
        ],

        'groups' => [
            'vendor'     => 'Fournisseur',
            'buyer'      => 'Acheteur',
            'state'      => 'État',
            'created-at' => 'Créé le',
            'updated-at' => 'Mis à jour le',
        ],

        'filters' => [
            'status'           => 'Statut',
            'vendor-reference' => 'Référence fournisseur',
            'reference'        => 'Référence',
            'untaxed-amount'   => 'Montant HT',
            'total-amount'     => 'Montant total',
            'order-deadline'   => 'Date limite de commande',
            'vendor'           => 'Fournisseur',
            'buyer'            => 'Acheteur',
            'company'          => 'Société',
            'payment-term'     => 'Conditions de paiement',
            'incoterm'         => 'Incoterm',
            'created-at'       => 'Créé le',
            'updated-at'       => 'Mis à jour le',
        ],

        'actions' => [
            'delete' => [
                'notification' => [
                    'success' => [
                        'title' => 'Commande supprimée',
                        'body'  => 'La commande a été supprimée avec succès.',
                    ],

                    'error' => [
                        'title' => 'La commande n\'a pas pu être supprimée',
                        'body'  => 'La commande ne peut pas être supprimée car elle est actuellement utilisée.',
                    ],
                ],
            ],
        ],

        'bulk-actions' => [
            'delete' => [
                'notification' => [
                    'success' => [
                        'title' => 'Commandes supprimées',
                        'body'  => 'Les commandes ont été supprimées avec succès.',
                    ],

                    'error' => [
                        'title' => 'Les commandes n\'ont pas pu être supprimées',
                        'body'  => 'Les commandes ne peuvent pas être supprimées car elles sont actuellement utilisées.',
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
                    'purchase-order'           => 'Bon de commande',
                    'vendor'                   => 'Fournisseur',
                    'vendor-reference'         => 'Référence fournisseur',
                    'vendor-reference-tooltip' => 'Le numéro de référence de la commande de vente ou de l\'offre fournie par le fournisseur. Il est utilisé pour la correspondance lors de la réception des produits, car cette référence est généralement incluse dans le bon de livraison du fournisseur.',
                    'agreement'                => 'Accord',
                    'currency'                 => 'Devise',
                    'confirmation-date'        => 'Date de confirmation',
                    'order-deadline'           => 'Date limite de commande',
                    'expected-arrival'         => 'Arrivée prévue',
                    'confirmed-by-vendor'      => 'Confirmé par le fournisseur',
                ],
            ],
        ],

        'tabs' => [
            'products' => [
                'title' => 'Produits',

                'repeater' => [
                    'products' => [
                        'title'            => 'Produits',
                        'add-product-line' => 'Ajouter un produit',

                        'entries' => [
                            'product'             => 'Produit',
                            'expected-arrival'    => 'Arrivée prévue',
                            'quantity'            => 'Quantité',
                            'received'            => 'Reçu',
                            'billed'              => 'Facturé',
                            'unit'                => 'Unité',
                            'packaging-qty'       => 'Qté emballage',
                            'packaging'           => 'Emballage',
                            'taxes'               => 'Taxes',
                            'discount-percentage' => 'Remise (%)',
                            'unit-price'          => 'Prix unitaire',
                            'amount'              => 'Montant',
                        ],
                    ],

                    'section' => [
                        'title' => 'Ajouter une section',
                    ],

                    'note' => [
                        'title' => 'Ajouter une note',
                    ],
                ],
            ],

            'additional' => [
                'title' => 'Informations supplémentaires',

                'entries' => [
                    'buyer'             => 'Acheteur',
                    'company'           => 'Société',
                    'source-document'   => 'Document source',
                    'incoterm'          => 'Incoterm',
                    'incoterm-tooltip'  => 'Les Incoterms (International Commercial Terms) sont un ensemble de termes commerciaux standardisés utilisés dans les transactions internationales pour définir les responsabilités entre acheteurs et vendeurs.',
                    'incoterm-location' => 'Lieu Incoterm',
                    'payment-term'      => 'Conditions de paiement',
                    'fiscal-position'   => 'Position fiscale',
                ],
            ],

            'terms' => [
                'title' => 'Conditions générales',
            ],
        ],
    ],
];
