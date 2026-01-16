<?php

return [
    'title' => 'Groupes de taxes',

    'navigation' => [
        'title' => 'Groupes de taxes',
        'group' => 'Comptabilité',
    ],

    'global-search' => [
        'company-name' => 'Nom de la société',
        'payment-term' => 'Condition de paiement',
    ],

    'form' => [
        'sections' => [
            'fields' => [
                'company'            => 'Société',
                'country'            => 'Pays',
                'name'               => 'Nom',
                'preceding-subtotal' => 'Sous-total précédent',
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'company'            => 'Société',
            'country'            => 'Pays',
            'created-by'         => 'Créé par',
            'name'               => 'Nom',
            'preceding-subtotal' => 'Sous-total précédent',
            'created-at'         => 'Créé le',
            'updated-at'         => 'Mis à jour le',
        ],

        'groups' => [
            'name'       => 'Nom',
            'company'    => 'Société',
            'country'    => 'Pays',
            'created-by' => 'Créé par',
            'created-at' => 'Créé le',
            'updated-at' => 'Mis à jour le',
        ],

        'actions' => [
            'delete' => [
                'notification' => [
                    'title' => 'Condition de paiement supprimée',
                    'body'  => 'La condition de paiement a été supprimée avec succès.',
                ],
            ],
        ],

        'bulk-actions' => [
            'delete' => [
                'notification' => [
                    'title' => 'Groupes de taxes supprimés',
                    'body'  => 'Les groupes de taxes ont été supprimés avec succès.',
                ],
            ],
        ],
    ],

    'infolist' => [
        'sections' => [
            'entries' => [
                'company'            => 'Société',
                'country'            => 'Pays',
                'name'               => 'Nom',
                'preceding-subtotal' => 'Sous-total précédent',
            ],
        ],
    ],
];
