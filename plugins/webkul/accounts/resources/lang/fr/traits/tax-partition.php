<?php

return [
    'form' => [
        'factor-percent'    => 'Pourcentage du facteur',
        'factor-ratio'      => 'Ratio du facteur',
        'repartition-type'  => 'Type de répartition',
        'document-type'     => 'Type de document',
        'account'           => 'Compte',
        'tax'               => 'Taxe',
        'tax-closing-entry' => 'Écriture de clôture de taxe',
    ],

    'table' => [
        'columns' => [
            'factor-percent'    => 'Pourcentage du facteur (%)',
            'account'           => 'Compte',
            'tax'               => 'Taxe',
            'company'           => 'Société',
            'repartition-type'  => 'Type de répartition',
            'document-type'     => 'Type de document',
            'tax-closing-entry' => 'Écriture de clôture de taxe',
        ],

        'actions' => [
            'edit' => [
                'notification' => [
                    'title' => 'Répartition de taxe mise à jour',
                    'body'  => 'La répartition de taxe a été mise à jour avec succès.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Répartition de taxe supprimée',
                    'body'  => 'La répartition de taxe a été supprimée avec succès.',
                ],
            ],
        ],

        'header-actions' => [
            'create' => [
                'notification' => [
                    'title' => 'Répartition de taxe créée',
                    'body'  => 'La répartition de taxe a été créée avec succès.',
                ],
            ],
        ],
    ],
];
