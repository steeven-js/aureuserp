<?php

return [
    'title' => 'Facture',

    'navigation' => [
        'title' => 'Factures',
        'group' => 'Factures',
    ],

    'global-search' => [
        'number'           => 'Numéro',
        'customer'         => 'Client',
        'invoice-date'     => 'Date de facture',
        'invoice-due-date' => 'Date d\'échéance',
    ],

    'form' => [
        'section' => [
            'general' => [
                'title'  => 'Général',
                'fields' => [
                    'customer-invoice' => 'Facture client',
                    'customer'         => 'Client',
                    'invoice-date'     => 'Date de facture',
                    'due-date'         => 'Date d\'échéance',
                    'payment-term'     => 'Condition de paiement',
                ],
            ],
        ],

        'tabs' => [
            'invoice-lines' => [
                'title' => 'Lignes de facture',

                'repeater' => [
                    'products' => [
                        'title'       => 'Produits',
                        'add-product' => 'Ajouter un produit',

                        'columns' => [
                            'product'             => 'Produit',
                            'quantity'            => 'Quantité',
                            'unit'                => 'Unité',
                            'taxes'               => 'Taxes',
                            'discount-percentage' => 'Remise',
                            'unit-price'          => 'Prix unitaire',
                            'sub-total'           => 'Sous-total',
                        ],

                        'fields' => [
                            'product'             => 'Produit',
                            'quantity'            => 'Quantité',
                            'unit'                => 'Unité',
                            'taxes'               => 'Taxes',
                            'discount-percentage' => 'Pourcentage de remise',
                            'unit-price'          => 'Prix unitaire',
                            'sub-total'           => 'Sous-total',
                        ],
                    ],
                ],
            ],

            'other-information' => [
                'title'    => 'Autres informations',
                'fieldset' => [
                    'invoice' => [
                        'title'  => 'Facture',
                        'fields' => [
                            'customer-reference' => 'Référence client',
                            'sales-person'       => 'Commercial',
                            'payment-reference'  => 'Référence de paiement',
                            'recipient-bank'     => 'Banque du bénéficiaire',
                            'delivery-date'      => 'Date de livraison',
                        ],
                    ],

                    'accounting' => [
                        'title' => 'Comptabilité',

                        'fieldset' => [
                            'incoterm'          => 'Incoterm',
                            'incoterm-location' => 'Lieu de l\'incoterm',
                            'payment-method'    => 'Mode de paiement',
                            'auto-post'         => 'Comptabilisation automatique',
                            'checked'           => 'Vérifié',
                        ],
                    ],

                    'additional-information' => [
                        'title'  => 'Informations complémentaires',
                        'fields' => [
                            'company'  => 'Société',
                            'currency' => 'Devise',
                        ],
                    ],

                    'marketing' => [
                        'title'  => 'Marketing',
                        'fields' => [
                            'campaign' => 'Campagne',
                            'medium'   => 'Support',
                            'source'   => 'Source',
                        ],
                    ],
                ],
            ],

            'term-and-conditions' => [
                'title' => 'Conditions générales',
            ],
        ],
    ],

    'table' => [
        'total'   => 'Total',
        'columns' => [
            'number'           => 'Numéro',
            'state'            => 'État',
            'customer'         => 'Client',
            'invoice-date'     => 'Date de facture',
            'checked'          => 'Vérifié',
            'accounting-date'  => 'Date comptable',
            'due-date'         => 'Date d\'échéance',
            'source-document'  => 'Document source',
            'reference'        => 'Référence',
            'sales-person'     => 'Commercial',
            'tax-excluded'     => 'Hors taxes',
            'tax'              => 'Taxe',
            'total'            => 'Total',
            'amount-due'       => 'Montant dû',
            'invoice-currency' => 'Devise de la facture',
        ],

        'groups' => [
            'name'                         => 'Nom',
            'invoice-partner-display-name' => 'Nom du partenaire de facturation',
            'invoice-date'                 => 'Date de facture',
            'checked'                      => 'Vérifié',
            'date'                         => 'Date',
            'invoice-due-date'             => 'Date d\'échéance',
            'invoice-origin'               => 'Origine de la facture',
            'sales-person'                 => 'Commercial',
            'currency'                     => 'Devise',
            'created-at'                   => 'Créé le',
            'updated-at'                   => 'Modifié le',
        ],

        'filters' => [
            'number'                       => 'Numéro',
            'invoice-partner-display-name' => 'Nom du partenaire de facturation',
            'invoice-date'                 => 'Date de facture',
            'invoice-due-date'             => 'Date d\'échéance',
            'invoice-origin'               => 'Origine de la facture',
            'reference'                    => 'Référence',
            'created-at'                   => 'Créé le',
            'updated-at'                   => 'Modifié le',
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
        'section' => [
            'general' => [
                'title'   => 'Général',
                'entries' => [
                    'customer-invoice' => 'Facture client',
                    'customer'         => 'Client',
                    'invoice-date'     => 'Date de facture',
                    'due-date'         => 'Date d\'échéance',
                    'payment-term'     => 'Condition de paiement',
                ],
            ],
        ],

        'tabs' => [
            'invoice-lines' => [
                'title' => 'Lignes de facture',

                'repeater' => [
                    'products' => [
                        'entries' => [
                            'product'             => 'Produit',
                            'quantity'            => 'Quantité',
                            'unit'                => 'Unité de mesure',
                            'taxes'               => 'Taxes',
                            'discount-percentage' => 'Pourcentage de remise',
                            'unit-price'          => 'Prix unitaire',
                            'sub-total'           => 'Sous-total',
                            'total'               => 'Total',
                        ],
                    ],
                ],
            ],

            'other-information' => [
                'title'    => 'Autres informations',

                'fieldset' => [
                    'invoice' => [
                        'title'   => 'Facture',
                        'entries' => [
                            'customer-reference' => 'Référence client',
                            'sales-person'       => 'Commercial',
                            'payment-reference'  => 'Référence de paiement',
                            'recipient-bank'     => 'Banque du bénéficiaire',
                            'delivery-date'      => 'Date de livraison',
                        ],
                    ],

                    'accounting' => [
                        'title' => 'Comptabilité',

                        'fieldset' => [
                            'incoterm'          => 'Incoterm',
                            'incoterm-location' => 'Lieu de l\'incoterm',
                            'payment-method'    => 'Mode de paiement',
                            'auto-post'         => 'Comptabilisation automatique',
                            'checked'           => 'Vérifié',
                        ],
                    ],

                    'additional-information' => [
                        'title'   => 'Informations complémentaires',

                        'entries' => [
                            'company'  => 'Société',
                            'currency' => 'Devise',
                        ],
                    ],

                    'marketing' => [
                        'title'   => 'Marketing',
                        'entries' => [
                            'campaign' => 'Campagne',
                            'medium'   => 'Support',
                            'source'   => 'Source',
                        ],
                    ],
                ],
            ],

            'term-and-conditions' => [
                'title' => 'Conditions générales',
            ],
        ],
    ],

];
