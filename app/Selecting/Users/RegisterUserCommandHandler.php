<?php namespace Selecting\Users;
use Laracasts\Commander\CommandHandler;
use Selecting\Users\User;

/**
 * Created by PhpStorm.
 * User: zc
 * Date: 15-1-25
 * Time: 下午2:21
 */

class RegisterUserCommandHandler implements CommandHandler{

    protected $userRepo;

    function __construct(UserRepository $userRepo)
    {
        $this->userRepo = $userRepo;
    }

    /**
     * Handle the command
     *
     * @param $command
     * @return mixed
     */
    public function handle($command)
    {
        $user = User::register(
            $command->username, $command->username, $command->showname
        );

        $this->userRepo->save($user);

        return $user;
    }
}