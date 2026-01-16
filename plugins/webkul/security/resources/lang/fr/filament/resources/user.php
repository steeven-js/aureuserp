<?php

return [
    'title' => 'Utilisateurs',

    'navigation' => [
        'title' => 'Utilisateurs',
        'group' => 'Paramètres',
    ],

    'global-search' => [
        'name'  => 'Nom',
        'email' => 'E-mail',
    ],

    'form' => [
        'sections' => [
            'general-information' => [
                'title'  => 'Informations générales',
                'fields' => [
                    'name'                  => 'Nom',
                    'email'                 => 'E-mail',
                    'password'              => 'Mot de passe',
                    'password-confirmation' => 'Confirmation du mot de passe',
                ],
            ],

            'permissions' => [
                'title'  => 'Permissions',
                'fields' => [
                    'roles'               => 'Rôles',
                    'permissions'         => 'Permissions',
                    'resource-permission' => 'Permission de ressource',
                    'teams'               => 'Équipes',
                ],
            ],

            'avatar' => [
                'title' => 'Avatar',
            ],

            'lang-and-status' => [
                'title'  => 'Langue et statut',
                'fields' => [
                    'language' => 'Langue préférée',
                    'status'   => 'Statut',
                ],
            ],

            'multi-company' => [
                'title'             => 'Multi-sociétés',
                'allowed-companies' => 'Sociétés autorisées',
                'default-company'   => 'Société par défaut',
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'avatar'              => 'Avatar',
            'name'                => 'Nom',
            'email'               => 'E-mail',
            'teams'               => 'Équipes',
            'role'                => 'Rôle',
            'resource-permission' => 'Permission de ressource',
            'default-company'     => 'Société par défaut',
            'allowed-company'     => 'Société autorisée',
            'created-at'          => 'Créé le',
            'updated-at'          => 'Mis à jour le',
        ],

        'filters' => [
            'resource-permission' => 'Permission de ressource',
            'teams'               => 'Équipes',
            'roles'               => 'Rôles',
            'default-company'     => 'Société par défaut',
            'allowed-companies'   => 'Sociétés autorisées',
        ],

        'actions' => [
            'edit' => [
                'notification' => [
                    'title' => 'Utilisateur modifié',
                    'body'  => 'L\'utilisateur a été modifié avec succès.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Utilisateur supprimé',
                    'body'  => 'L\'utilisateur a été supprimé avec succès.',
                ],
            ],

            'restore' => [
                'notification' => [
                    'title' => 'Utilisateur restauré',
                    'body'  => 'L\'utilisateur a été restauré avec succès.',
                ],
            ],
        ],

        'bulk-actions' => [
            'restore' => [
                'notification' => [
                    'title' => 'Utilisateurs restaurés',
                    'body'  => 'Les utilisateurs ont été restaurés avec succès.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'Utilisateurs supprimés',
                    'body'  => 'Les utilisateurs ont été supprimés avec succès.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'title' => 'Utilisateurs supprimés définitivement',
                    'body'  => 'Les utilisateurs ont été supprimés définitivement avec succès.',
                    'error' => [
                        'title' => 'L\'utilisateur n\'a pas pu être supprimé',
                        'body'  => 'L\'utilisateur ne peut pas être supprimé car il est actuellement utilisé.',
                    ],
                ],
            ],
        ],

        'empty-state-actions' => [
            'create' => [
                'notification' => [
                    'title' => 'Utilisateurs créés',
                    'body'  => 'Les utilisateurs ont été créés avec succès.',
                ],
            ],
        ],
    ],

    'infolist' => [
        'sections' => [
            'general-information' => [
                'title'   => 'Informations générales',
                'entries' => [
                    'name'                  => 'Nom',
                    'email'                 => 'E-mail',
                    'password'              => 'Mot de passe',
                    'password-confirmation' => 'Confirmation du mot de passe',
                ],
            ],

            'permissions' => [
                'title'   => 'Permissions',
                'entries' => [
                    'roles'               => 'Rôles',
                    'permissions'         => 'Permissions',
                    'resource-permission' => 'Permission de ressource',
                    'teams'               => 'Équipes',
                ],
            ],

            'avatar' => [
                'title' => 'Avatar',
            ],

            'lang-and-status' => [
                'title'   => 'Langue et statut',
                'entries' => [
                    'language' => 'Langue préférée',
                    'status'   => 'Statut',
                ],
            ],

            'multi-company' => [
                'title'             => 'Multi-sociétés',
                'allowed-companies' => 'Sociétés autorisées',
                'default-company'   => 'Société par défaut',
            ],
        ],
    ],
];
