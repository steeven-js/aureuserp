<?php

return [
    'title' => 'Candidat',

    'navigation' => [
        'title' => 'Candidats',
    ],

    'form' => [
        'sections' => [
            'basic-information' => [
                'title' => 'Informations de base',

                'fields' => [
                    'full-name' => 'Nom complet',
                    'email'     => 'Adresse e-mail',
                    'phone'     => 'Numéro de téléphone',
                    'linkedin'  => 'Profil LinkedIn',
                    'contact'   => 'Contact',
                ],
            ],

            'additional-details' => [
                'title' => 'Détails supplémentaires',

                'fields' => [
                    'company'           => 'Entreprise',
                    'degree'            => 'Diplôme',
                    'tags'              => 'Étiquettes',
                    'manager'           => 'Responsable',
                    'availability-date' => 'Date de disponibilité',

                    'priority-options' => [
                        'low'    => 'Basse',
                        'medium' => 'Moyenne',
                        'high'   => 'Haute',
                    ],
                ],
            ],

            'status-and-evaluation' => [
                'title' => 'Statut',

                'fields' => [
                    'active'     => 'Actif',
                    'evaluation' => 'Évaluation',
                ],
            ],

            'communication' => [
                'title' => 'Communication',

                'fields' => [
                    'cc-email'      => 'E-mail en copie',
                    'email-bounced' => 'E-mail rejeté',
                ],
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'name'       => 'Nom complet',
            'tags'       => 'Étiquettes',
            'evaluation' => 'Évaluation',
        ],

        'filters' => [
            'company'      => 'Entreprise',
            'partner-name' => 'Contact',
            'degree'       => 'Diplôme',
            'manager-name' => 'Responsable',
        ],

        'groups' => [
            'manager-name' => 'Responsable',
        ],

        'actions' => [
            'delete' => [
                'notification' => [
                    'title' => 'Candidat supprimé',
                    'body'  => 'Le candidat a été supprimé avec succès.',
                ],
            ],

            'empty-state-actions' => [
                'create' => [
                    'notification' => [
                        'title' => 'Candidat créé',
                        'body'  => 'Le candidat a été créé avec succès.',
                    ],
                ],
            ],
        ],

        'bulk-actions' => [
            'delete' => [
                'notification' => [
                    'title' => 'Candidats supprimés',
                    'body'  => 'Les candidats ont été supprimés avec succès.',
                ],
            ],
        ],
    ],

    'infolist' => [
        'sections' => [
            'basic-information' => [
                'title' => 'Informations de base',

                'entries' => [
                    'full-name' => 'Nom complet',
                    'email'     => 'Adresse e-mail',
                    'phone'     => 'Numéro de téléphone',
                    'linkedin'  => 'Profil LinkedIn',
                    'contact'   => 'Contact',
                ],
            ],

            'additional-details' => [
                'title' => 'Détails supplémentaires',

                'entries' => [
                    'company'           => 'Entreprise',
                    'degree'            => 'Diplôme',
                    'tags'              => 'Étiquettes',
                    'manager'           => 'Responsable',
                    'availability-date' => 'Date de disponibilité',

                    'priority-options' => [
                        'low'    => 'Basse',
                        'medium' => 'Moyenne',
                        'high'   => 'Haute',
                    ],
                ],
            ],

            'status-and-evaluation' => [
                'title' => 'Statut',

                'entries' => [
                    'active'     => 'Actif',
                    'evaluation' => 'Évaluation',
                ],
            ],

            'communication' => [
                'title' => 'Communication',

                'entries' => [
                    'cc-email'      => 'E-mail en copie',
                    'email-bounced' => 'E-mail rejeté',
                ],
            ],
        ],
    ],
];
