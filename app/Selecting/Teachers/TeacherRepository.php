<?php
/**
 * Created by PhpStorm.
 * User: zc
 * Date: 15-2-6
 * Time: 上午8:29
 */

namespace Selecting\Teachers;


class TeacherRepository {

    public function save(Teacher $teacher)
    {
        return $teacher->save();
    }
}