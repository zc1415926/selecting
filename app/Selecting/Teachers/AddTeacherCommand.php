<?php
/**
 * Created by PhpStorm.
 * User: zc
 * Date: 15-2-6
 * Time: 上午8:25
 */

namespace Selecting\Teachers;


class AddTeacherCommand {

    public $teachername;
    public $description;

    function __construct($teachername, $description)
    {
        $this->teachername = $teachername;
        $this->description = $description;
    }
}