<?php

return [

    'navigation' => [
        'group' => 'Extensions',
    ],

    'title' => 'Extension',

    'table' => [
        'version'             => 'Version',
        'dependencies'        => 'Dépendances',
        'dependencies_suffix' => 'Dépendances',
    ],

    'status' => [
        'installed'     => 'Installé',
        'not_installed' => 'Non installé',
    ],

    'filters' => [
        'installation_status' => 'Statut d\'installation',
        'all_plugins'         => 'Toutes les extensions',
        'installed'           => 'Installées',
        'not_installed'       => 'Non installées',
        'active_status'       => 'Statut actif',
        'author'              => 'Auteur',
        'webkul'              => 'Webkul',
        'third_party'         => 'Tiers',
    ],

    'actions' => [
        'install' => [
            'title'       => 'Installer',
            'heading'     => 'Installer l\'extension :name',
            'description' => "Êtes-vous sûr de vouloir installer l'extension ':name' ? Cela exécutera les migrations et les seeders.",
            'submit'      => 'Installer l\'extension',
        ],
        'uninstall' => [
            'title'      => 'Désinstaller',
            'heading'    => 'Désinstaller l\'extension',
            'submit'     => 'Désinstaller l\'extension',
        ],
    ],

    'notifications' => [
        'installed' => [
            'title' => 'Extension installée avec succès',
            'body'  => "L'extension ':name' a été installée.",
        ],
        'installed-failed' => [
            'title' => 'Échec de l\'installation',
        ],
        'uninstalled' => [
            'title' => 'Extension désinstallée avec succès',
            'body'  => "L'extension ':name' a été désinstallée.",
        ],
        'uninstalled-failed' => [
            'title' => 'Échec de la désinstallation',
        ],
    ],

    'infolist' => [
        'section'  => [
            'plugin'       => 'Informations sur l\'extension',
            'dependencies' => 'Dépendances',
        ],
        'name'         => 'Nom de l\'extension',
        'version'      => 'Version',
        'dependencies' => 'Extensions requises',
        'dependents'   => 'Extensions dépendantes',
        'is_installed' => 'Statut d\'installation',
        'license'      => 'Licence',
        'summary'      => 'Description',

        'dependencies-repeater' => [
            'title'        => 'Extensions requises',
            'name'         => 'Nom de l\'extension',
            'is_installed' => 'Installée',
            'placeholder'  => 'Aucune dépendance requise',
        ],

        'dependents-repeater' => [
            'title'        => 'Extensions dépendantes',
            'name'         => 'Nom de l\'extension',
            'is_installed' => 'Installée',
            'placeholder'  => 'Aucune extension dépendante',
        ],

    ],

];
