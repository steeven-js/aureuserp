<?php

return [
    'form' => [
        'tabs' => [
            'general-information' => [
                'title' => 'Informations générales',

                'sections' => [
                    'branch-information' => [
                        'title' => 'Informations de la succursale',

                        'fields' => [
                            'company-name'                => 'Nom de la société',
                            'registration-number'         => 'Numéro d\'enregistrement',
                            'tax-id'                      => 'Numéro de TVA',
                            'tax-id-tooltip'              => 'Le numéro de TVA est un identifiant unique pour votre société.',
                            'color'                       => 'Couleur',
                            'company-id'                  => 'Identifiant de la société',
                            'company-id-tooltip'          => 'L\'identifiant de la société est un identifiant unique pour votre société.',
                        ],
                    ],

                    'branding' => [
                        'title'  => 'Image de marque',
                        'fields' => [
                            'branch-logo' => 'Logo de la succursale',
                        ],
                    ],
                ],
            ],

            'address-information' => [
                'title' => 'Informations d\'adresse',

                'sections' => [
                    'address-information' => [
                        'title' => 'Informations d\'adresse',

                        'fields' => [
                            'street1'                => 'Rue 1',
                            'street2'                => 'Rue 2',
                            'city'                   => 'Ville',
                            'zip'                    => 'Code postal',
                            'country'                => 'Pays',
                            'country-currency-name'  => 'Nom de la devise',
                            'country-phone-code'     => 'Indicatif téléphonique',
                            'country-code'           => 'Code',
                            'country-name'           => 'Nom du pays',
                            'country-state-required' => 'Région requise',
                            'country-zip-required'   => 'Code postal requis',
                            'country-create'         => 'Créer un pays',
                            'state'                  => 'Région',
                            'state-name'             => 'Nom de la région',
                            'state-code'             => 'Code de la région',
                            'zip-code'               => 'Code postal',
                            'state-create'           => 'Créer une région',
                        ],
                    ],

                    'additional-information' => [
                        'title' => 'Informations complémentaires',

                        'fields' => [
                            'default-currency'        => 'Devise par défaut',
                            'currency-name'           => 'Nom de la devise',
                            'currency-full-name'      => 'Nom complet de la devise',
                            'currency-symbol'         => 'Symbole de la devise',
                            'currency-iso-numeric'    => 'Code ISO numérique de la devise',
                            'currency-decimal-places' => 'Décimales de la devise',
                            'currency-rounding'       => 'Arrondi de la devise',
                            'currency-status'         => 'Statut de la devise',
                            'currency-create'         => 'Créer une devise',
                            'company-foundation-date' => 'Date de fondation de la société',
                            'status'                  => 'Statut',
                        ],
                    ],
                ],
            ],

            'contact-information' => [
                'title' => 'Informations de contact',

                'sections' => [
                    'contact-information' => [
                        'title' => 'Informations de contact',

                        'fields' => [
                            'email-address' => 'Adresse e-mail',
                            'phone-number'  => 'Numéro de téléphone',
                            'mobile-number' => 'Numéro de téléphone',
                        ],
                    ],
                ],
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'logo'                 => 'Logo',
            'company-name'         => 'Nom de la succursale',
            'branches'             => 'Succursales',
            'email'                => 'E-mail',
            'city'                 => 'Ville',
            'country'              => 'Pays',
            'currency'             => 'Devise',
            'status'               => 'Statut',
            'created-at'           => 'Créé le',
            'updated-at'           => 'Mis à jour le',
        ],

        'groups' => [
            'company-name' => 'Nom de la succursale',
            'city'         => 'Ville',
            'country'      => 'Pays',
            'state'        => 'Région',
            'email'        => 'E-mail',
            'phone'        => 'Téléphone',
            'currency'     => 'Devise',
            'created-at'   => 'Créé le',
            'updated-at'   => 'Mis à jour le',
        ],

        'filters' => [
            'trashed' => 'Corbeille',
            'status'  => 'Statut',
            'country' => 'Pays',
        ],

        'header-actions' => [
            'create' => [
                'notification' => [
                    'title' => 'Succursale créée',
                    'body'  => 'La succursale a été créée avec succès.',
                ],
            ],
        ],

        'actions' => [
            'edit' => [
                'notification' => [
                    'title' => 'Succursale mise à jour',
                    'body'  => 'La succursale a été mise à jour avec succès.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Succursale supprimée',
                    'body'  => 'La succursale a été supprimée avec succès.',
                ],
            ],

            'restore' => [
                'notification' => [
                    'title' => 'Succursale restaurée',
                    'body'  => 'La succursale a été restaurée avec succès.',
                ],
            ],
        ],

        'bulk-actions' => [
            'restore' => [
                'notification' => [
                    'title' => 'Succursales restaurées',
                    'body'  => 'Les succursales ont été restaurées avec succès.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Succursales supprimées',
                    'body'  => 'Les succursales ont été supprimées avec succès.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'title' => 'Succursales supprimées définitivement',
                    'body'  => 'Les succursales ont été supprimées définitivement avec succès.',
                ],
            ],
        ],
    ],

    'infolist' => [
        'tabs' => [
            'general-information' => [
                'title' => 'Informations générales',

                'sections' => [
                    'branch-information' => [
                        'title' => 'Informations de la succursale',

                        'entries' => [
                            'company-name'                => 'Nom de la société',
                            'registration-number'         => 'Numéro d\'enregistrement',
                            'registration-number-tooltip' => 'Le numéro de TVA est un identifiant unique pour votre société.',
                            'color'                       => 'Couleur',
                        ],
                    ],

                    'branding' => [
                        'title'   => 'Image de marque',
                        'entries' => [
                            'branch-logo' => 'Logo de la succursale',
                        ],
                    ],
                ],
            ],

            'address-information' => [
                'title' => 'Informations d\'adresse',

                'sections' => [
                    'address-information' => [
                        'title' => 'Informations d\'adresse',

                        'entries' => [
                            'street1'                => 'Rue 1',
                            'street2'                => 'Rue 2',
                            'city'                   => 'Ville',
                            'zip'                    => 'Code postal',
                            'country'                => 'Pays',
                            'country-currency-name'  => 'Nom de la devise',
                            'country-phone-code'     => 'Indicatif téléphonique',
                            'country-code'           => 'Code',
                            'country-name'           => 'Nom du pays',
                            'country-state-required' => 'Région requise',
                            'country-zip-required'   => 'Code postal requis',
                            'country-create'         => 'Créer un pays',
                            'state'                  => 'Région',
                            'state-name'             => 'Nom de la région',
                            'state-code'             => 'Code de la région',
                            'zip-code'               => 'Code postal',
                            'state-create'           => 'Créer une région',
                        ],
                    ],

                    'additional-information' => [
                        'title' => 'Informations complémentaires',

                        'entries' => [
                            'default-currency'        => 'Devise par défaut',
                            'currency-name'           => 'Nom de la devise',
                            'currency-full-name'      => 'Nom complet de la devise',
                            'currency-symbol'         => 'Symbole de la devise',
                            'currency-iso-numeric'    => 'Code ISO numérique de la devise',
                            'currency-decimal-places' => 'Décimales de la devise',
                            'currency-rounding'       => 'Arrondi de la devise',
                            'currency-status'         => 'Statut de la devise',
                            'currency-create'         => 'Créer une devise',
                            'company-foundation-date' => 'Date de fondation de la société',
                            'status'                  => 'Statut',
                        ],
                    ],
                ],
            ],

            'contact-information' => [
                'title' => 'Informations de contact',

                'sections' => [
                    'contact-information' => [
                        'title' => 'Informations de contact',

                        'entries' => [
                            'email-address' => 'Adresse e-mail',
                            'phone-number'  => 'Numéro de téléphone',
                            'mobile-number' => 'Numéro de téléphone',
                        ],
                    ],
                ],
            ],
        ],
    ],
];
