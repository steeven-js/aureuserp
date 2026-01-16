<?php

return [
    'title' => 'Positions fiscales',

    'navigation' => [
        'title' => 'Positions fiscales',
        'group' => 'Comptabilité',
    ],

    'global-search' => [
        'zip-from' => 'Code postal de',
        'zip-to'   => 'Code postal à',
        'name'     => 'Nom',
    ],

    'form' => [
        'fields' => [
            'name'                 => 'Nom',
            'foreign-vat'          => 'TVA étrangère',
            'country'              => 'Pays',
            'country-group'        => 'Groupe de pays',
            'zip-from'             => 'Code postal de',
            'zip-to'               => 'Code postal à',
            'detect-automatically' => 'Détection automatique',
            'notes'                => 'Notes',
        ],
    ],

    'table' => [
        'columns' => [
            'name'                 => 'Nom',
            'company'              => 'Société',
            'country'              => 'Pays',
            'country-group'        => 'Groupe de pays',
            'created-by'           => 'Créé par',
            'zip-from'             => 'Code postal de',
            'zip-to'               => 'Code postal à',
            'status'               => 'Statut',
            'detect-automatically' => 'Détection automatique',
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
                    'title' => 'Position fiscale supprimée',
                    'body'  => 'La position fiscale a été supprimée avec succès.',
                ],
            ],
        ],
    ],

    'infolist' => [
        'entries' => [
            'name'                 => 'Nom',
            'foreign-vat'          => 'TVA étrangère',
            'country'              => 'Pays',
            'country-group'        => 'Groupe de pays',
            'zip-from'             => 'Code postal de',
            'zip-to'               => 'Code postal à',
            'detect-automatically' => 'Détection automatique',
            'notes'                => 'Notes',
        ],
    ],
];
