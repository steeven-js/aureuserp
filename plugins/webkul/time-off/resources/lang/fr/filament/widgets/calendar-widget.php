<?php

return [
    'heading' => [
        'title' => 'Demandes de congés',
    ],

    'modal-actions' => [
        'edit' => [
            'title'                         => 'Modifier',
            'duration-display'              => ':count jour ouvré|:count jours ouvrés',
            'duration-display-with-weekend' => ':count jour ouvré (+ :weekend jour de week-end)|:count jours ouvrés (+ :weekend jours de week-end)',

            'notification' => [
                'title' => 'Congé mis à jour',
                'body'  => 'Votre demande de congé a été mise à jour avec succès.',
            ],
        ],

        'delete' => [
            'title' => 'Supprimer',
        ],
    ],

    'view-action' => [
        'title'       => 'Voir',
        'description' => 'Voir la demande de congé',
    ],

    'header-actions' => [
        'create' => [
            'title'       => 'Nouveau congé',
            'description' => 'Créer une demande de congé',

            'notification' => [
                'title' => 'Congé créé',
                'body'  => 'La demande de congé a été créée avec succès.',
            ],

            'employee-not-found' => [
                'notification' => [
                    'title' => 'Employé non trouvé',
                    'body'  => 'Veuillez ajouter un employé à votre profil avant de créer une demande de congé.',
                ],
            ],

            'success' => [
                'notification' => [
                    'title' => 'Congé créé',
                    'body'  => 'Votre demande de congé a été créée avec succès.',
                ],
            ],
        ],
    ],

    'form' => [
        'title'       => 'Demande de congé',
        'description' => 'Créez ou modifiez votre demande de congé avec les détails suivants :',

        'fields' => [
            'time-off-type'             => 'Type de congé',
            'time-off-type-placeholder' => 'Sélectionnez un type de congé',
            'time-off-type-helper'      => 'Sélectionnez le type de congé que vous demandez.',
            'request-date-from'         => 'Date de début de la demande',
            'request-date-to'           => 'Date de fin de la demande',
            'period'                    => 'Période',
            'half-day'                  => 'Demi-journée',
            'half-day-helper'           => 'Activer pour un congé d\'une demi-journée.',
            'requested-days'            => 'Demandé (Jours/Heures)',
            'description'               => 'Description',
            'description-placeholder'   => 'Aucune description fournie',
            'description-helper'        => 'Fournissez une brève description de votre demande de congé.',
            'duration'                  => 'Durée',
            'please-select-dates'       => 'Veuillez sélectionner la date de début et de fin de la demande.',
        ],
    ],

    'infolist' => [
        'title'       => 'Détails du congé',
        'description' => 'Voici les détails de votre demande de congé :',
        'entries'     => [
            'time-off-type'           => 'Type de congé',
            'request-date-from'       => 'Date de début de la demande',
            'request-date-to'         => 'Date de fin de la demande',
            'description'             => 'Description',
            'description-placeholder' => 'Aucune description fournie',
            'duration'                => 'Durée',
            'status'                  => 'Statut',
        ],
    ],

    'events' => [
        'title' => ':name En :status: :days jour(s)',
    ],
];
