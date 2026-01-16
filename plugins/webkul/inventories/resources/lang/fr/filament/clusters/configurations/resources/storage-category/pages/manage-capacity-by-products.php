<?php

return [
    'title' => 'Capacité par produits',

    'form' => [
        'product' => 'Produit',
        'qty'     => 'Quantité',
    ],

    'table' => [
        'header-actions' => [
            'create' => [
                'label' => 'Ajouter une capacité par produit',

                'notification' => [
                    'title' => 'Capacité par produit créée',
                    'body'  => 'La capacité par produit a été ajoutée avec succès.',
                ],
            ],
        ],

        'columns' => [
            'product' => 'Produit',
            'qty'     => 'Quantité',
        ],

        'actions' => [
            'edit' => [
                'notification' => [
                    'title' => 'Capacité par produit mise à jour',
                    'body'  => 'La capacité par produit a été mise à jour avec succès.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Capacité par produit supprimée',
                    'body'  => 'La capacité par produit a été supprimée avec succès.',
                ],
            ],
        ],
    ],
];
