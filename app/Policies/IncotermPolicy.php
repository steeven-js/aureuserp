<?php

declare(strict_types=1);

namespace App\Policies;

use Illuminate\Foundation\Auth\User as AuthUser;
use Webkul\Invoice\Models\Incoterm;
use Illuminate\Auth\Access\HandlesAuthorization;

class IncotermPolicy
{
    use HandlesAuthorization;
    
    public function viewAny(AuthUser $authUser, Incoterm $incoterm): bool
    {
        return $authUser->can('view_any_inco::term');
    }

    public function view(AuthUser $authUser, Incoterm $incoterm): bool
    {
        return $authUser->can('view_inco::term');
    }

    public function create(AuthUser $authUser): bool
    {
        return $authUser->can('create_inco::term');
    }

    public function update(AuthUser $authUser, Incoterm $incoterm): bool
    {
        return $authUser->can('update_inco::term');
    }

    public function delete(AuthUser $authUser, Incoterm $incoterm): bool
    {
        return $authUser->can('delete_inco::term');
    }

    public function restore(AuthUser $authUser, Incoterm $incoterm): bool
    {
        return $authUser->can('restore_inco::term');
    }

    public function deleteAny(AuthUser $authUser, Incoterm $incoterm): bool
    {
        return $authUser->can('delete_any_inco::term');
    }

    public function forceDelete(AuthUser $authUser, Incoterm $incoterm): bool
    {
        return $authUser->can('force_delete_inco::term');
    }

    public function forceDeleteAny(AuthUser $authUser, Incoterm $incoterm): bool
    {
        return $authUser->can('force_delete_any_inco::term');
    }

    public function restoreAny(AuthUser $authUser, Incoterm $incoterm): bool
    {
        return $authUser->can('restore_any_inco::term');
    }

}