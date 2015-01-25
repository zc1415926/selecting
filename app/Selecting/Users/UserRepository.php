<?php
/**
 * Created by PhpStorm.
 * User: zc
 * Date: 15-1-25
 * Time: 下午3:08
 */

namespace Selecting\Users;

use Selecting\Users\User;

class UserRepository {

    public function save(User $user)
    {
        return $user->save();
    }
}