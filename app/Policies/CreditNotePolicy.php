<?php

declare(strict_types=1);

namespace App\Policies;

use Illuminate\Foundation\Auth\User as AuthUser;
use Webkul\Invoice\Models\CreditNote;
use Illuminate\Auth\Access\HandlesAuthorization;

class CreditNotePolicy
{
    use HandlesAuthorization;
    
    public function viewAny(AuthUser $authUser, CreditNote $creditNote): bool
    {
        return $authUser->can('view_any_credit::notes');
    }

    public function view(AuthUser $authUser, CreditNote $creditNote): bool
    {
        return $authUser->can('view_credit::notes');
    }

    public function create(AuthUser $authUser): bool
    {
        return $authUser->can('create_credit::notes');
    }

    public function update(AuthUser $authUser, CreditNote $creditNote): bool
    {
        return $authUser->can('update_credit::notes');
    }

    public function delete(AuthUser $authUser, CreditNote $creditNote): bool
    {
        return $authUser->can('delete_credit::notes');
    }

    public function deleteAny(AuthUser $authUser, CreditNote $creditNote): bool
    {
        return $authUser->can('delete_any_credit::notes');
    }

}