<?php

return [
    'notification' => [
        'title' => 'Page mise à jour',
        'body'  => 'La page a été mise à jour avec succès.',
    ],

    'header-actions' => [
        'draft' => [
            'label' => 'Mettre en brouillon',

            'notification' => [
                'title' => 'Page mise en brouillon',
                'body'  => 'La page a été mise en brouillon avec succès.',
            ],
        ],

        'publish' => [
            'label' => 'Publier',

            'notification' => [
                'title' => 'Page publiée',
                'body'  => 'La page a été publiée avec succès.',
            ],
        ],

        'delete' => [
            'notification' => [
                'title' => 'Page supprimée',
                'body'  => 'La page a été supprimée avec succès.',
            ],
        ],
    ],
];
