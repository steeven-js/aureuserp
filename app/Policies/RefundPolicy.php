<?php

declare(strict_types=1);

namespace App\Policies;

use Illuminate\Foundation\Auth\User as AuthUser;
use Webkul\Invoice\Models\Refund;
use Illuminate\Auth\Access\HandlesAuthorization;

class RefundPolicy
{
    use HandlesAuthorization;
    
    public function viewAny(AuthUser $authUser, Refund $refund): bool
    {
        return $authUser->can('view_any_refund');
    }

    public function view(AuthUser $authUser, Refund $refund): bool
    {
        return $authUser->can('view_refund');
    }

    public function create(AuthUser $authUser): bool
    {
        return $authUser->can('create_refund');
    }

    public function update(AuthUser $authUser, Refund $refund): bool
    {
        return $authUser->can('update_refund');
    }

    public function delete(AuthUser $authUser, Refund $refund): bool
    {
        return $authUser->can('delete_refund');
    }

    public function deleteAny(AuthUser $authUser, Refund $refund): bool
    {
        return $authUser->can('delete_any_refund');
    }

}