<?php

declare(strict_types=1);

namespace App\Policies;

use Illuminate\Foundation\Auth\User as AuthUser;
use Webkul\Account\Models\Account;
use Illuminate\Auth\Access\HandlesAuthorization;

class AccountPolicy
{
    use HandlesAuthorization;
    
    public function viewAny(AuthUser $authUser, Account $account): bool
    {
        return $authUser->can('view_any_account');
    }

    public function view(AuthUser $authUser, Account $account): bool
    {
        return $authUser->can('view_account');
    }

    public function create(AuthUser $authUser): bool
    {
        return $authUser->can('create_account');
    }

    public function update(AuthUser $authUser, Account $account): bool
    {
        return $authUser->can('update_account');
    }

    public function delete(AuthUser $authUser, Account $account): bool
    {
        return $authUser->can('delete_account');
    }

    public function restore(AuthUser $authUser, Account $account): bool
    {
        return $authUser->can('restore_account');
    }

    public function deleteAny(AuthUser $authUser, Account $account): bool
    {
        return $authUser->can('delete_any_account');
    }

    public function forceDelete(AuthUser $authUser, Account $account): bool
    {
        return $authUser->can('force_delete_account');
    }

    public function forceDeleteAny(AuthUser $authUser, Account $account): bool
    {
        return $authUser->can('force_delete_any_account');
    }

    public function restoreAny(AuthUser $authUser, Account $account): bool
    {
        return $authUser->can('restore_any_account');
    }

    public function reorder(AuthUser $authUser): bool
    {
        return $authUser->can('reorder_account');
    }

}