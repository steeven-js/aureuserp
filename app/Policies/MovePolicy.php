<?php

declare(strict_types=1);

namespace App\Policies;

use Illuminate\Foundation\Auth\User as AuthUser;
use Webkul\Account\Models\Move;
use Illuminate\Auth\Access\HandlesAuthorization;

class MovePolicy
{
    use HandlesAuthorization;
    
    public function viewAny(AuthUser $authUser, Move $move): bool
    {
        return $authUser->can('view_any_refund');
    }

    public function view(AuthUser $authUser, Move $move): bool
    {
        return $authUser->can('view_refund');
    }

    public function create(AuthUser $authUser): bool
    {
        return $authUser->can('create_refund');
    }

    public function update(AuthUser $authUser, Move $move): bool
    {
        return $authUser->can('update_refund');
    }

    public function delete(AuthUser $authUser, Move $move): bool
    {
        return $authUser->can('delete_refund');
    }

    public function deleteAny(AuthUser $authUser, Move $move): bool
    {
        return $authUser->can('delete_any_refund');
    }

}