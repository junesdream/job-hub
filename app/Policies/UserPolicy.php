<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class UserPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     */
   public function viewAny(User $user): bool
{
    // Erlaubt allen Benutzern, die Liste der Benutzer zu sehen.
    return $user->isAdmin();
}

public function view(User $user, User $model): bool
{
    // Erlaubt dem Benutzer, seine eigene Daten zu sehen, oder einem Admin, alle zu sehen.
    return $user->isAdmin() || $user->id === $model->id;
}

public function create(User $user): bool
{
    // Nur Admins können neue Benutzer erstellen.
    return $user->isAdmin();
}

public function update(User $user, User $model): bool
{
    // Nur Admins können alle Benutzer aktualisieren, Benutzer können ihre eigenen Daten aktualisieren.
    return $user->isAdmin() || $user->id === $model->id;
}

public function delete(User $user, User $model): bool
{
    // Nur Admins dürfen Benutzer löschen.
    return $user->isAdmin();
}

}