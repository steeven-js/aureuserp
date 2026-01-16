<?php

declare(strict_types=1);

namespace App\Policies;

use Illuminate\Foundation\Auth\User as AuthUser;
use Webkul\Product\Models\Attribute;
use Illuminate\Auth\Access\HandlesAuthorization;

class AttributePolicy
{
    use HandlesAuthorization;
    
    public function viewAny(AuthUser $authUser, Attribute $attribute): bool
    {
        return $authUser->can('view_any_attribute');
    }

    public function view(AuthUser $authUser, Attribute $attribute): bool
    {
        return $authUser->can('view_attribute');
    }

    public function create(AuthUser $authUser): bool
    {
        return $authUser->can('create_attribute');
    }

    public function update(AuthUser $authUser, Attribute $attribute): bool
    {
        return $authUser->can('update_attribute');
    }

    public function delete(AuthUser $authUser, Attribute $attribute): bool
    {
        return $authUser->can('delete_attribute');
    }

    public function restore(AuthUser $authUser, Attribute $attribute): bool
    {
        return $authUser->can('restore_attribute');
    }

    public function deleteAny(AuthUser $authUser, Attribute $attribute): bool
    {
        return $authUser->can('delete_any_attribute');
    }

    public function forceDelete(AuthUser $authUser, Attribute $attribute): bool
    {
        return $authUser->can('force_delete_attribute');
    }

    public function forceDeleteAny(AuthUser $authUser, Attribute $attribute): bool
    {
        return $authUser->can('force_delete_any_attribute');
    }

    public function restoreAny(AuthUser $authUser, Attribute $attribute): bool
    {
        return $authUser->can('restore_any_attribute');
    }

}