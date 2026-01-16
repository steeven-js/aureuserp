<?php

declare(strict_types=1);

namespace App\Policies;

use Illuminate\Foundation\Auth\User as AuthUser;
use Webkul\Account\Models\CashRounding;
use Illuminate\Auth\Access\HandlesAuthorization;

class CashRoundingPolicy
{
    use HandlesAuthorization;
    
    public function viewAny(AuthUser $authUser, CashRounding $cashRounding): bool
    {
        return $authUser->can('view_any_cash::rounding');
    }

    public function view(AuthUser $authUser, CashRounding $cashRounding): bool
    {
        return $authUser->can('view_cash::rounding');
    }

    public function create(AuthUser $authUser): bool
    {
        return $authUser->can('create_cash::rounding');
    }

    public function update(AuthUser $authUser, CashRounding $cashRounding): bool
    {
        return $authUser->can('update_cash::rounding');
    }

    public function delete(AuthUser $authUser, CashRounding $cashRounding): bool
    {
        return $authUser->can('delete_cash::rounding');
    }

    public function restore(AuthUser $authUser, CashRounding $cashRounding): bool
    {
        return $authUser->can('restore_cash::rounding');
    }

    public function deleteAny(AuthUser $authUser, CashRounding $cashRounding): bool
    {
        return $authUser->can('delete_any_cash::rounding');
    }

    public function forceDelete(AuthUser $authUser, CashRounding $cashRounding): bool
    {
        return $authUser->can('force_delete_cash::rounding');
    }

    public function forceDeleteAny(AuthUser $authUser, CashRounding $cashRounding): bool
    {
        return $authUser->can('force_delete_any_cash::rounding');
    }

    public function restoreAny(AuthUser $authUser, CashRounding $cashRounding): bool
    {
        return $authUser->can('restore_any_cash::rounding');
    }

    public function reorder(AuthUser $authUser): bool
    {
        return $authUser->can('reorder_cash::rounding');
    }

}