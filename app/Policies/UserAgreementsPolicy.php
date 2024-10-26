<?php

namespace App\Policies;

use App\Models\User;
use App\Models\UserAgreements;
use Illuminate\Auth\Access\HandlesAuthorization;

class UserAgreementsPolicy
{
    use HandlesAuthorization;

    public function viewAny(User $user): bool
    {

    }

    public function view(User $user, UserAgreements $userAgreements): bool
    {
    }

    public function create(User $user): bool
    {
    }

    public function update(User $user, UserAgreements $userAgreements): bool
    {
    }

    public function delete(User $user, UserAgreements $userAgreements): bool
    {
    }

    public function restore(User $user, UserAgreements $userAgreements): bool
    {
    }

    public function forceDelete(User $user, UserAgreements $userAgreements): bool
    {
    }
}
