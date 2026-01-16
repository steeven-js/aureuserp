<?php

return [
    'modal' => [
        'title' => 'Heures de travail',
    ],

    'form' => [
        'sections' => [
            'general' => [
                'title'  => 'Informations générales',
                'fields' => [
                    'attendance-name' => 'Nom de présence',
                    'attendance-name' => 'Nom de présence',
                    'day-of-week'     => 'Jour de la semaine',
                ],
            ],

            'timing-information' => [
                'title' => 'Informations horaires',

                'fields' => [
                    'day-period' => 'Périodes de la journée',
                    'week-type'  => 'Type de semaine',
                    'work-from'  => 'Début de travail',
                    'work-to'    => 'Fin de travail',
                ],
            ],

            'date-information' => [
                'title' => 'Informations de date',

                'fields' => [
                    'starting-date' => 'Date de début',
                    'ending-date'   => 'Date de fin',
                ],
            ],

            'additional-information' => [
                'title' => 'Informations complémentaires',

                'fields' => [
                    'durations-days' => 'Durée (Jours)',
                    'display-type'   => 'Type d\'affichage',
                ],
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'name'          => 'Nom de présence',
            'day-of-week'   => 'Jour de la semaine',
            'day-period'    => 'Périodes de la journée',
            'work-from'     => 'Début de travail',
            'work-to'       => 'Fin de travail',
            'starting-date' => 'Date de début',
            'ending-date'   => 'Date de fin',
            'display-type'  => 'Type d\'affichage',
            'created-by'    => 'Créé par',
            'created-at'    => 'Créé le',
            'updated-at'    => 'Mis à jour le',
        ],

        'groups' => [
            'activity-type' => 'Type d\'activité',
            'assignment'    => 'Affectation',
            'assigned-to'   => 'Assigné à',
            'interval'      => 'Intervalle',
            'delay-unit'    => 'Unité de délai',
            'delay-from'    => 'Délai à partir de',
            'created-by'    => 'Créé par',
            'created-at'    => 'Créé le',
            'updated-at'    => 'Mis à jour le',
        ],

        'filters' => [
            'display-type' => 'Type d\'affichage',
            'day-of-week'  => 'Jour de la semaine',
        ],

        'actions' => [
            'edit' => [
                'notification' => [
                    'title' => 'Heures de travail mises à jour',
                    'body'  => 'Les heures de travail ont été mises à jour avec succès.',
                ],
            ],

            'create' => [
                'notification' => [
                    'title' => 'Heures de travail créées',
                    'body'  => 'Les heures de travail ont été créées avec succès.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Heures de travail supprimées',
                    'body'  => 'Les heures de travail ont été supprimées avec succès.',
                ],
            ],

            'restore' => [
                'notification' => [
                    'title' => 'Heures de travail restaurées',
                    'body'  => 'Les heures de travail ont été restaurées avec succès.',
                ],
            ],
        ],

        'bulk-actions' => [
            'delete' => [
                'notification' => [
                    'title' => 'Heures de travail supprimées',
                    'body'  => 'Les heures de travail ont été supprimées avec succès.',
                ],
            ],

            'restore' => [
                'notification' => [
                    'title' => 'Heures de travail supprimées',
                    'body'  => 'Les heures de travail ont été supprimées avec succès.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'title' => 'Heures de travail supprimées',
                    'body'  => 'Les heures de travail ont été supprimées avec succès.',
                ],
            ],
        ],
    ],

    'infolist' => [
        'sections' => [
            'general' => [
                'title' => 'Informations générales',

                'entries' => [
                    'name'        => 'Nom de présence',
                    'day-of-week' => 'Jour de la semaine',
                ],
            ],

            'timing-information' => [
                'title' => 'Informations horaires',

                'entries' => [
                    'day-period' => 'Périodes de la journée',
                    'week-type'  => 'Type de semaine',
                    'work-from'  => 'Début de travail',
                    'work-to'    => 'Fin de travail',
                ],
            ],

            'date-information' => [
                'title' => 'Informations de date',

                'entries' => [
                    'starting-date' => 'Date de début',
                    'ending-date'   => 'Date de fin',
                ],
            ],

            'additional-information' => [
                'title' => 'Informations complémentaires',

                'entries' => [
                    'durations-days' => 'Durée (Jours)',
                    'display-type'   => 'Type d\'affichage',
                ],
            ],
        ],

        'note' => 'Note',
    ],
];
