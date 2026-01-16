<?php

return [
    'title' => 'Mon attribution',

    'model-label' => 'Mon attribution',

    'navigation' => [
        'title' => 'Mon attribution',
    ],

    'form' => [
        'fields' => [
            'name'                => 'Nom',
            'name-placeholder'    => 'Type de congé (De la date de début à la date de fin/sans limite)',
            'time-off-type'       => 'Type de congé',
            'allocation-type'     => 'Type d\'attribution',
            'validity-period'     => 'Période de validité',
            'date-from'           => 'Date de début',
            'date-to'             => 'Date de fin',
            'date-to-placeholder' => 'Sans limite',
            'allocation'          => 'Attribution',
            'allocation-suffix'   => 'Nombre de jours',
            'reason'              => 'Motif',
        ],
    ],

    'table' => [
        'columns' => [
            'time-off-type'   => 'Type de congé',
            'amount'          => 'Montant',
            'allocation-type' => 'Type d\'attribution',
            'status'          => 'Statut',
        ],

        'groups' => [
            'time-off-type'   => 'Type de congé',
            'employee-name'   => 'Nom de l\'employé',
            'allocation-type' => 'Type d\'attribution',
            'status'          => 'Statut',
            'start-date'      => 'Date de début',
        ],

        'actions' => [
            'approve' => [
                'title' => [
                    'validate' => 'Valider',
                    'approve'  => 'Approuver',
                ],
                'notification' => [
                    'title' => 'Attribution approuvée',
                    'body'  => 'L\'attribution a été approuvée avec succès.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Attribution supprimée',
                    'body'  => 'L\'attribution a été supprimée avec succès.',
                ],
            ],

            'refused' => [
                'title'        => 'Refuser',
                'notification' => [
                    'title' => 'Attribution refusée',
                    'body'  => 'L\'attribution a été refusée avec succès.',
                ],
            ],
        ],

        'bulk-actions' => [
            'delete' => [
                'notification' => [
                    'title' => 'Attributions supprimées',
                    'body'  => 'Les attributions ont été supprimées avec succès.',
                ],
            ],
        ],
    ],

    'infolist' => [
        'sections' => [
            'allocation-details' => [
                'title'   => 'Détails de l\'attribution',
                'entries' => [
                    'name'                => 'Nom',
                    'time-off-type'       => 'Type de congé',
                    'allocation-type'     => 'Type d\'attribution',
                ],
            ],

            'validity-period' => [
                'title'   => 'Période de validité',
                'entries' => [
                    'date-from' => 'Date de début',
                    'date-to'   => 'Date de fin',
                    'reason'    => 'Motif',
                ],
            ],
            'allocation-status' => [
                'title'   => 'Statut de l\'attribution',
                'entries' => [
                    'date-to-placeholder' => 'Sans limite',
                    'allocation'          => 'Nombre de jour(s)',
                    'allocation-value'    => ':days nombre de jours',
                    'state'               => 'État',
                ],
            ],
        ],
    ],
];
