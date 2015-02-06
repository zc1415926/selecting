<?php
/**
 * Created by PhpStorm.
 * User: zc
 * Date: 15-2-6
 * Time: 上午8:26
 */

namespace Selecting\Teachers;


use Laracasts\Commander\CommandHandler;

class AddTeacherCommandHandler implements CommandHandler{

    private $teacherRepo;

    function __construct(TeacherRepository $teacherRepo)
    {
        $this->teacherRepo = $teacherRepo;
    }

    /**
     * 执行添加教师的操作
     *
     * @param $command
     * @return mixed
     */
    public function handle($command)
    {
        $teacher = Teacher::add(
            $command->teachername, $command->description
        );

        $this->teacherRepo->save($teacher);
    }
}