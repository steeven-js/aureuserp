<?php

return [
    'title' => 'Conditions de paiement',

    'navigation' => [
        'title' => 'Conditions de paiement',
        'group' => 'Facturation',
    ],

    'global-search' => [
        'company-name' => 'Nom de la société',
        'payment-term' => 'Condition de paiement',
    ],

    'form' => [
        'sections' => [
            'fields' => [
                'payment-term'         => 'Condition de paiement',
                'early-discount'       => 'Escompte',
                'discount-days-prefix' => 'si payé dans les',
                'discount-days-suffix' => 'jours',
                'reduced-tax'          => 'Taxe réduite',
                'note'                 => 'Note',
                'status'               => 'Statut',
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'payment-term'       => 'Condition de paiement',
            'company'            => 'Société',
            'discount-days'      => 'Jours d\'escompte',
            'early-pay-discount' => 'Escompte pour paiement anticipé',
            'status'             => 'Statut',
            'early-discount'     => 'Escompte',
            'display-on-invoice' => 'Afficher sur la facture',
            'created-by'         => 'Créé par',
            'created-at'         => 'Créé le',
            'updated-at'         => 'Mis à jour le',
        ],

        'groups' => [
            'payment-term'        => 'Condition de paiement',
            'company-name'        => 'Nom de la société',
            'discount-days'       => 'Jours d\'escompte',
            'early-pay-discount'  => 'Escompte pour paiement anticipé',
            'payment-term'        => 'Condition de paiement',
            'display-on-invoice'  => 'Afficher sur la facture',
            'early-discount'      => 'Escompte',
            'discount-percentage' => 'Pourcentage d\'escompte',
        ],

        'actions' => [
            'restore' => [
                'notification' => [
                    'title' => 'Condition de paiement restaurée',
                    'body'  => 'La condition de paiement a été restaurée avec succès.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Condition de paiement supprimée',
                    'body'  => 'La condition de paiement a été supprimée avec succès.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'title' => 'Condition de paiement supprimée définitivement',
                    'body'  => 'La condition de paiement a été supprimée définitivement avec succès.',
                ],
            ],
        ],

        'bulk-actions' => [
            'restore' => [
                'notification' => [
                    'title' => 'Conditions de paiement restaurées',
                    'body'  => 'Les conditions de paiement ont été restaurées avec succès.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Conditions de paiement supprimées',
                    'body'  => 'Les conditions de paiement ont été supprimées avec succès.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'title' => 'Conditions de paiement supprimées définitivement',
                    'body'  => 'Les conditions de paiement ont été supprimées définitivement avec succès.',
                ],
            ],
        ],
    ],

    'infolist' => [
        'sections' => [
            'entries' => [
                'payment-term'         => 'Condition de paiement',
                'early-discount'       => 'Escompte',
                'discount-percentage'  => 'Pourcentage d\'escompte',
                'discount-days-prefix' => 'si payé dans les',
                'discount-days-suffix' => 'jours',
                'reduced-tax'          => 'Taxe réduite',
                'note'                 => 'Note',
                'status'               => 'Statut',
            ],
        ],
    ],
];
