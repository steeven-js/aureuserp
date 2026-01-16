<?php

declare(strict_types=1);

namespace App\Policies;

use Illuminate\Foundation\Auth\User as AuthUser;
use Webkul\Account\Models\Journal;
use Illuminate\Auth\Access\HandlesAuthorization;

class JournalPolicy
{
    use HandlesAuthorization;
    
    public function viewAny(AuthUser $authUser, Journal $journal): bool
    {
        return $authUser->can('view_any_journal');
    }

    public function view(AuthUser $authUser, Journal $journal): bool
    {
        return $authUser->can('view_journal');
    }

    public function create(AuthUser $authUser): bool
    {
        return $authUser->can('create_journal');
    }

    public function update(AuthUser $authUser, Journal $journal): bool
    {
        return $authUser->can('update_journal');
    }

    public function delete(AuthUser $authUser, Journal $journal): bool
    {
        return $authUser->can('delete_journal');
    }

    public function restore(AuthUser $authUser, Journal $journal): bool
    {
        return $authUser->can('restore_journal');
    }

    public function deleteAny(AuthUser $authUser, Journal $journal): bool
    {
        return $authUser->can('delete_any_journal');
    }

    public function forceDelete(AuthUser $authUser, Journal $journal): bool
    {
        return $authUser->can('force_delete_journal');
    }

    public function forceDeleteAny(AuthUser $authUser, Journal $journal): bool
    {
        return $authUser->can('force_delete_any_journal');
    }

    public function restoreAny(AuthUser $authUser, Journal $journal): bool
    {
        return $authUser->can('restore_any_journal');
    }

    public function reorder(AuthUser $authUser): bool
    {
        return $authUser->can('reorder_journal');
    }

}