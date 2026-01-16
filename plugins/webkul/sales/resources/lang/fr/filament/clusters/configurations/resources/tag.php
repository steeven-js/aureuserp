<?php

return [
    'title' => 'Étiquette',

    'navigation' => [
        'title' => 'Étiquette',
        'group' => 'Commandes de vente',
    ],

    'form' => [
        'fields' => [
            'name'  => 'Nom',
            'color' => 'Couleur',
        ],
    ],

    'table' => [
        'columns' => [
            'created-by' => 'Créé par',
            'name'       => 'Nom',
            'color'      => 'Couleur',
        ],
        'actions' => [
            'edit' => [
                'notification' => [
                    'title' => 'Étiquette de produit mise à jour',
                    'body'  => 'L\'étiquette de produit a été mise à jour avec succès.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Étiquette de produit supprimée',
                    'body'  => 'L\'étiquette de produit a été supprimée avec succès.',
                ],
            ],
        ],
        'bulk-actions' => [
            'delete' => [
                'notification' => [
                    'title' => 'Étiquette de produit supprimée',
                    'body'  => 'L\'étiquette de produit a été supprimée avec succès.',
                ],
            ],
        ],
    ],

    'infolist' => [
        'entries' => [
            'name'  => 'Nom',
            'color' => 'Couleur',
        ],
    ],
];
