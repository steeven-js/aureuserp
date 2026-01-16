<?php

declare(strict_types=1);

namespace App\Policies;

use Illuminate\Foundation\Auth\User as AuthUser;
use Webkul\Product\Models\Packaging;
use Illuminate\Auth\Access\HandlesAuthorization;

class PackagingPolicy
{
    use HandlesAuthorization;
    
    public function viewAny(AuthUser $authUser, Packaging $packaging): bool
    {
        return $authUser->can('view_any_packaging');
    }

    public function view(AuthUser $authUser, Packaging $packaging): bool
    {
        return $authUser->can('view_packaging');
    }

    public function create(AuthUser $authUser): bool
    {
        return $authUser->can('create_packaging');
    }

    public function update(AuthUser $authUser, Packaging $packaging): bool
    {
        return $authUser->can('update_packaging');
    }

    public function delete(AuthUser $authUser, Packaging $packaging): bool
    {
        return $authUser->can('delete_packaging');
    }

    public function deleteAny(AuthUser $authUser, Packaging $packaging): bool
    {
        return $authUser->can('delete_any_packaging');
    }

}