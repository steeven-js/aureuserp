<?php

return [
    'label' => 'Étiquettes',

    'form' => [
        'fields' => [
            'type'          => 'Type d\'étiquettes',
            'quantity'      => 'Quantité',
            'format'        => 'Format',
            'layout'        => 'Disposition des étiquettes',
            'quantity-type' => 'Quantité à imprimer',

            'quantity-type-options' => [
                'operation' => 'Quantité de l\'opération',
                'custom'    => 'Quantité personnalisée',
                'per-slot'  => 'Une par lot/NS',
                'per-unit'  => 'Une par unité',
            ],

            'type-options' => [
                'product' => 'Étiquettes produits',
                'lot'     => 'Étiquettes lot/NS',
            ],

            'format-options' => [
                'dymo'       => 'Dymo',
                '2x7_price'  => '2x7 avec prix',
                '4x7_price'  => '4x7 avec prix',
                '4x12'       => '4x12',
                '4x12_price' => '4x12 avec prix',
            ],
        ],
    ],
];
