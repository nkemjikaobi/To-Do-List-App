<?php

namespace App\Policies;

use App\User;
use App\toDoList;
use Illuminate\Auth\Access\HandlesAuthorization;

class toDoListPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\User  $user
     * @param  \App\toDoList  $toDoList
     * @return mixed
     */
    public function view(User $user, toDoList $toDoList)
    {
        //
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\User  $user
     * @param  \App\toDoList  $toDoList
     * @return mixed
     */
    public function update(User $user, toDoList $toDoList)
    {
        //return $user->id == $toDoList->user_id;
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\User  $user
     * @param  \App\toDoList  $toDoList
     * @return mixed
     */
    public function delete(User $user, toDoList $toDoList)
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\User  $user
     * @param  \App\toDoList  $toDoList
     * @return mixed
     */
    public function restore(User $user, toDoList $toDoList)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\User  $user
     * @param  \App\toDoList  $toDoList
     * @return mixed
     */
    public function forceDelete(User $user, toDoList $toDoList)
    {
        //
    }
}
