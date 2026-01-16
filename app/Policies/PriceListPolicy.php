<?php

declare(strict_types=1);

namespace App\Policies;

use Illuminate\Foundation\Auth\User as AuthUser;
use Webkul\Product\Models\PriceList;
use Illuminate\Auth\Access\HandlesAuthorization;

class PriceListPolicy
{
    use HandlesAuthorization;
    
    public function viewAny(AuthUser $authUser, PriceList $priceList): bool
    {
        return $authUser->can('view_any_price::list');
    }

    public function view(AuthUser $authUser, PriceList $priceList): bool
    {
        return $authUser->can('view_price::list');
    }

    public function create(AuthUser $authUser): bool
    {
        return $authUser->can('create_price::list');
    }

    public function update(AuthUser $authUser, PriceList $priceList): bool
    {
        return $authUser->can('update_price::list');
    }

    public function delete(AuthUser $authUser, PriceList $priceList): bool
    {
        return $authUser->can('delete_price::list');
    }

    public function restore(AuthUser $authUser, PriceList $priceList): bool
    {
        return $authUser->can('restore_price::list');
    }

    public function deleteAny(AuthUser $authUser, PriceList $priceList): bool
    {
        return $authUser->can('delete_any_price::list');
    }

    public function forceDelete(AuthUser $authUser, PriceList $priceList): bool
    {
        return $authUser->can('force_delete_price::list');
    }

    public function forceDeleteAny(AuthUser $authUser, PriceList $priceList): bool
    {
        return $authUser->can('force_delete_any_price::list');
    }

    public function restoreAny(AuthUser $authUser, PriceList $priceList): bool
    {
        return $authUser->can('restore_any_price::list');
    }

    public function reorder(AuthUser $authUser): bool
    {
        return $authUser->can('reorder_price::list');
    }

}