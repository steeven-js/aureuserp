<?php

return [
    'form' => [
        'fields' => [
            'tax-source'      => 'Taxe source',
            'tax-destination' => 'Taxe de destination',
        ],
    ],

    'table' => [
        'columns' => [
            'tax-source'      => 'Taxe source',
            'tax-destination' => 'Taxe de destination',
        ],

        'actions' => [
            'edit' => [
                'notification' => [
                    'title' => 'Échéance de paiement mise à jour',
                    'body'  => 'L\'échéance de paiement a été mise à jour avec succès.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Échéance de paiement supprimée',
                    'body'  => 'L\'échéance de paiement a été supprimée avec succès.',
                ],
            ],
        ],

        'header-actions' => [
            'create' => [
                'notification' => [
                    'title' => 'Échéance de paiement créée',
                    'body'  => 'L\'échéance de paiement a été créée avec succès.',
                ],
            ],
        ],
    ],

    'infolist' => [
        'entries' => [
            'tax-source'      => 'Taxe source',
            'tax-destination' => 'Taxe de destination',
        ],
    ],
];
