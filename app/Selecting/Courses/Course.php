<?php namespace Selecting\Courses;
/**
 * Created by PhpStorm.
 * User: zc
 * Date: 15-1-29
 * Time: 下午9:07
 */
class Course extends \Eloquent
{
    protected $fillable = ['title', 'teacher','description', 'count'];

}