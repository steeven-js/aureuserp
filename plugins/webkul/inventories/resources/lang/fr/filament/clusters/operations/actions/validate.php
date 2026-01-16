<?php

return [
    'label'             => 'Valider',
    'modal-heading'     => 'Créer un reliquat ?',
    'modal-description' => 'Créez un reliquat si les produits restants seront traités ultérieurement. Sinon, ne générez pas de reliquat.',

    'extra-modal-footer-actions' => [
        'no-backorder' => [
            'label' => 'Pas de reliquat',
        ],
    ],

    'notification' => [
        'warning' => [
            'lines-missing' => [
                'title' => 'Aucune quantité n\'est réservée',
                'body'  => 'Aucune quantité n\'est réservée pour le transfert.',
            ],

            'lot-missing' => [
                'title' => 'Fournir le lot/numéro de série',
                'body'  => 'Vous devez fournir un lot/numéro de série pour les produits',
            ],

            'serial-qty' => [
                'title' => 'Numéro de série déjà attribué',
                'body'  => 'Le numéro de série a déjà été attribué à un autre produit.',
            ],

            'partial-package' => [
                'title' => 'Impossible de déplacer le même contenu de colis',
                'body'  => 'Vous ne pouvez pas déplacer le même contenu de colis plus d\'une fois dans un seul transfert ou diviser le colis entre deux emplacements.',
            ],
        ],
    ],
];
