<?php

return [
    'navigation' => [
        'title' => 'Produits',
        'group' => 'Inventaire',
    ],

    'form' => [
        'sections' => [
            'general' => [
                'title' => 'Général',

                'fields' => [
                    'receive-from'         => 'Recevoir de',
                    'contact'              => 'Contact',
                    'delivery-address'     => 'Adresse de livraison',
                    'operation-type'       => 'Type d\'opération',
                    'source-location'      => 'Emplacement source',
                    'destination-location' => 'Emplacement de destination',
                ],
            ],
        ],

        'tabs' => [
            'operations' => [
                'title' => 'Opérations',

                'columns' => [
                    'product'        => 'Produit',
                    'final-location' => 'Emplacement final',
                    'description'    => 'Description',
                    'scheduled-at'   => 'Prévu le',
                    'deadline'       => 'Date limite',
                    'packaging'      => 'Conditionnement',
                    'demand'         => 'Demande',
                    'quantity'       => 'Quantité',
                    'unit'           => 'Unité',
                    'picked'         => 'Prélevé',
                ],

                'fields' => [
                    'product'        => 'Produit',
                    'final-location' => 'Emplacement final',
                    'description'    => 'Description',
                    'scheduled-at'   => 'Prévu le',
                    'deadline'       => 'Date limite',
                    'packaging'      => 'Conditionnement',
                    'demand'         => 'Demande',
                    'quantity'       => 'Quantité',
                    'unit'           => 'Unité',
                    'picked'         => 'Prélevé',

                    'lines' => [
                        'modal-heading' => 'Gérer les mouvements de stock',
                        'add-line'      => 'Ajouter une ligne',

                        'fields' => [
                            'lot'       => 'Lot/Numéro de série',
                            'pick-from' => 'Prélever de',
                            'location'  => 'Stocker dans',
                            'package'   => 'Colis de destination',
                            'quantity'  => 'Quantité',
                            'uom'       => 'Unité de mesure',
                        ],
                    ],
                ],
            ],

            'additional' => [
                'title' => 'Supplémentaire',

                'fields' => [
                    'responsible'                  => 'Responsable',
                    'shipping-policy'              => 'Politique d\'expédition',
                    'shipping-policy-hint-tooltip' => 'Définit si les marchandises doivent être livrées partiellement ou en une seule fois.',
                    'scheduled-at'                 => 'Prévu le',
                    'scheduled-at-hint-tooltip'    => 'La date prévue pour le traitement de la première partie de l\'expédition. Définir manuellement une valeur ici l\'appliquera comme date prévue pour tous les mouvements de stock.',
                    'source-document'              => 'Document source',
                    'source-document-hint-tooltip' => 'Référence du document',
                ],
            ],

            'note' => [
                'title' => 'Note',

                'fields' => [

                ],
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'favorite'        => 'Favori',
            'reference'       => 'Référence',
            'from'            => 'De',
            'to'              => 'Vers',
            'contact'         => 'Contact',
            'responsible'     => 'Responsable',
            'scheduled-at'    => 'Prévu le',
            'deadline'        => 'Date limite',
            'closed-at'       => 'Clôturé le',
            'source-document' => 'Document source',
            'operation-type'  => 'Type d\'opération',
            'company'         => 'Société',
            'state'           => 'État',
            'deleted-at'      => 'Supprimé le',
            'created-at'      => 'Créé le',
            'updated-at'      => 'Mis à jour le',
        ],

        'groups' => [
            'state'           => 'État',
            'source-document' => 'Document source',
            'operation-type'  => 'Type d\'opération',
            'scheduled-at'    => 'Prévu le',
            'created-at'      => 'Créé le',
        ],

        'filters' => [
            'name'                 => 'Nom',
            'state'                => 'État',
            'partner'              => 'Partenaire',
            'responsible'          => 'Responsable',
            'owner'                => 'Propriétaire',
            'source-location'      => 'Emplacement source',
            'destination-location' => 'Emplacement de destination',
            'deadline'             => 'Date limite',
            'scheduled-at'         => 'Prévu le',
            'closed-at'            => 'Clôturé le',
            'created-at'           => 'Créé le',
            'updated-at'           => 'Mis à jour le',
            'company'              => 'Société',
            'creator'              => 'Créateur',
        ],
    ],

    'infolist' => [
        'sections' => [
            'general' => [
                'title'   => 'Informations générales',
                'entries' => [
                    'contact'              => 'Contact',
                    'operation-type'       => 'Type d\'opération',
                    'source-location'      => 'Emplacement source',
                    'destination-location' => 'Emplacement de destination',
                ],
            ],
        ],

        'tabs' => [
            'operations' => [
                'title'   => 'Opérations',
                'entries' => [
                    'product'        => 'Produit',
                    'final-location' => 'Emplacement final',
                    'description'    => 'Description',
                    'scheduled-at'   => 'Prévu le',
                    'deadline'       => 'Date limite',
                    'packaging'      => 'Conditionnement',
                    'demand'         => 'Demande',
                    'quantity'       => 'Quantité',
                    'unit'           => 'Unité',
                    'picked'         => 'Prélevé',
                ],
            ],
            'additional' => [
                'title'   => 'Informations supplémentaires',
                'entries' => [
                    'responsible'     => 'Responsable',
                    'shipping-policy' => 'Politique d\'expédition',
                    'scheduled-at'    => 'Prévu le',
                    'source-document' => 'Document source',
                ],
            ],
            'note' => [
                'title' => 'Note',
            ],
        ],
    ],

    'tabs' => [
        'todo'     => 'À faire',
        'my'       => 'Mes transferts',
        'starred'  => 'Favoris',
        'draft'    => 'Brouillon',
        'waiting'  => 'En attente',
        'ready'    => 'Prêt',
        'done'     => 'Fait',
        'canceled' => 'Annulé',
    ],
];
