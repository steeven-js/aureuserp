<?php

return [
    'title' => 'Tâches',

    'header-actions' => [
        'create' => [
            'label' => 'Nouvelle tâche',
        ],
    ],

    'table' => [
        'actions' => [
            'restore' => [
                'notification' => [
                    'title' => 'Tâche restaurée',
                    'body'  => 'La tâche a été restaurée avec succès.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Tâche supprimée',
                    'body'  => 'La tâche a été supprimée avec succès.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'title' => 'Tâche supprimée définitivement',
                    'body'  => 'La tâche a été supprimée définitivement avec succès.',
                ],
            ],
        ],
    ],

    'tabs' => [
        'open-tasks'       => 'Tâches ouvertes',
        'my-tasks'         => 'Mes tâches',
        'unassigned-tasks' => 'Tâches non assignées',
        'closed-tasks'     => 'Tâches fermées',
        'starred-tasks'    => 'Tâches favorites',
        'archived-tasks'   => 'Tâches archivées',
    ],
];
