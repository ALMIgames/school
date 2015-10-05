<?php
/**
 * Created by PhpStorm.
 * User: albert
 * Date: 5/10/15
 * Time: 20:10
 */

namespace Com\Iesebre\Dam2\albertmayor\Curriculums;


/**
 * Class ClassroomGroup
 * @package Com\Iesebre\Dam2\albertmayor\Curriculums
 */
class ClassroomGroup
{
    public $students = array();

    function __construct($students)
    {
        $this->students = $students;
    }


    /**
     * @return array
     */
    public function getStudents()
    {
        return $this->students;
    }

    /**
     * @param array $students
     */
    public function setStudents($students)
    {
        $this->students = $students;
    }
}