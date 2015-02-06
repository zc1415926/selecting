<?php namespace Selecting\Teachers;
/**
 * Created by PhpStorm.
 * User: zc
 * Date: 15-1-29
 * Time: 下午9:13
 */
class Teacher extends \Eloquent
{
    protected $fillable = ['teachername', 'description'];

    /**
     * 得到一个用户变量
     * @param $username
     * @param $password
     * @param $showname
     * @return static
     */
    public static function add($teachername, $description)
    {
        $teacher = new static(compact('teachername', 'description'));
        return $teacher;
    }
}