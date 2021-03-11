<?php

namespace App\Policies;

use App\SubOrder;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class SubOrderPolicy
{
    use HandlesAuthorization;

    public function before($user, $ability)
    {
        if ($user->hasRole('admin')) {
            return true;
        }
    }

    public function browse(User $user)
    {
        return $user->hasRole('seller');
    }


    public function read(User $user, SubOrder $suborder)
    {
        if (empty(auth()->user()->shop)) {
            return false;
        }

        return $user->id == $suborder->seller_id;
    }

    /**
     * Determine whether the user can update the Product.
     *
     * @param  \App\User  $user
     * @param  \App\Product  $product
     * @return mixed
     */
    public function edit(User $user, SubOrder $suborder)
    {
        // if(empty(auth()->user()->shop)) {
        //     return false;
        // }

        // return $user->id == $suborder->seller_id;
    }


    /**
     * Determine whether the user can create Products.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function add(User $user)
    {
        // return $user->hasRole('seller');
    }

    /**
     * Determine whether the user can delete the Product.
     *
     * @param  \App\User  $user
     * @param  \App\Product  $product
     * @return mixed
     */
    public function delete(User $user, SubOrder $suborder)
    {
        if (empty(auth()->user()->shop)) {
            return false;
        }

        return $user->id == $suborder->seller_id;
    }


}
