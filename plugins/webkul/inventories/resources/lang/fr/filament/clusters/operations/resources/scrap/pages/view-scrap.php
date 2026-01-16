<?php

return [
    'header-actions' => [
        'delete' => [
            'notification' => [
                'success' => [
                    'title' => 'Rebut supprimé',
                    'body'  => 'Le rebut a été supprimé avec succès.',
                ],

                'error' => [
                    'title' => 'Les rebuts n\'ont pas pu être supprimés',
                    'body'  => 'Les rebuts ne peuvent pas être supprimés car ils sont actuellement utilisés.',
                ],
            ],
        ],
    ],
];
