<?php
/**
 * Created by PhpStorm.
 * User: albert
 * Date: 5/10/15
 * Time: 20:25
 */
require_once __DIR__ . 'vendor/autoload.php';

use  Com\Iesebre\Dam2\albertmayor\Persons\Person;

$person = new Person();
$person->type = "Senyoreta";
$person->setGivenName("Pepita");

$person->render();