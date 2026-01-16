<?php

return [
    'title'      => 'Type de congé',
    'navigation' => [
        'title' => 'Type de congé',
    ],

    'form' => [
        'sections' => [
            'general' => [
                'title'  => 'Informations générales',
                'fields' => [
                    'name'                => 'Titre',
                    'approval'            => 'Approbation',
                    'requires-allocation' => 'Nécessite une attribution',
                    'employee-requests'   => 'Demandes des employés',
                    'display-option'      => 'Option d\'affichage',
                ],
            ],
            'display-option' => [
                'title'  => 'Option d\'affichage',
                'fields' => [
                    'color' => 'Couleur',
                ],
            ],
            'configuration' => [
                'title' => 'Configuration',

                'fields' => [
                    'notified-time-off-officers'          => 'Responsables des congés notifiés',
                    'take-time-off-in'                    => 'Prendre des congés en',
                    'public-holiday-included'             => 'Jours fériés inclus',
                    'allow-to-attach-supporting-document' => 'Autoriser les pièces justificatives',
                    'show-on-dashboard'                   => 'Afficher sur le tableau de bord',
                    'allow-negative-cap'                  => 'Autoriser un solde négatif',
                    'kind-off-time'                       => 'Type de temps',
                    'max-negative-cap'                    => 'Solde négatif maximum',
                    'kind-of-time'                        => 'Type de congé',
                ],
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'name'                      => 'Nom',
            'company-name'              => 'Entreprise',
            'color'                     => 'Couleur',
            'notified-time-officers'    => 'Responsables notifiés',
            'time-off-approval'         => 'Approbation des congés',
            'requires-allocation'       => 'Nécessite une attribution',
            'allocation-approval'       => 'Approbation de l\'attribution',
            'employee-request'          => 'Demande de l\'employé',
        ],

        'filters' => [
            'name'                => 'Nom',
            'company-name'        => 'Entreprise',
            'time-off-approval'   => 'Approbation des congés',
            'requires-allocation' => 'Nécessite une attribution',
            'time-type'           => 'Type de temps',
            'request-unit'        => 'Unité de demande',
            'created-by'          => 'Créé par',
        ],

        'actions' => [
            'delete' => [
                'notification' => [
                    'title' => 'Type de congé supprimé',
                    'body'  => 'Le type de congé a été supprimé avec succès.',
                ],
            ],
            'restore' => [
                'notification' => [
                    'title' => 'Type de congé restauré',
                    'body'  => 'Le type de congé a été restauré avec succès.',
                ],
            ],
        ],

        'bulk-actions' => [
            'restore' => [
                'notification' => [
                    'title' => 'Type de congé restauré',
                    'body'  => 'Le type de congé a été restauré avec succès.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Type de congé supprimé',
                    'body'  => 'Le type de congé a été supprimé avec succès.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'success' => [
                        'title' => 'Type de congé supprimé définitivement',
                        'body'  => 'Le type de congé a été supprimé définitivement avec succès.',
                    ],
                    'error' => [
                        'title' => 'Le type de congé n\'a pas pu être supprimé',
                        'body'  => 'Le type de congé ne peut pas être supprimé car il est actuellement utilisé.',
                    ],
                ],
            ],
        ],
    ],

    'infolist' => [
        'sections' => [
            'general' => [
                'title'   => 'Informations générales',
                'entries' => [
                    'name'                => 'Titre',
                    'approval'            => 'Approbation',
                    'requires-allocation' => 'Nécessite une attribution',
                    'employee-requests'   => 'Demandes des employés',
                    'display-option'      => 'Option d\'affichage',
                ],
            ],
            'display-option' => [
                'title'   => 'Option d\'affichage',
                'entries' => [
                    'color' => 'Couleur',
                ],
            ],
            'configuration' => [
                'title' => 'Configuration',

                'entries' => [
                    'notified-time-off-officers'          => 'Responsables des congés notifiés',
                    'take-time-off-in'                    => 'Prendre des congés en',
                    'public-holiday-included'             => 'Jours fériés inclus',
                    'allow-to-attach-supporting-document' => 'Autoriser les pièces justificatives',
                    'show-on-dashboard'                   => 'Afficher sur le tableau de bord',
                    'kind-off-time'                       => 'Type de temps',
                    'max-negative-cap'                    => 'Solde négatif maximum',
                    'kind-of-time'                        => 'Type de congé',
                ],
            ],
        ],
    ],
];
