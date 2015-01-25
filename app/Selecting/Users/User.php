<?php namespace Selecting\Users;

use Eloquent;
use Hash;
use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	protected $fillable = ['username', 'password', 'showname'];
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password', 'remember_token');

	/**
	 * Hash the password
	 * @param $password
     */
	public function setPasswordAttribute($password)
	{
		$this->attributes['password'] = Hash::make($password);
	}
	/**
	 * 得到一个用户变量
	 * @param $username
	 * @param $password
	 * @param $showname
	 * @return static
	 */
	public static function register($username, $password, $showname)
	{
		$user = new static(compact('username', 'password', 'showname'));
		return $user;
	}
}
