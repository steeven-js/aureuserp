<?php

return [
    'form' => [
        'value'                  => 'Valeur',
        'due'                    => 'Échéance',
        'delay-due'              => 'Délai d\'échéance',
        'delay-type'             => 'Type de délai',
        'days-on-the-next-month' => 'Jours du mois suivant',
        'days'                   => 'Jours',
        'payment-term'           => 'Condition de paiement',
    ],

    'table' => [
        'columns' => [
            'due'          => 'Échéance',
            'value'        => 'Valeur',
            'value-amount' => 'Montant de la valeur',
            'after'        => 'Après',
            'delay-type'   => 'Type de délai',
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
];
