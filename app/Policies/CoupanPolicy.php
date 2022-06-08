<?php

namespace App\Policies;

use App\Models\Admin\Discount\Coupan;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class CoupanPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Admin\Discount\Coupan  $coupan
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, Coupan $coupan)
    {
        //
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Admin\Discount\Coupan  $coupan
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, Coupan $coupan)
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Admin\Discount\Coupan  $coupan
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, Coupan $coupan)
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Admin\Discount\Coupan  $coupan
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, Coupan $coupan)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Admin\Discount\Coupan  $coupan
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, Coupan $coupan)
    {
        //
    }
}
