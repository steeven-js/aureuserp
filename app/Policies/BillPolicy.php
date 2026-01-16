<?php

declare(strict_types=1);

namespace App\Policies;

use Illuminate\Foundation\Auth\User as AuthUser;
use Webkul\Invoice\Models\Bill;
use Illuminate\Auth\Access\HandlesAuthorization;

class BillPolicy
{
    use HandlesAuthorization;
    
    public function viewAny(AuthUser $authUser, Bill $bill): bool
    {
        return $authUser->can('view_any_bill');
    }

    public function view(AuthUser $authUser, Bill $bill): bool
    {
        return $authUser->can('view_bill');
    }

    public function create(AuthUser $authUser): bool
    {
        return $authUser->can('create_bill');
    }

    public function update(AuthUser $authUser, Bill $bill): bool
    {
        return $authUser->can('update_bill');
    }

    public function delete(AuthUser $authUser, Bill $bill): bool
    {
        return $authUser->can('delete_bill');
    }

    public function deleteAny(AuthUser $authUser, Bill $bill): bool
    {
        return $authUser->can('delete_any_bill');
    }

}