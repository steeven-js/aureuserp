<?php

return [
    'title' => 'Gérer les devis et commandes',

    'breadcrumb' => 'Gérer les devis et commandes',

    'navigation' => [
        'title' => 'Gérer les devis et commandes',
    ],

    'form' => [
        'fields' => [
            'validity-suffix'         => 'jours',
            'validity'                => 'Validité par défaut du devis',
            'validity-help'           => 'Le nombre de jours par défaut pendant lequel un devis est valide.',
            'lock-confirm-sales'      => 'Verrouiller les ventes confirmées',
            'lock-confirm-sales-help' => 'Si activé, la commande de vente sera verrouillée après confirmation.',
        ],
    ],
];
