<?php

return [
    'form' => [
        'sections' => [
            'general' => [
                'title' => 'Général',

                'fields' => [
                    'company'    => 'Société',
                    'avatar'     => 'Avatar',
                    'tax-id'     => 'Numéro de TVA',
                    'job-title'  => 'Fonction',
                    'phone'      => 'Téléphone',
                    'mobile'     => 'Mobile',
                    'email'      => 'E-mail',
                    'website'    => 'Site web',
                    'title'      => 'Titre',
                    'name'       => 'Nom',
                    'short-name' => 'Nom abrégé',
                    'tags'       => 'Étiquettes',
                    'color'      => 'Couleur',
                ],

                'address' => [
                    'title' => 'Adresse',

                    'fields' => [
                        'street1'  => 'Rue 1',
                        'street2'  => 'Rue 2',
                        'city'     => 'Ville',
                        'zip'      => 'Code postal',
                        'state'    => 'État/Région',
                        'country'  => 'Pays',
                        'name'     => 'Nom',
                        'code'     => 'Code',
                    ],
                ],
            ],
        ],

        'tabs' => [
            'sales-purchase' => [
                'title' => 'Ventes et achats',

                'fields' => [
                    'responsible'           => 'Responsable',
                    'responsible-hint-text' => 'Il s\'agit du commercial interne responsable de ce client',
                    'company-id'            => 'Numéro d\'entreprise',
                    'company-id-hint-text'  => 'Le numéro de registre de la société, utilisé s\'il est différent du numéro de TVA. Il doit être unique parmi tous les partenaires du même pays.',
                    'reference'             => 'Référence',
                    'industry'              => 'Secteur d\'activité',
                ],
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'parent'     => 'Parent',
        ],

        'groups' => [
            'account-type' => 'Type de compte',
            'parent'       => 'Parent',
            'title'        => 'Titre',
            'job-title'    => 'Fonction',
            'industry'     => 'Secteur d\'activité',
        ],

        'filters' => [
            'account-type'     => 'Type de compte',
            'name'             => 'Nom',
            'email'            => 'E-mail',
            'parent'           => 'Parent',
            'title'            => 'Titre',
            'tax-id'           => 'Numéro de TVA',
            'phone'            => 'Téléphone',
            'mobile'           => 'Mobile',
            'job-title'        => 'Fonction',
            'website'          => 'Site web',
            'company-registry' => 'Registre de la société',
            'responsible'      => 'Responsable',
            'reference'        => 'Référence',
            'parent'           => 'Parent',
            'creator'          => 'Créateur',
            'company'          => 'Société',
            'industry'         => 'Secteur d\'activité',
            'industry'         => 'Secteur d\'activité',
        ],

        'actions' => [
            'edit' => [
                'notification' => [
                    'title' => 'Contact mis à jour',
                    'body'  => 'Le contact a été mis à jour avec succès.',
                ],
            ],

            'restore' => [
                'notification' => [
                    'title' => 'Contact restauré',
                    'body'  => 'Le contact a été restauré avec succès.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Contact supprimé',
                    'body'  => 'Le contact a été supprimé avec succès.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'success' => [
                        'title' => 'Contact supprimé définitivement',
                        'body'  => 'Le contact a été supprimé définitivement avec succès.',
                    ],

                    'error' => [
                        'title' => 'Le contact n\'a pas pu être supprimé',
                        'body'  => 'Le contact ne peut pas être supprimé car il est actuellement utilisé.',
                    ],
                ],
            ],
        ],

        'bulk-actions' => [
            'restore' => [
                'notification' => [
                    'title' => 'Contacts restaurés',
                    'body'  => 'Les contacts ont été restaurés avec succès.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Contacts supprimés',
                    'body'  => 'Les contacts ont été supprimés avec succès.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'success' => [
                        'title' => 'Contacts supprimés définitivement',
                        'body'  => 'Les contacts ont été supprimés définitivement avec succès.',
                    ],

                    'error' => [
                        'title' => 'Les contacts n\'ont pas pu être supprimés',
                        'body'  => 'Les contacts ne peuvent pas être supprimés car ils sont actuellement utilisés.',
                    ],
                ],
            ],
        ],
    ],

    'infolist' => [
        'sections' => [
            'general' => [
                'title' => 'Général',

                'fields' => [
                    'company'    => 'Société',
                    'avatar'     => 'Avatar',
                    'tax-id'     => 'Numéro de TVA',
                    'job-title'  => 'Fonction',
                    'phone'      => 'Téléphone',
                    'mobile'     => 'Mobile',
                    'email'      => 'E-mail',
                    'website'    => 'Site web',
                    'title'      => 'Titre',
                    'name'       => 'Nom',
                    'short-name' => 'Nom abrégé',
                    'tags'       => 'Étiquettes',
                ],

                'address' => [
                    'title' => 'Adresse',

                    'fields' => [
                        'street1'  => 'Rue 1',
                        'street2'  => 'Rue 2',
                        'city'     => 'Ville',
                        'zip'      => 'Code postal',
                        'state'    => 'État/Région',
                        'country'  => 'Pays',
                        'name'     => 'Nom',
                        'code'     => 'Code',
                    ],
                ],
            ],
        ],

        'tabs' => [
            'sales-purchase' => [
                'title' => 'Ventes et achats',

                'fields' => [
                    'responsible'           => 'Responsable',
                    'responsible-hint-text' => 'Il s\'agit du commercial interne responsable de ce client',
                    'company-id'            => 'Numéro d\'entreprise',
                    'company-id-hint-text'  => 'Le numéro de registre de la société. Utilisez-le s\'il est différent du numéro de TVA. Il doit être unique parmi tous les partenaires du même pays',
                    'reference'             => 'Référence',
                    'industry'              => 'Secteur d\'activité',
                ],
            ],
        ],
    ],
];
