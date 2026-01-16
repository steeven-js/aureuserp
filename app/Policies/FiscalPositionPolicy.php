<?php

declare(strict_types=1);

namespace App\Policies;

use Illuminate\Foundation\Auth\User as AuthUser;
use Webkul\Account\Models\FiscalPosition;
use Illuminate\Auth\Access\HandlesAuthorization;

class FiscalPositionPolicy
{
    use HandlesAuthorization;
    
    public function viewAny(AuthUser $authUser, FiscalPosition $fiscalPosition): bool
    {
        return $authUser->can('view_any_fiscal::position');
    }

    public function view(AuthUser $authUser, FiscalPosition $fiscalPosition): bool
    {
        return $authUser->can('view_fiscal::position');
    }

    public function create(AuthUser $authUser): bool
    {
        return $authUser->can('create_fiscal::position');
    }

    public function update(AuthUser $authUser, FiscalPosition $fiscalPosition): bool
    {
        return $authUser->can('update_fiscal::position');
    }

    public function delete(AuthUser $authUser, FiscalPosition $fiscalPosition): bool
    {
        return $authUser->can('delete_fiscal::position');
    }

    public function restore(AuthUser $authUser, FiscalPosition $fiscalPosition): bool
    {
        return $authUser->can('restore_fiscal::position');
    }

    public function deleteAny(AuthUser $authUser, FiscalPosition $fiscalPosition): bool
    {
        return $authUser->can('delete_any_fiscal::position');
    }

    public function forceDelete(AuthUser $authUser, FiscalPosition $fiscalPosition): bool
    {
        return $authUser->can('force_delete_fiscal::position');
    }

    public function forceDeleteAny(AuthUser $authUser, FiscalPosition $fiscalPosition): bool
    {
        return $authUser->can('force_delete_any_fiscal::position');
    }

    public function restoreAny(AuthUser $authUser, FiscalPosition $fiscalPosition): bool
    {
        return $authUser->can('restore_any_fiscal::position');
    }

    public function reorder(AuthUser $authUser): bool
    {
        return $authUser->can('reorder_fiscal::position');
    }

}