<?php

return [
    'form' => [
        'fields' => [
            'name'               => 'Nom',
            'rounding-precision' => 'Précision d\'arrondi',
            'rounding-strategy'  => 'Stratégie d\'arrondi',
            'profit-account'     => 'Compte de profit',
            'loss-account'       => 'Compte de perte',
            'rounding-method'    => 'Méthode d\'arrondi',
        ],
    ],

    'table' => [
        'columns' => [
            'name'                 => 'Nom',
            'rounding-strategy'    => 'Stratégie d\'arrondi',
            'rounding-method'      => 'Méthode d\'arrondi',
            'created-by'           => 'Créé par',
            'profit-account'       => 'Compte de profit',
            'loss-account'         => 'Compte de perte',
        ],

        'groups' => [
            'name'              => 'Nom',
            'rounding-strategy' => 'Stratégie d\'arrondi',
            'rounding-method'   => 'Méthode d\'arrondi',
            'created-by'        => 'Créé par',
            'profit-account'    => 'Compte de profit',
            'loss-account'      => 'Compte de perte',
        ],

        'actions' => [
            'delete' => [
                'notification' => [
                    'title' => 'Arrondi de caisse supprimé',
                    'body'  => 'L\'arrondi de caisse a été supprimé avec succès.',
                ],
            ],
        ],

        'bulk-actions' => [
            'delete' => [
                'notification' => [
                    'title' => 'Arrondis de caisse supprimés',
                    'body'  => 'Les arrondis de caisse ont été supprimés avec succès.',
                ],
            ],
        ],
    ],

    'infolist' => [
        'entries' => [
            'name'               => 'Nom',
            'rounding-precision' => 'Précision d\'arrondi',
            'rounding-strategy'  => 'Stratégie d\'arrondi',
            'profit-account'     => 'Compte de profit',
            'loss-account'       => 'Compte de perte',
            'rounding-method'    => 'Méthode d\'arrondi',
        ],
    ],
];
