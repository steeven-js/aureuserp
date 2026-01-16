<?php

return [
    'title' => 'Types de compétences',

    'navigation' => [
        'title' => 'Types de compétences',
        'group' => 'Employé',
    ],

    'form' => [
        'sections' => [
            'fields' => [
                'name'       => 'Nom',
                'color'      => 'Couleur',
                'status'     => 'Statut',
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'id'         => 'ID',
            'name'       => 'Type de compétence',
            'status'     => 'Statut',
            'color'      => 'Couleur',
            'skills'     => 'Compétences',
            'levels'     => 'Niveaux',
            'created-by' => 'Créé par',
            'created-at' => 'Créé le',
            'updated-at' => 'Mis à jour le',
        ],

        'filters' => [
            'skill-levels' => 'Niveaux de compétence',
            'skills'       => 'Compétences',
            'created-by'   => 'Créé par',
            'status'       => 'Statut',
            'updated-at'   => 'Mis à jour le',
            'created-at'   => 'Créé le',
        ],

        'groups' => [
            'name'       => 'Type de compétence',
            'color'      => 'Couleur',
            'status'     => 'Statut',
            'created-by' => 'Créé par',
            'created-at' => 'Créé le',
            'updated-at' => 'Mis à jour le',
        ],

        'actions' => [
            'restore' => [
                'notification' => [
                    'title' => 'Type de compétence restauré',
                    'body'  => 'Le type de compétence a été restauré avec succès.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Type de compétence supprimé',
                    'body'  => 'Le type de compétence a été supprimé avec succès.',
                ],
            ],
        ],

        'bulk-actions' => [
            'restore' => [
                'notification' => [
                    'title' => 'Types de compétences restaurés',
                    'body'  => 'Les types de compétences ont été restaurés avec succès.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Types de compétences supprimés',
                    'body'  => 'Les types de compétences ont été supprimés avec succès.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'title' => 'Types de compétences supprimés définitivement',
                    'body'  => 'Les types de compétences ont été supprimés définitivement avec succès.',
                ],
            ],
        ],

        'empty-state-actions' => [
            'create' => [
                'notification' => [
                    'title' => 'Types de compétences',
                    'body'  => 'Le type de compétence a été créé avec succès.',
                ],
            ],
        ],
    ],

    'infolist' => [
        'sections' => [
            'entries' => [
                'name'   => 'Type de compétence',
                'color'  => 'Couleur',
                'status' => 'Statut',
            ],
        ],
    ],
];
