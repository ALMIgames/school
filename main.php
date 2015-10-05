<?php
/**
 * Created by PhpStorm.
 * User: albert
 * Date: 5/10/15
 * Time: 20:25
 */
use  Com\Iesebre\Dam2\albertmayor\Persons\Person;
require "/home/albert/Code/school/Classes/Persons/Person.php";

$person = new Person();
$person->type = "Senyoreta";
$person->setGivenName("Pepita");

$person->render();