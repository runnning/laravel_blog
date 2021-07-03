<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class UserPolicy
{
    use HandlesAuthorization;
    //当前用户只能对自己进行更新
    public function update(User $currentUser,User $user): bool
    {
        return $currentUser->id===$user->id;
    }
    /*
     * 判断是否是管理员
     * 删除对象不是自己
     * */
    public function destroy(User $currentUser,User $user){
        return $currentUser->is_admin&&$currentUser->id!=$user->id;
    }
    //自己不能关注自己
    public function follow(User $currentUser,User $user){
        return $currentUser->id!==$user->id;
    }
}
