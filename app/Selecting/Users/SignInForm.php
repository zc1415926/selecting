<?php namespace Selecting\Users;
use Laracasts\Validation\FormValidator;

/**
 * Created by PhpStorm.
 * User: zc
 * Date: 15-1-23
 * Time: 下午2:03
 */

class SignInForm extends FormValidator{
    protected $rules = [
        'username' => 'required',
        'password' => 'required'
    ];
}