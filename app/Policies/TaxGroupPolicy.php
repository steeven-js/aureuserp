<?php

declare(strict_types=1);

namespace App\Policies;

use Illuminate\Foundation\Auth\User as AuthUser;
use Webkul\Invoice\Models\TaxGroup;
use Illuminate\Auth\Access\HandlesAuthorization;

class TaxGroupPolicy
{
    use HandlesAuthorization;
    
    public function viewAny(AuthUser $authUser, TaxGroup $taxGroup): bool
    {
        return $authUser->can('view_any_tax::group');
    }

    public function view(AuthUser $authUser, TaxGroup $taxGroup): bool
    {
        return $authUser->can('view_tax::group');
    }

    public function create(AuthUser $authUser): bool
    {
        return $authUser->can('create_tax::group');
    }

    public function update(AuthUser $authUser, TaxGroup $taxGroup): bool
    {
        return $authUser->can('update_tax::group');
    }

    public function delete(AuthUser $authUser, TaxGroup $taxGroup): bool
    {
        return $authUser->can('delete_tax::group');
    }

    public function deleteAny(AuthUser $authUser, TaxGroup $taxGroup): bool
    {
        return $authUser->can('delete_any_tax::group');
    }

}