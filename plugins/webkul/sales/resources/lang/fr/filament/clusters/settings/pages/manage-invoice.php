<?php

return [
    'title' => 'Gérer les factures',

    'breadcrumb' => 'Gérer les factures',

    'navigation' => [
        'title' => 'Gérer les factures',
    ],

    'form' => [
        'invoice-policy' => [
            'label'      => 'Politique de facturation',
            'label-help' => 'Définir comment les factures sont générées à partir des commandes de vente.',
            'options'    => [
                'order'    => 'Générer la facture sur la base des quantités commandées',
                'delivery' => 'Générer la facture sur la base des quantités livrées',
            ],
        ],
    ],
];
