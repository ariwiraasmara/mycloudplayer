<?php

namespace App\Policies;

use App\Models\User;
use App\Models\asmcp_1001_userid;
use App\Models\asmcp_1004_userfolders;
use Illuminate\Auth\Access\HandlesAuthorization;

class Asmcp1004UserfoldersPolicy
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
     * @param  \App\Models\asmcp_1004_userfolders  $asmcp1004Userfolders
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, asmcp_1004_userfolders $asmcp1004Userfolders)
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
     * @param  \App\Models\asmcp_1004_userfolders  $asmcp1004Userfolders
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, asmcp_1004_userfolders $asmcp1004Userfolders)
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\asmcp_1004_userfolders  $asmcp1004Userfolders
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, asmcp_1004_userfolders $asmcp1004Userfolders)
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\asmcp_1004_userfolders  $asmcp1004Userfolders
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, asmcp_1004_userfolders $asmcp1004Userfolders)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\asmcp_1004_userfolders  $asmcp1004Userfolders
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, asmcp_1004_userfolders $asmcp1004Userfolders)
    {
        //
    }
}
