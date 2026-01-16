<?php

declare(strict_types=1);

namespace App\Policies;

use Illuminate\Foundation\Auth\User as AuthUser;
use Webkul\Invoice\Models\Payment;
use Illuminate\Auth\Access\HandlesAuthorization;

class PaymentPolicy
{
    use HandlesAuthorization;
    
    public function viewAny(AuthUser $authUser, Payment $payment): bool
    {
        return $authUser->can('view_any_payments');
    }

    public function view(AuthUser $authUser, Payment $payment): bool
    {
        return $authUser->can('view_payments');
    }

    public function create(AuthUser $authUser): bool
    {
        return $authUser->can('create_payments');
    }

    public function update(AuthUser $authUser, Payment $payment): bool
    {
        return $authUser->can('update_payments');
    }

    public function delete(AuthUser $authUser, Payment $payment): bool
    {
        return $authUser->can('delete_payments');
    }

    public function deleteAny(AuthUser $authUser, Payment $payment): bool
    {
        return $authUser->can('delete_any_payments');
    }

}