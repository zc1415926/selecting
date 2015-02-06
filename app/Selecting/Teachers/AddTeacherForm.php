<?php namespace Selecting\Teachers;

use Laracasts\Validation\FormValidator;

/**
 * Created by PhpStorm.
 * User: zc
 * Date: 15-1-23
 * Time: 下午2:03
 */

class AddTeacherForm extends FormValidator
{
    protected $rules = [
        'teachername' => 'required',
        'description' => 'required'
    ];
}