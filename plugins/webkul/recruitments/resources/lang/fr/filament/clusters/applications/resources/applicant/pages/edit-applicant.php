<?php

return [
    'create-employee' => 'Créer un employé',
    'goto-employee'   => 'Voir l\'employé',

    'notification' => [
        'title' => 'Candidat mis à jour',
        'body'  => 'Le candidat a été mis à jour avec succès.',
    ],

    'header-actions' => [
        'delete' => [
            'notification' => [
                'title' => 'Candidat supprimé',
                'body'  => 'Le candidat a été supprimé avec succès.',
            ],
        ],
        'force-delete' => [
            'notification' => [
                'title' => 'Candidat supprimé',
                'body'  => 'Le candidat a été supprimé définitivement avec succès.',
            ],
        ],

        'refuse' => [
            'title'        => 'Motif de refus',
            'notification' => [
                'title' => 'Candidat refusé',
                'body'  => 'Le candidat a été refusé avec succès.',
            ],
        ],

        'reopen' => [
            'title'        => 'Rouvrir la candidature',
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

        'application-confirm' => [
            'subject' => 'Votre candidature : :job_position',
        ],
        'interviewer-assigned' => [
            'subject' => 'Vous avez été assigné au candidat :applicant.',
        ],
    ],
];
