<?php

return [
    'form' => [
        'fields' => [
            'accrual-amount'              => 'Montant du cumul',
            'accrual-value-type'          => 'Type de valeur du cumul',
            'accrual-frequency'           => 'Fréquence du cumul',
            'accrual-day'                 => 'Jour du cumul',
            'day-of-month'                => 'Jour du mois',
            'first-day-of-month'          => 'Premier jour du mois',
            'second-day-of-month'         => 'Deuxième jour du mois',
            'first-period-month'          => 'Mois de la première période',
            'first-period-day'            => 'Jour de la première période',
            'second-period-month'         => 'Mois de la deuxième période',
            'second-period-day'           => 'Jour de la deuxième période',
            'first-period-year'           => 'Année de la première période',
            'cap-accrued-time'            => 'Plafonner le temps cumulé',
            'days'                        => 'Jours',
            'start-count'                 => 'Compteur de départ',
            'start-type'                  => 'Type de départ',
            'action-with-unused-accruals' => 'Action pour les cumuls non utilisés',
            'milestone-cap'               => 'Plafond du jalon',
            'maximum-leave-yearly'        => 'Congé maximum annuel',
            'accrual-validity'            => 'Validité du cumul',
            'accrual-validity-count'      => 'Durée de validité du cumul',
            'accrual-validity-type'       => 'Type de validité du cumul',
            'advanced-accrual-settings'   => 'Paramètres avancés du cumul',
            'after-allocation-start'      => 'Après la date de début d\'attribution',
        ],
    ],

    'table' => [
        'columns' => [
            'accrual-amount'     => 'Montant du cumul',
            'accrual-value-type' => 'Type de valeur du cumul',
            'frequency'          => 'Fréquence',
            'maximum-leave-days' => 'Jours de congé maximum',
        ],

        'groups' => [
            'accrual-amount'       => 'Montant du cumul',
            'accrual-value-type'   => 'Type de valeur du cumul',
            'frequency'            => 'Fréquence',
            'maximum-leave-days'   => 'Jours de congé maximum',
        ],

        'filters' => [
            'accrual-frequency'           => 'Fréquence du cumul',
            'start-type'                  => 'Type de départ',
            'cap-accrued-time'            => 'Plafonner le temps cumulé',
            'action-with-unused-accruals' => 'Action pour les cumuls non utilisés',
            'accrual-amount'              => 'Montant du cumul',
            'created-at'                  => 'Créé le',
            'updated-at'                  => 'Mis à jour le',
        ],

        'header-actions' => [
            'created' => [
                'title' => 'Nouveau plan de cumul de congés',

                'notification' => [
                    'title' => 'Plan de cumul de congés créé',
                    'body'  => 'Le plan de cumul de congés a été créé avec succès.',
                ],
            ],
        ],

        'actions' => [
            'edit' => [
                'notification' => [
                    'title' => 'Plan de cumul de congés mis à jour',
                    'body'  => 'Le plan de cumul de congés a été mis à jour avec succès.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Plan de cumul de congés supprimé',
                    'body'  => 'Le plan de cumul de congés a été supprimé avec succès.',
                ],
            ],
        ],

        'bulk-actions' => [

            'delete' => [
                'notification' => [
                    'title' => 'Plans de cumul de congés supprimés',
                    'body'  => 'Les plans de cumul de congés ont été supprimés avec succès.',
                ],
            ],
        ],
    ],

    'infolist' => [
        'entries' => [
            'accrual-amount'              => 'Montant du cumul',
            'accrual-value-type'          => 'Type de valeur du cumul',
            'accrual-frequency'           => 'Fréquence du cumul',
            'accrual-day'                 => 'Jour du cumul',
            'day-of-month'                => 'Jour du mois',
            'first-day-of-month'          => 'Premier jour du mois',
            'second-day-of-month'         => 'Deuxième jour du mois',
            'first-period-month'          => 'Mois de la première période',
            'first-period-day'            => 'Jour de la première période',
            'second-period-month'         => 'Mois de la deuxième période',
            'second-period-day'           => 'Jour de la deuxième période',
            'first-period-year'           => 'Année de la première période',
            'cap-accrued-time'            => 'Plafonner le temps cumulé',
            'days'                        => 'Jours',
            'start-count'                 => 'Compteur de départ',
            'start-type'                  => 'Type de départ',
            'action-with-unused-accruals' => 'Action pour les cumuls non utilisés',
            'milestone-cap'               => 'Plafond du jalon',
            'maximum-leave-yearly'        => 'Congé maximum annuel',
            'accrual-validity'            => 'Validité du cumul',
            'accrual-validity-count'      => 'Durée de validité du cumul',
            'accrual-validity-type'       => 'Type de validité du cumul',
            'advanced-accrual-settings'   => 'Paramètres avancés du cumul',
            'after-allocation-start'      => 'Après la date de début d\'attribution',
        ],
    ],
];
