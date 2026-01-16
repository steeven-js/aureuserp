<?php

namespace Database\Seeders;

use BezhanSalleh\FilamentShield\Support\Utils;
use Illuminate\Database\Seeder;
use Spatie\Permission\PermissionRegistrar;
use Webkul\Security\Models\Role;
use Webkul\Security\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * Crée des rôles de base avec des permissions communes
     */
    public function run(): void
    {
        // Vider le cache des permissions
        app()[PermissionRegistrar::class]->forgetCachedPermissions();

        $guard = Utils::getFilamentAuthGuard();

        // Rôle Administrateur - Toutes les permissions
        $adminRole = Role::firstOrCreate([
            'name' => 'Administrateur',
            'guard_name' => $guard,
        ]);

        // Rôle Gestionnaire - Permissions de gestion (view, create, update, mais pas delete)
        $managerRole = Role::firstOrCreate([
            'name' => 'Gestionnaire',
            'guard_name' => $guard,
        ]);

        // Rôle Vendeur - Permissions limitées aux ventes
        $sellerRole = Role::firstOrCreate([
            'name' => 'Vendeur',
            'guard_name' => $guard,
        ]);

        // Rôle Comptable - Permissions limitées à la comptabilité
        $accountantRole = Role::firstOrCreate([
            'name' => 'Comptable',
            'guard_name' => $guard,
        ]);

        // Rôle Lecteur - Permissions en lecture seule
        $viewerRole = Role::firstOrCreate([
            'name' => 'Lecteur',
            'guard_name' => $guard,
        ]);

        $this->command->info('Rôles de base créés :');
        $this->command->info('- Administrateur');
        $this->command->info('- Gestionnaire');
        $this->command->info('- Vendeur');
        $this->command->info('- Comptable');
        $this->command->info('- Lecteur');
        $this->command->info('');
        $this->command->info('Note: Les permissions doivent être assignées manuellement via l\'interface /admin/shield/roles');
        $this->command->info('ou en utilisant la commande: php artisan shield:generate --all');
    }
}
