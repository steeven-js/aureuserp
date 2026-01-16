<?php

declare(strict_types=1);

namespace App\Policies;

use Illuminate\Foundation\Auth\User as AuthUser;
use Webkul\Field\Models\Field;
use Illuminate\Auth\Access\HandlesAuthorization;

class FieldPolicy
{
    use HandlesAuthorization;
    
    public function viewAny(AuthUser $authUser, Field $field): bool
    {
        return $authUser->can('view_any_field');
    }

    public function view(AuthUser $authUser, Field $field): bool
    {
        return $authUser->can('view_field');
    }

    public function create(AuthUser $authUser): bool
    {
        return $authUser->can('create_field');
    }

    public function update(AuthUser $authUser, Field $field): bool
    {
        return $authUser->can('update_field');
    }

    public function delete(AuthUser $authUser, Field $field): bool
    {
        return $authUser->can('delete_field');
    }

    public function restore(AuthUser $authUser, Field $field): bool
    {
        return $authUser->can('restore_field');
    }

    public function deleteAny(AuthUser $authUser, Field $field): bool
    {
        return $authUser->can('delete_any_field');
    }

    public function forceDelete(AuthUser $authUser, Field $field): bool
    {
        return $authUser->can('force_delete_field');
    }

    public function forceDeleteAny(AuthUser $authUser, Field $field): bool
    {
        return $authUser->can('force_delete_any_field');
    }

    public function restoreAny(AuthUser $authUser, Field $field): bool
    {
        return $authUser->can('restore_any_field');
    }

}