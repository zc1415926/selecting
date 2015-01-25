<?php namespace Selecting\Users;
/**
 * Created by PhpStorm.
 * User: zc
 * Date: 15-1-25
 * Time: 下午2:16
 */

class RegisterUserCommand {

    public $username;
    //public $password;
    public $showname;

    function __construct($username, $showname)
    {
        $this->username = $username;
       // $this->password = $password;
        $this->showname = $showname;
    }
}