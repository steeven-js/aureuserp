<?php

return [
    'title' => 'Canaux',

    'navigation' => [
        'title' => 'Canaux',
        'group' => 'UTMs',
    ],

    'form' => [
        'fields' => [
            'name'             => 'Nom',
            'name-placeholder' => 'Entrez le nom du canal',
        ],
    ],

    'table' => [
        'columns' => [
            'id'         => 'ID',
            'name'       => 'Nom',
            'created-by' => 'Créé par',
            'created-at' => 'Créé le',
            'updated-at' => 'Mis à jour le',
        ],

        'filters' => [
            'name'       => 'Nom',
            'created-by' => 'Créé par',
            'updated-at' => 'Mis à jour le',
            'created-at' => 'Créé le',
        ],

        'actions' => [
            'edit' => [
                'notification' => [
                    'title' => 'Canal mis à jour',
                    'body'  => 'Le canal a été mis à jour avec succès.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Canal supprimé',
                    'body'  => 'Le canal a été supprimé avec succès.',
                ],
            ],
        ],

        'bulk-actions' => [
            'delete' => [
                'notification' => [
                    'title' => 'Canaux supprimés',
                    'body'  => 'Les canaux ont été supprimés avec succès.',
                ],
            ],
        ],

        'empty-state-action' => [
            'create' => [
                'notification' => [
                    'title' => 'Canal créé',
                    'body'  => 'Le canal a été créé avec succès.',
                ],
            ],
        ],
    ],

    'infolist' => [
        'name' => 'Nom',
    ],
];
