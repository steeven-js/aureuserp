# Guide des Rôles et Permissions - Aureus ERP

## Vue d'ensemble

Aureus ERP utilise un système de rôles et permissions basé sur :
- **FilamentShield** : Interface de gestion dans Filament
- **Spatie Laravel Permission** : Gestion des permissions en base de données
- **Modèles personnalisés** : `Webkul\Security\Models\Role`, `Permission`, `User`

## Architecture

```
┌─────────────────┐
│   Utilisateur   │
└────────┬────────┘
         │
         ▼
┌─────────────────┐     ┌──────────────┐
│      Rôle        │────▶│  Permissions │
└─────────────────┘     └──────────────┘
         │
         ▼
┌─────────────────┐
│  Accès Filament │
└─────────────────┘
```

## Accès à l'interface

### Gestion des rôles
- **URL** : `/admin/shield/roles`
- **Navigation** : Menu Filament → Shield → Roles

### Gestion des utilisateurs
- **URL** : `/admin/users`
- **Navigation** : Menu Filament → Utilisateurs

## Création d'un rôle

### Via l'interface

1. Aller sur `/admin/shield/roles`
2. Cliquer sur "Créer"
3. Entrer le nom du rôle
4. Sélectionner les permissions dans les onglets :
   - **Resources** : Permissions pour les ressources (groupées par plugin)
   - **Pages** : Permissions pour les pages
   - **Widgets** : Permissions pour les widgets
5. Cliquer sur "Créer"

### Via le seeder

```bash
php artisan db:seed --class=RoleSeeder
```

Cela crée les rôles de base :
- Administrateur
- Gestionnaire
- Vendeur
- Comptable
- Lecteur

## Génération des permissions

### Générer toutes les permissions

```bash
php artisan shield:generate-permissions --all
```

### Générer uniquement les permissions des ressources

```bash
php artisan shield:generate-permissions --resources
```

### Générer uniquement les permissions des pages

```bash
php artisan shield:generate-permissions --pages
```

### Générer uniquement les permissions des widgets

```bash
php artisan shield:generate-permissions --widgets
```

## Assignation d'un rôle à un utilisateur

1. Aller sur `/admin/users`
2. Créer ou éditer un utilisateur
3. Dans la section "Permissions", sélectionner le(s) rôle(s) dans le champ "Rôles"
4. Configurer le niveau de permission :
   - **GLOBAL** : Accès à toutes les ressources
   - **GROUP** : Accès aux ressources du même groupe/équipe
   - **INDIVIDUAL** : Accès uniquement aux ressources créées par l'utilisateur
5. Sauvegarder

## Format des permissions

### Ressources
Format : `{action}_{plugin}_{resource}`

Exemples :
- `view_any_invoice::clusters/customers/resources/invoice` - Voir la liste des factures
- `create_invoice::clusters/customers/resources/invoice` - Créer une facture
- `update_accounts::filament/resources/payment` - Modifier un paiement
- `delete_invoice::clusters/customers/resources/invoice` - Supprimer une facture

### Pages
Format : `page_{nom_page}`

Exemples :
- `page_Dashboard` - Accès à la page Dashboard
- `page_ManageUsers` - Accès à la page de gestion des utilisateurs

### Widgets
Format : `view_{nom_widget}`

Exemples :
- `view_StatsOverviewWidget` - Voir le widget de statistiques

## Actions disponibles par ressource

Les actions suivantes sont généralement disponibles :
- `view_any` - Voir la liste
- `view` - Voir un enregistrement
- `create` - Créer un enregistrement
- `update` - Modifier un enregistrement
- `delete` - Supprimer un enregistrement
- `delete_any` - Supprimer plusieurs enregistrements
- `restore` - Restaurer un enregistrement supprimé
- `restore_any` - Restaurer plusieurs enregistrements
- `force_delete` - Supprimer définitivement
- `force_delete_any` - Supprimer définitivement plusieurs
- `reorder` - Réordonner (si applicable)

## Vérification des permissions dans le code

### Dans les Resources Filament

Les permissions sont vérifiées automatiquement via les Policies.

### Dans les Pages Filament

Utiliser le trait `HasPageShield` :

```php
use BezhanSalleh\FilamentShield\Traits\HasPageShield;

class MyPage extends Page
{
    use HasPageShield;
    // ...
}
```

### Vérification manuelle

```php
// Vérifier une permission
if (auth()->user()->can('view_any_invoice')) {
    // ...
}

// Vérifier un rôle
if (auth()->user()->hasRole('admin')) {
    // ...
}

// Vérifier plusieurs rôles
if (auth()->user()->hasAnyRole(['admin', 'manager'])) {
    // ...
}

// Vérifier toutes les permissions
if (auth()->user()->hasAllPermissions(['view_any_invoice', 'create_invoice'])) {
    // ...
}
```

## Niveaux de scopage des permissions

Le système supporte trois niveaux de permissions :

1. **GLOBAL** : L'utilisateur a accès à toutes les ressources (peu importe qui les a créées)
2. **GROUP** : L'utilisateur a accès aux ressources des utilisateurs du même groupe/équipe
3. **INDIVIDUAL** : L'utilisateur a accès uniquement aux ressources qu'il a créées

Le niveau est configuré via le champ `resource_permission` dans la table `users`.

## Exemple pratique : Créer un rôle "Vendeur"

### Étape 1 : Générer les permissions

```bash
php artisan shield:generate-permissions --all
```

### Étape 2 : Créer le rôle

1. Aller sur `/admin/shield/roles`
2. Cliquer "Créer"
3. Nom : "Vendeur"
4. Dans l'onglet "Resources", sélectionner les permissions pour :
   - **Invoice** (Factures) :
     - `view_any_invoice::clusters/customers/resources/invoice`
     - `view_invoice::clusters/customers/resources/invoice`
     - `create_invoice::clusters/customers/resources/invoice`
     - `update_invoice::clusters/customers/resources/invoice`
   - **Partner** (Clients) :
     - `view_any_invoice::clusters/customers/resources/partners`
     - `view_invoice::clusters/customers/resources/partners`
     - `create_invoice::clusters/customers/resources/partners`
     - `update_invoice::clusters/customers/resources/partners`
5. Sauvegarder

### Étape 3 : Assigner le rôle

1. Aller sur `/admin/users`
2. Éditer un utilisateur
3. Dans "Rôles", sélectionner "Vendeur"
4. Dans "Resource Permission", choisir "INDIVIDUAL" ou "GROUP"
5. Sauvegarder

## Commandes utiles

### Vider le cache des permissions

```bash
php artisan permission:cache-reset
```

### Seeder les permissions Shield

```bash
php artisan db:seed --class=ShieldSeeder
```

### Lister les permissions d'un utilisateur

```php
$user = User::find(1);
$permissions = $user->getAllPermissions();
dd($permissions);
```

### Lister les rôles d'un utilisateur

```php
$user = User::find(1);
$roles = $user->roles;
dd($roles);
```

## Fichiers de configuration

- **Configuration Shield** : `config/filament-shield.php`
- **Configuration Permissions** : `config/permission.php`

## Fichiers clés

1. **Modèle Role** : `plugins/webkul/security/src/Models/Role.php`
2. **Modèle Permission** : `plugins/webkul/security/src/Models/Permission.php`
3. **Modèle User** : `plugins/webkul/security/src/Models/User.php`
4. **Resource Role** : `plugins/webkul/security/src/Filament/Resources/RoleResource.php`
5. **Resource User** : `plugins/webkul/security/src/Filament/Resources/UserResource.php`

## Dépannage

### Les permissions ne s'appliquent pas

1. Vider le cache : `php artisan permission:cache-reset`
2. Vérifier que l'utilisateur a bien un rôle assigné
3. Vérifier que le rôle a bien les permissions assignées
4. Vérifier que la permission existe en base de données

### Les permissions ne sont pas générées

1. Exécuter : `php artisan shield:generate-permissions --all`
2. Vérifier que les ressources sont bien découvertes par Filament
3. Vérifier la configuration dans `config/filament-shield.php`

### L'interface des rôles n'est pas accessible

1. Vérifier que FilamentShield est bien installé et configuré
2. Vérifier les permissions de l'utilisateur actuel
3. Vérifier que le plugin est bien enregistré dans `AdminPanelProvider`
