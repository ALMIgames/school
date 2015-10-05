<?php namespace Com\Iesebre\Dam2\albertmayor;

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


    function __construct($type, $personalId, $givenName, $sn1, $sn2, $email, $postalAddress, $locality, $postalCode, $state, $country, $dual)
    {
        parent:: __construct($type, $personalId, $givenName, $sn1, $sn2, $email, $postalAddress, $locality, $postalCode, $state, $country);

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

    public function render()
    {
        $this->type = "Estudiant";
        if ($this->dual) {
            parent::render() . "i cobra " . $this->salary;
        } else {
            parent::render();
        }
    }
}