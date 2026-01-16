<?php

return [
    'title' => 'Candidat',

    'navigation' => [
        'title' => 'Candidats',
    ],

    'form' => [
        'sections' => [
            'general-information' => [
                'title' => 'Informations générales',

                'fields' => [
                    'evaluation-good'           => 'Évaluation : Bien',
                    'evaluation-very-good'      => 'Évaluation : Très bien',
                    'evaluation-very-excellent' => 'Évaluation : Excellent',
                    'hired'                     => 'Embauché',
                    'candidate-name'            => 'Nom du candidat',
                    'email'                     => 'E-mails',
                    'phone'                     => 'Téléphone',
                    'linkedin-profile'          => 'Profil LinkedIn',
                    'recruiter'                 => 'Recruteur',
                    'interviewer'               => 'Intervieweur',
                    'tags'                      => 'Étiquettes',
                    'notes'                     => 'Notes',
                    'hired-date'                => 'Date d\'embauche',
                    'job-position'              => 'Postes',
                ],
            ],

            'education-and-availability' => [
                'title' => 'Formation & Disponibilité',

                'fields' => [
                    'degree'            => 'Diplôme',
                    'availability-date' => 'Date de disponibilité',
                ],
            ],

            'department' => [
                'title' => 'Département',
            ],

            'salary' => [
                'title' => 'Salaire attendu & proposé',

                'fields' => [
                    'expected-salary'       => 'Salaire attendu',
                    'salary-proposed-extra' => 'Autres avantages',
                    'proposed-salary'       => 'Salaire proposé',
                    'salary-expected-extra' => 'Autres avantages',
                ],
            ],

            'source-and-medium' => [
                'title' => 'Source & Canal',

                'fields' => [
                    'source' => 'Source',
                    'medium' => 'Canal',
                ],
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'partner-name'       => 'Nom du partenaire',
            'applied-on'         => 'Date de candidature',
            'job-position'       => 'Poste',
            'stage'              => 'Étape',
            'candidate-name'     => 'Nom du candidat',
            'evaluation'         => 'Évaluation',
            'application-status' => 'Statut de la candidature',
            'tags'               => 'Étiquettes',
            'refuse-reason'      => 'Motif de refus',
            'email'              => 'E-mail',
            'recruiter'          => 'Recruteur',
            'interviewer'        => 'Intervieweur',
            'candidate-phone'    => 'Téléphone',
            'medium'             => 'Canal',
            'source'             => 'Source',
            'salary-expected'    => 'Salaire attendu',
            'availability-date'  => 'Date de disponibilité',
        ],

        'filters' => [
            'source'                  => 'Source',
            'medium'                  => 'Canal',
            'candidate'               => 'Candidat',
            'priority'                => 'Priorité',
            'salary-proposed-extra'   => 'Avantages salariaux proposés',
            'salary-expected-extra'   => 'Avantages salariaux attendus',
            'applicant-notes'         => 'Notes du candidat',
            'create-date'             => 'Date de candidature',
            'date-closed'             => 'Date d\'embauche',
            'date-last-stage-updated' => 'Dernière mise à jour de l\'étape',
            'stage'                   => 'Étape',
            'job-position'            => 'Poste',
        ],

        'actions' => [
            'delete' => [
                'notification' => [
                    'title' => 'Candidat supprimé',
                    'body'  => 'Le candidat a été supprimé avec succès.',
                ],
            ],
        ],

        'groups' => [
            'stage'          => 'Étape',
            'job-position'   => 'Poste',
            'candidate-name' => 'Nom du candidat',
            'responsible'    => 'Responsable',
            'creation-date'  => 'Date de création',
            'hired-date'     => 'Date d\'embauche',
            'last-stage'     => 'Dernière étape',
            'refuse-reason'  => 'Motif de refus',
        ],

        'bulk-actions' => [
            'delete' => [
                'notification' => [
                    'title' => 'Employés supprimés',
                    'body'  => 'Les employés ont été supprimés avec succès.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'title' => 'Employés supprimés',
                    'body'  => 'Les employés ont été supprimés avec succès.',
                ],
            ],

            'restore' => [
                'notification' => [
                    'title' => 'Employés restaurés',
                    'body'  => 'Les employés ont été restaurés avec succès.',
                ],
            ],
        ],
    ],

    'infolist' => [
        'sections' => [
            'general-information' => [
                'title' => 'Informations générales',

                'entries' => [
                    'evaluation-good'           => 'Évaluation : Bien',
                    'evaluation-very-good'      => 'Évaluation : Très bien',
                    'evaluation-very-excellent' => 'Évaluation : Excellent',
                    'hired'                     => 'Embauché',
                    'candidate-name'            => 'Nom du candidat',
                    'email'                     => 'E-mails',
                    'phone'                     => 'Téléphone',
                    'linkedin-profile'          => 'Profil LinkedIn',
                    'recruiter'                 => 'Recruteur',
                    'interviewer'               => 'Intervieweur',
                    'tags'                      => 'Étiquettes',
                    'notes'                     => 'Notes',
                    'job-position'              => 'Postes',
                ],
            ],

            'education-and-availability' => [
                'title' => 'Formation & Disponibilité',

                'entries' => [
                    'degree'            => 'Diplôme',
                    'availability-date' => 'Date de disponibilité',
                ],
            ],

            'department' => [
                'title' => 'Département',
            ],

            'salary' => [
                'title' => 'Salaire attendu & proposé',

                'entries' => [
                    'expected-salary'       => 'Salaire attendu',
                    'salary-proposed-extra' => 'Autres avantages',
                    'proposed-salary'       => 'Salaire proposé',
                    'salary-expected-extra' => 'Autres avantages',
                ],
            ],

            'source-and-medium' => [
                'title' => 'Source & Canal',

                'entries' => [
                    'source' => 'Source',
                    'medium' => 'Canal',
                ],
            ],
        ],
    ],
];
