<?php

return [
    'title'      => 'Plan de cumul',
    'navigation' => [
        'title' => 'Plan de cumul',
    ],

    'form' => [
        'fields' => [
            'name'                    => 'Titre',
            'is-based-on-worked-time' => 'Basé sur le temps travaillé',
            'accrued-gain-time'       => 'Moment du cumul',
            'carry-over-time'         => 'Temps de report',
            'carry-over-date'         => 'Date de report',
            'status'                  => 'Statut',
        ],
    ],

    'table' => [
        'columns' => [
            'name'   => 'Nom',
            'levels' => 'Niveaux',
        ],

        'actions' => [
            'delete' => [
                'notification' => [
                    'title' => 'Plan de cumul supprimé',
                    'body'  => 'Le plan de cumul a été supprimé avec succès.',
                ],
            ],
        ],

        'bulk-actions' => [
            'delete' => [
                'notification' => [
                    'title' => 'Plan de cumul supprimé',
                    'body'  => 'Le plan de cumul a été supprimé avec succès.',
                ],
            ],
        ],
    ],

    'infolist' => [
        'entries' => [
            'name'                    => 'Nom',
            'is-based-on-worked-time' => 'Basé sur le temps travaillé',
            'accrued-gain-time'       => 'Moment du cumul',
            'carry-over-time'         => 'Temps de report',
            'carry-over-day'          => 'Jour de report',
            'carry-over-month'        => 'Mois de report',
        ],
    ],
];
