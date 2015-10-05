<?php

/**
 * Created by PhpStorm.
 * User: albert
 * Date: 5/10/15
 * Time: 17:50
 */
class Student extends Person
{

    use Worker;

    public $dual = false;

    /**
     * @var
     */
    public $classroomGroup;

    public function __construct($dual = null)
    {
        $this->dual = $dual;
    }


    /**
     * @return mixed
     */
    public function getClassroomGroup()
    {
        return $this->classroomGroup;
    }

    /**
     * @param mixed $classroomGroup
     */
    public function setClassroomGroup($classroomGroup)
    {
        $this->classroomGroup = $classroomGroup;
    }

}