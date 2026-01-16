<?php

return [
    'form' => [
        'tabs' => [
            'journal-entries' => [
                'title' => 'Écritures comptables',

                'field-set' => [
                    'accounting-information' => [
                        'title'  => 'Informations comptables',
                        'fields' => [
                            'dedicated-credit-note-sequence' => 'Séquence d\'avoir dédiée',
                            'dedicated-payment-sequence'     => 'Séquence de paiement dédiée',
                            'sort-code-placeholder'          => 'Saisir le code du journal',
                            'sort-code'                      => 'Tri',
                            'currency'                       => 'Devise',
                            'color'                          => 'Couleur',
                        ],
                    ],
                    'bank-account-number' => [
                        'title' => 'Numéro de compte bancaire',
                    ],
                ],
            ],
            'incoming-payments' => [
                'title' => 'Paiements entrants',

                'fields' => [
                    'relation-notes'             => 'Notes de relation',
                    'relation-notes-placeholder' => 'Saisir les détails de la relation',
                ],
            ],
            'outgoing-payments' => [
                'title' => 'Paiements sortants',

                'fields' => [
                    'relation-notes'             => 'Notes de relation',
                    'relation-notes-placeholder' => 'Saisir les détails de la relation',
                ],
            ],
            'advanced-settings' => [
                'title'  => 'Paramètres avancés',
                'fields' => [
                    'allowed-accounts'       => 'Comptes autorisés',
                    'control-access'         => 'Contrôle d\'accès',
                    'payment-communication'  => 'Communication de paiement',
                    'auto-check-on-post'     => 'Vérification auto à la comptabilisation',
                    'communication-type'     => 'Type de communication',
                    'communication-standard' => 'Norme de communication',
                ],
            ],
        ],

        'general' => [
            'title' => 'Informations générales',

            'fields' => [
                'name'    => 'Nom',
                'type'    => 'Type',
                'company' => 'Société',
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'name'       => 'Nom',
            'type'       => 'Type',
            'code'       => 'Code',
            'currency'   => 'Devise',
            'created-by' => 'Créé par',
            'status'     => 'Statut',
        ],

        'actions' => [
            'delete' => [
                'notification' => [
                    'title' => 'Incoterm supprimé',
                    'body'  => 'L\'incoterm a été supprimé avec succès.',
                ],
            ],
        ],

        'bulk-actions' => [
            'delete' => [
                'notification' => [
                    'title' => 'Journal supprimé',
                    'body'  => 'Le journal a été supprimé avec succès.',
                ],
            ],
        ],
    ],

    'infolist' => [
        'tabs' => [
            'journal-entries' => [
                'title' => 'Écritures comptables',

                'field-set' => [
                    'accounting-information' => [
                        'title'   => 'Informations comptables',
                        'entries' => [
                            'dedicated-credit-note-sequence' => 'Séquence d\'avoir dédiée',
                            'dedicated-payment-sequence'     => 'Séquence de paiement dédiée',
                            'sort-code-placeholder'          => 'Saisir le code du journal',
                            'sort-code'                      => 'Tri',
                            'currency'                       => 'Devise',
                            'color'                          => 'Couleur',
                        ],
                    ],
                    'bank-account-number' => [
                        'title' => 'Numéro de compte bancaire',
                    ],
                ],
            ],
            'incoming-payments' => [
                'title' => 'Paiements entrants',

                'entries' => [
                    'relation-notes'             => 'Notes de relation',
                    'relation-notes-placeholder' => 'Saisir les détails de la relation',
                ],
            ],
            'outgoing-payments' => [
                'title' => 'Paiements sortants',

                'entries' => [
                    'relation-notes'             => 'Notes de relation',
                    'relation-notes-placeholder' => 'Saisir les détails de la relation',
                ],
            ],
            'advanced-settings' => [
                'title'   => 'Paramètres avancés',
                'entries' => [
                    'allowed-accounts'       => 'Comptes autorisés',
                    'control-access'         => 'Contrôle d\'accès',
                    'payment-communication'  => 'Communication de paiement',
                    'auto-check-on-post'     => 'Vérification auto à la comptabilisation',
                    'communication-type'     => 'Type de communication',
                    'communication-standard' => 'Norme de communication',
                ],
            ],
        ],

        'general' => [
            'title' => 'Informations générales',

            'entries' => [
                'name'    => 'Nom',
                'type'    => 'Type',
                'company' => 'Société',
            ],
        ],
    ],

];
