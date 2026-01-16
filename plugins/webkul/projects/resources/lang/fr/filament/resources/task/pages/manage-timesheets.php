<?php

return [
    'title' => 'Feuilles de temps',

    'form' => [
        'date'                   => 'Date',
        'employee'               => 'Employé',
        'description'            => 'Description',
        'time-spent'             => 'Temps passé',
        'time-spent-helper-text' => 'Temps passé en heures (Ex. 1.5 heures signifie 1 heure 30 minutes)',
    ],

    'table' => [
        'header-actions' => [
            'create' => [
                'label' => 'Ajouter une feuille de temps',

                'notification' => [
                    'title' => 'Feuille de temps créée',
                    'body'  => 'La feuille de temps a été créée avec succès.',
                ],
            ],
        ],

        'columns' => [
            'date'                   => 'Date',
            'employee'               => 'Employé',
            'description'            => 'Description',
            'time-spent'             => 'Temps passé',
            'time-spent-on-subtasks' => 'Temps passé sur les sous-tâches',
            'total-time-spent'       => 'Temps total passé',
            'remaining-time'         => 'Temps restant',
        ],

        'actions' => [
            'edit' => [
                'notification' => [
                    'title' => 'Feuille de temps mise à jour',
                    'body'  => 'La feuille de temps a été mise à jour avec succès.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Feuille de temps supprimée',
                    'body'  => 'La feuille de temps a été supprimée avec succès.',
                ],
            ],
        ],
    ],
];
