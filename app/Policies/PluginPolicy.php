<?php

declare(strict_types=1);

namespace App\Policies;

use Illuminate\Foundation\Auth\User as AuthUser;
use Webkul\Support\Models\Plugin;
use Illuminate\Auth\Access\HandlesAuthorization;

class PluginPolicy
{
    use HandlesAuthorization;
    
    public function viewAny(AuthUser $authUser, Plugin $plugin): bool
    {
        return $authUser->can('view_any_plugin');
    }

    public function view(AuthUser $authUser, Plugin $plugin): bool
    {
        return $authUser->can('view_plugin');
    }

    public function create(AuthUser $authUser): bool
    {
        return $authUser->can('create_plugin');
    }

    public function update(AuthUser $authUser, Plugin $plugin): bool
    {
        return $authUser->can('update_plugin');
    }

    public function delete(AuthUser $authUser, Plugin $plugin): bool
    {
        return $authUser->can('delete_plugin');
    }

    public function restore(AuthUser $authUser, Plugin $plugin): bool
    {
        return $authUser->can('restore_plugin');
    }

    public function deleteAny(AuthUser $authUser, Plugin $plugin): bool
    {
        return $authUser->can('delete_any_plugin');
    }

    public function forceDelete(AuthUser $authUser, Plugin $plugin): bool
    {
        return $authUser->can('force_delete_plugin');
    }

    public function forceDeleteAny(AuthUser $authUser, Plugin $plugin): bool
    {
        return $authUser->can('force_delete_any_plugin');
    }

    public function restoreAny(AuthUser $authUser, Plugin $plugin): bool
    {
        return $authUser->can('restore_any_plugin');
    }

    public function reorder(AuthUser $authUser): bool
    {
        return $authUser->can('reorder_plugin');
    }

}