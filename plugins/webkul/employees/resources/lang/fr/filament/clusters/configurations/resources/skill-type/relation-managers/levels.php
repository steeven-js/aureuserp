<?php

return [
    'form' => [
        'name'          => 'Nom',
        'level'         => 'Niveau',
        'default-level' => 'Niveau par défaut',
    ],

    'table' => [
        'columns' => [
            'name'          => 'Nom',
            'level'         => 'Niveau',
            'default-level' => 'Niveau par défaut',
            'created-at'    => 'Créé le',
            'updated-at'    => 'Mis à jour le',
        ],

        'groups' => [
            'created-at' => 'Créé le',
        ],

        'filters' => [
            'deleted-records' => 'Enregistrements supprimés',
        ],

        'actions' => [
            'create' => [
                'notification' => [
                    'title' => 'Niveau de compétence créé',
                    'body'  => 'Le niveau de compétence a été créé avec succès.',
                ],
            ],

            'edit' => [
                'notification' => [
                    'title' => 'Niveau de compétence mis à jour',
                    'body'  => 'Le niveau de compétence a été mis à jour avec succès.',
                ],
            ],

            'restore' => [
                'notification' => [
                    'title' => 'Niveau de compétence restauré',
                    'body'  => 'Le niveau de compétence a été restauré avec succès.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Niveau de compétence supprimé',
                    'body'  => 'Le niveau de compétence a été supprimé avec succès.',
                ],
            ],
        ],

        'bulk-actions' => [
            'delete' => [
                'notification' => [
                    'title' => 'Niveaux de compétences supprimés',
                    'body'  => 'Les niveaux de compétences ont été supprimés avec succès.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'title' => 'Niveaux de compétences supprimés définitivement',
                    'body'  => 'Les niveaux de compétences ont été supprimés définitivement avec succès.',
                ],
            ],

            'restore' => [
                'notification' => [
                    'title' => 'Niveaux de compétences restaurés',
                    'body'  => 'Les niveaux de compétences ont été restaurés avec succès.',
                ],
            ],
        ],
    ],

    'infolist' => [
        'entries' => [
            'name'          => 'Nom',
            'level'         => 'Niveau',
            'default-level' => 'Niveau par défaut',
        ],
    ],
];
