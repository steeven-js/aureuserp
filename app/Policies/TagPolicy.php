<?php

declare(strict_types=1);

namespace App\Policies;

use Illuminate\Foundation\Auth\User as AuthUser;
use Webkul\Blog\Models\Tag;
use Illuminate\Auth\Access\HandlesAuthorization;

class TagPolicy
{
    use HandlesAuthorization;
    
    public function viewAny(AuthUser $authUser, Tag $tag): bool
    {
        return $authUser->can('view_any_blog_tag');
    }

    public function create(AuthUser $authUser): bool
    {
        return $authUser->can('create_blog_tag');
    }

    public function update(AuthUser $authUser, Tag $tag): bool
    {
        return $authUser->can('update_blog_tag');
    }

    public function delete(AuthUser $authUser, Tag $tag): bool
    {
        return $authUser->can('delete_blog_tag');
    }

    public function restore(AuthUser $authUser, Tag $tag): bool
    {
        return $authUser->can('restore_blog_tag');
    }

    public function deleteAny(AuthUser $authUser, Tag $tag): bool
    {
        return $authUser->can('delete_any_blog_tag');
    }

    public function forceDelete(AuthUser $authUser, Tag $tag): bool
    {
        return $authUser->can('force_delete_blog_tag');
    }

    public function forceDeleteAny(AuthUser $authUser, Tag $tag): bool
    {
        return $authUser->can('force_delete_any_blog_tag');
    }

    public function restoreAny(AuthUser $authUser, Tag $tag): bool
    {
        return $authUser->can('restore_any_blog_tag');
    }

}