<?php

return [
    'title' => 'Types de contrat',

    'navigation' => [
        'title' => 'Types de contrat',
        'group' => 'Recrutement',
    ],

    'form' => [
        'fields' => [
            'name'    => 'Type de contrat',
            'code'    => 'Code',
            'country' => 'Pays',
        ],
    ],

    'table' => [
        'columns' => [
            'id'         => 'ID',
            'name'       => 'Type de contrat',
            'code'       => 'Code',
            'country'    => 'Pays',
            'created-by' => 'Créé par',
            'created-at' => 'Créé le',
            'updated-at' => 'Mis à jour le',
        ],

        'filters' => [
            'name'       => 'Type de contrat',
            'country'    => 'Pays',
            'created-by' => 'Créé par',
            'updated-at' => 'Mis à jour le',
            'created-at' => 'Créé le',
        ],

        'groups' => [
            'name'       => 'Type de contrat',
            'country'    => 'Pays',
            'code'       => 'Code',
            'created-by' => 'Créé par',
            'created-at' => 'Créé le',
            'updated-at' => 'Mis à jour le',
        ],

        'actions' => [
            'edit' => [
                'notification' => [
                    'title' => 'Type de contrat',
                    'body'  => 'Le type de contrat a été modifié avec succès.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Type de contrat supprimé',
                    'body'  => 'Le type de contrat a été supprimé avec succès.',
                ],
            ],
        ],

        'bulk-actions' => [
            'delete' => [
                'notification' => [
                    'title' => 'Types de contrat supprimés',
                    'body'  => 'Les types de contrat ont été supprimés avec succès.',
                ],
            ],
        ],

        'empty-state-actions' => [
            'create' => [
                'notification' => [
                    'title' => 'Types de contrat',
                    'body'  => 'Le type de contrat a été créé avec succès.',
                ],
            ],
        ],
    ],

    'infolist' => [
        'entries' => [
            'name'    => 'Type de contrat',
            'code'    => 'Code',
            'country' => 'Pays',
        ],
    ],
];
