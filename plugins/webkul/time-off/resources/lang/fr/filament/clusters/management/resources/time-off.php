<?php

return [
    'title' => 'Congé',

    'model-label' => 'Congé',

    'navigation' => [
        'title' => 'Congé',
    ],

    'form' => [
        'fields' => [
            'employee-name'     => 'Nom de l\'employé',
            'department-name'   => 'Nom du département',
            'time-off-type'     => 'Type de congé',
            'date'              => 'Date',
            'dates'             => 'Dates',
            'request-date-from' => 'Date de début de la demande',
            'request-date-to'   => 'Date de fin de la demande',
            'description'       => 'Description',
            'period'            => 'Période',
            'half-day'          => 'Demi-journée',
            'requested-days'    => 'Demandé (Jours/Heures)',
            'attachment'        => 'Pièce jointe',
            'day'               => ':day jour',
            'days'              => ':days jour(s)',
        ],
    ],

    'table' => [
        'columns' => [
            'employee-name'  => 'Employé',
            'time-off-type'  => 'Type de congé',
            'description'    => 'Description',
            'date-from'      => 'Date de début',
            'date-to'        => 'Date de fin',
            'duration'       => 'Durée',
            'status'         => 'Statut',
        ],

        'groups' => [
            'employee-name' => 'Employé',
            'time-off-type' => 'Type de congé',
            'status'        => 'Statut',
            'start-date'    => 'Date de début',
            'start-to'      => 'Date de fin',
            'updated-at'    => 'Mis à jour le',
            'created-at'    => 'Créé le',
        ],

        'actions' => [
            'approve' => [
                'title' => [
                    'validate' => 'Valider',
                    'approve'  => 'Approuver',
                ],
                'notification' => [
                    'title' => 'Congé approuvé',
                    'body'  => 'Le congé a été approuvé avec succès.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Congé supprimé',
                    'body'  => 'Le congé a été supprimé avec succès.',
                ],
            ],

            'refused' => [
                'title'        => 'Refuser',
                'notification' => [
                    'title' => 'Congé refusé',
                    'body'  => 'Le congé a été refusé avec succès.',
                ],
            ],
        ],

        'bulk-actions' => [
            'delete' => [
                'notification' => [
                    'title' => 'Congé supprimé',
                    'body'  => 'Le congé a été supprimé avec succès.',
                ],
            ],
        ],
    ],

    'infolist' => [
        'entries' => [
            'employee-name'     => 'Nom de l\'employé',
            'department-name'   => 'Nom du département',
            'time-off-type'     => 'Type de congé',
            'date'              => 'Date',
            'dates'             => 'Dates',
            'request-date-from' => 'Date de début de la demande',
            'request-date-to'   => 'Date de fin de la demande',
            'description'       => 'Description',
            'period'            => 'Période',
            'half-day'          => 'Demi-journée',
            'requested-days'    => 'Demandé (Jours/Heures)',
            'attachment'        => 'Pièce jointe',
            'day'               => ':day jour',
            'days'              => ':days jour(s)',
            'date-from'         => 'Date de début',
            'date-to'           => 'Date de fin',
            'status'            => 'Statut',
        ],
    ],
];
