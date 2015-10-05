<?php
/**
 * Created by PhpStorm.
 * User: albert
 * Date: 5/10/15
 * Time: 20:10
 */

namespace Com\Iesebre\Dam2\albertmayor\Curriculums;

use Com\Iesebre\Dam2\albertmayor\Persons\Student;


/**
 * Class ClassroomGroup
 * @package Com\Iesebre\Dam2\albertmayor\Curriculums
 */
class ClassroomGroup
{
    public $students = array();

    function __construct(array $students)
    {
        $this->students = $students;
    }

    public function addStudent(Student $student)
    {
        array_push($this->students, $student);
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