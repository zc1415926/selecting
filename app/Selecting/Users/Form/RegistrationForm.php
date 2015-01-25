<?php namespace Selecting\Users\Form;
use Laracasts\Validation\FormValidator;

/**
 * Created by PhpStorm.
 * User: zc
 * Date: 15-1-25
 * Time: 上午12:01
 */

class RegistrationForm extends FormValidator{

    /**
     * 用户注册表的验证条件
     * @var array
     */
    protected $rules = [
        'username' => 'required|unique:users',
        'showname' => 'required'
    ];

    protected $messages = [
        'username' => 'username 111',
        'showname' => 'showname 111'

    ];

}