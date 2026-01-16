<?php

return [
    'setup' => [
        'title'        => 'Note de journal',
        'submit-title' => 'Enregistrer',

        'form' => [
            'fields' => [
                'hide-subject'            => 'Masquer le sujet',
                'add-subject'             => 'Ajouter un sujet',
                'subject'                 => 'Sujet',
                'write-message-here'      => 'Écrivez votre message ici',
                'attachments-helper-text' => 'Taille max du fichier : 10 Mo. Types autorisés : Images, PDF, Word, Excel, Texte',
            ],
        ],

        'actions' => [
            'notification' => [
                'success' => [
                    'title' => 'Note de journal ajoutée',
                    'body'  => 'Votre note de journal a été ajoutée avec succès.',
                ],

                'error' => [
                    'title' => 'Erreur d\'ajout de la note',
                    'body'  => 'Échec de l\'ajout de votre note de journal',
                ],
            ],
        ],
    ],
];
