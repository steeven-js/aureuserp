<?php

declare(strict_types=1);

namespace App\Policies;

use Illuminate\Foundation\Auth\User as AuthUser;
use Webkul\Support\Models\ActivityType;
use Illuminate\Auth\Access\HandlesAuthorization;

class ActivityTypePolicy
{
    use HandlesAuthorization;
    
    public function viewAny(AuthUser $authUser, ActivityType $activityType): bool
    {
        return $authUser->can('view_any_activity::type');
    }

    public function view(AuthUser $authUser, ActivityType $activityType): bool
    {
        return $authUser->can('view_activity::type');
    }

    public function create(AuthUser $authUser): bool
    {
        return $authUser->can('create_activity::type');
    }

    public function update(AuthUser $authUser, ActivityType $activityType): bool
    {
        return $authUser->can('update_activity::type');
    }

    public function delete(AuthUser $authUser, ActivityType $activityType): bool
    {
        return $authUser->can('delete_activity::type');
    }

    public function restore(AuthUser $authUser, ActivityType $activityType): bool
    {
        return $authUser->can('restore_activity::type');
    }

    public function deleteAny(AuthUser $authUser, ActivityType $activityType): bool
    {
        return $authUser->can('delete_any_activity::type');
    }

    public function forceDelete(AuthUser $authUser, ActivityType $activityType): bool
    {
        return $authUser->can('force_delete_activity::type');
    }

    public function forceDeleteAny(AuthUser $authUser, ActivityType $activityType): bool
    {
        return $authUser->can('force_delete_any_activity::type');
    }

    public function restoreAny(AuthUser $authUser, ActivityType $activityType): bool
    {
        return $authUser->can('restore_any_activity::type');
    }

    public function reorder(AuthUser $authUser): bool
    {
        return $authUser->can('reorder_activity::type');
    }

}