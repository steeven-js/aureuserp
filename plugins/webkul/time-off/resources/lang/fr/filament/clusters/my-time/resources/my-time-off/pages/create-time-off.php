<?php

return [
    'notification' => [
        'success' => [
            'title' => 'Congé créé',
            'body'  => 'Le congé a été créé avec succès.',
        ],

        'overlap' => [
            'title' => 'Demande de congé chevauchante',
            'body'  => 'Les dates de congé sélectionnées chevauchent une demande existante. Veuillez choisir des dates différentes.',
        ],

        'warning' => [
            'title' => 'Vous n\'avez pas de compte employé',
            'body'  => 'Vous n\'avez pas de compte employé. Veuillez contacter votre administrateur.',
        ],

        'invalid_half_day_leave' => [
            'title' => 'Demande de congé invalide',
            'body'  => 'Le congé d\'une demi-journée ne peut être demandé que pour un seul jour.',
        ],

        'leave_request_denied_no_allocation' => [
            'title' => 'Demande de congé refusée',
            'body'  => 'Vous n\'avez aucune attribution de congé pour :leaveType.',
        ],

        'leave_request_denied_insufficient_balance' => [
            'title' => 'Demande de congé refusée',
            'body'  => 'Solde de congé insuffisant. Vous avez :available_balance jour(s) disponible(s). Demandé : :requested_days jour(s).',
        ],
    ],
];
