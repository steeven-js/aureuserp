<?php

return [
    'title' => 'Poste',

    'navigation' => [
        'title' => 'Postes',
    ],

    'table' => [
        'columns' => [
            'name'         => 'Nom',
            'manager-name' => 'Responsable',
            'company-name' => 'Entreprise',
        ],

        'actions' => [
            'applications' => [
                'new-applications' => ':count nouvelles candidatures',
            ],

            'to-recruitment' => [
                'to-recruitment' => ':count à recruter',
            ],

            'total-application' => [
                'total-application' => ':count candidatures',
            ],
        ],
    ],

];
