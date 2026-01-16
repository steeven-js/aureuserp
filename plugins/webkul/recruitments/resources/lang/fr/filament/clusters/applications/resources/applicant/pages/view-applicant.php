<?php

return [
    'header-actions' => [
        'delete' => [
            'notification' => [
                'title' => 'Candidat supprimé',
                'body'  => 'Le candidat a été supprimé avec succès.',
            ],
        ],

        'refuse' => [
            'notification' => [
                'title' => 'Candidat refusé',
                'body'  => 'Le candidat a été refusé avec succès.',
            ],
        ],

        'reopen' => [
            'notification' => [
                'title' => 'Candidature rouverte',
                'body'  => 'La candidature a été rouverte avec succès.',
            ],
        ],

        'state' => [
            'notification' => [
                'title' => 'Statut du candidat mis à jour',
                'body'  => 'Le statut du candidat a été mis à jour avec succès.',
            ],
        ],
    ],

    'mail' => [
        'application-refused' => [
            'subject' => 'Votre candidature : :application',
        ],
    ],
];
