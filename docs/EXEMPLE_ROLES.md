# Exemples pratiques : Création et gestion de rôles

Ce document fournit des exemples concrets pour créer et gérer des rôles dans Aureus ERP.

## Exemple 1 : Créer un rôle "Vendeur"

### Objectif
Créer un rôle permettant aux vendeurs de gérer les factures et les clients, mais sans pouvoir supprimer.

### Étapes

1. **Générer les permissions** (si pas déjà fait)
   ```bash
   php artisan shield:generate-permissions --all
   ```

2. **Créer le rôle via l'interface**
   - Aller sur `/admin/shield/roles`
   - Cliquer sur "Créer"
   - Nom : "Vendeur"
   - Guard : "web" (par défaut)

3. **Sélectionner les permissions dans l'onglet "Resources"**

   **Invoice (Factures)** :
   - ✅ `view_any_invoice::clusters/customers/resources/invoice`
   - ✅ `view_invoice::clusters/customers/resources/invoice`
   - ✅ `create_invoice::clusters/customers/resources/invoice`
   - ✅ `update_invoice::clusters/customers/resources/invoice`
   - ❌ `delete_invoice::clusters/customers/resources/invoice` (ne pas cocher)
   - ❌ `delete_any_invoice::clusters/customers/resources/invoice` (ne pas cocher)

   **Partner (Clients)** :
   - ✅ `view_any_invoice::clusters/customers/resources/partners`
   - ✅ `view_invoice::clusters/customers/resources/partners`
   - ✅ `create_invoice::clusters/customers/resources/partners`
   - ✅ `update_invoice::clusters/customers/resources/partners`
   - ❌ `delete_invoice::clusters/customers/resources/partners` (ne pas cocher)

4. **Sauvegarder**

5. **Assigner le rôle à un utilisateur**
   - Aller sur `/admin/users`
   - Éditer un utilisateur
   - Dans "Rôles", sélectionner "Vendeur"
   - Dans "Resource Permission", choisir "INDIVIDUAL" ou "GROUP"
   - Sauvegarder

## Exemple 2 : Créer un rôle "Comptable"

### Objectif
Créer un rôle permettant aux comptables de gérer les paiements et les factures, avec accès en lecture seule aux autres ressources.

### Étapes

1. **Créer le rôle**
   - Nom : "Comptable"

2. **Sélectionner les permissions**

   **Payment (Paiements)** - Toutes les permissions :
   - ✅ `view_any_accounts::filament/resources/payment`
   - ✅ `view_accounts::filament/resources/payment`
   - ✅ `create_accounts::filament/resources/payment`
   - ✅ `update_accounts::filament/resources/payment`
   - ✅ `delete_accounts::filament/resources/payment`
   - ✅ `delete_any_accounts::filament/resources/payment`

   **Invoice (Factures)** - Lecture et modification uniquement :
   - ✅ `view_any_invoice::clusters/customers/resources/invoice`
   - ✅ `view_invoice::clusters/customers/resources/invoice`
   - ✅ `update_invoice::clusters/customers/resources/invoice`
   - ❌ `create_invoice::clusters/customers/resources/invoice` (ne pas cocher)
   - ❌ `delete_invoice::clusters/customers/resources/invoice` (ne pas cocher)

   **Bill (Factures fournisseurs)** - Toutes les permissions :
   - ✅ Toutes les permissions pour `bill`

3. **Sauvegarder et assigner**

## Exemple 3 : Créer un rôle "Gestionnaire de stock"

### Objectif
Créer un rôle pour gérer uniquement les inventaires et les produits.

### Étapes

1. **Créer le rôle**
   - Nom : "Gestionnaire de stock"

2. **Sélectionner les permissions**

   **Inventory (Inventaire)** :
   - ✅ Toutes les permissions pour les ressources d'inventaire :
     - `ReceiptResource` (Réceptions)
     - `DeliveryResource` (Livraisons)
     - `InternalResource` (Mouvements internes)
     - `QuantityResource` (Quantités)
     - `WarehouseResource` (Entrepôts)
     - `LocationResource` (Emplacements)

   **Product (Produits)** :
   - ✅ Toutes les permissions pour les produits

3. **Sauvegarder et assigner**

## Exemple 4 : Créer un rôle "Lecteur" (Lecture seule)

### Objectif
Créer un rôle permettant uniquement la consultation, sans modification.

### Étapes

1. **Créer le rôle**
   - Nom : "Lecteur"

2. **Sélectionner uniquement les permissions "view" et "view_any"**
   
   Pour chaque ressource importante :
   - ✅ `view_any_*`
   - ✅ `view_*`
   - ❌ Toutes les autres permissions (create, update, delete, etc.)

3. **Sauvegarder et assigner**

## Exemple 5 : Créer un rôle via le seeder

### Utiliser le RoleSeeder

```bash
php artisan db:seed --class=RoleSeeder
```

Cela crée automatiquement les rôles de base :
- Administrateur
- Gestionnaire
- Vendeur
- Comptable
- Lecteur

**Note** : Les permissions doivent être assignées manuellement via l'interface après la création des rôles.

## Vérification des permissions

### Tester les permissions d'un utilisateur

```php
// Dans tinker ou un contrôleur
$user = \Webkul\Security\Models\User::find(1);

// Vérifier un rôle
$user->hasRole('Vendeur'); // true/false

// Vérifier une permission
$user->can('view_any_invoice'); // true/false

// Lister toutes les permissions
$user->getAllPermissions();

// Lister tous les rôles
$user->roles;
```

### Tester dans une ressource Filament

Les permissions sont automatiquement vérifiées par FilamentShield. Si un utilisateur n'a pas la permission, l'action sera masquée ou désactivée.

## Bonnes pratiques

1. **Nommage des rôles** : Utiliser des noms clairs et descriptifs
   - ✅ "Vendeur", "Comptable", "Gestionnaire de stock"
   - ❌ "Role1", "User", "Test"

2. **Principe du moindre privilège** : Donner uniquement les permissions nécessaires
   - Ne pas donner `delete` si ce n'est pas nécessaire
   - Ne pas donner `create` si l'utilisateur ne doit que consulter

3. **Groupement logique** : Grouper les permissions par domaine fonctionnel
   - Ventes : Factures, Clients, Devis
   - Comptabilité : Paiements, Factures, Notes de crédit
   - Inventaire : Produits, Entrepôts, Mouvements

4. **Niveau de scopage** : Choisir le bon niveau de permission
   - **GLOBAL** : Pour les administrateurs
   - **GROUP** : Pour les équipes qui partagent des ressources
   - **INDIVIDUAL** : Pour les utilisateurs qui ne doivent voir que leurs propres ressources

5. **Documentation** : Documenter les rôles et leurs permissions
   - Créer un document listant les rôles et leurs responsabilités
   - Mettre à jour lors de l'ajout de nouvelles permissions

## Dépannage

### L'utilisateur ne voit pas certaines ressources

1. Vérifier que le rôle a bien les permissions `view_any_*` pour la ressource
2. Vérifier que l'utilisateur a bien le rôle assigné
3. Vider le cache : `php artisan permission:cache-reset`

### Les permissions ne s'appliquent pas

1. Vérifier que les permissions existent en base de données
2. Vérifier que le rôle a bien les permissions assignées
3. Vérifier que l'utilisateur a bien le rôle assigné
4. Vider le cache : `php artisan permission:cache-reset`

### Impossible de créer un rôle

1. Vérifier les permissions de l'utilisateur actuel
2. Vérifier que FilamentShield est bien configuré
3. Vérifier les logs pour les erreurs
