<?php namespace Com\Iesebre\Dam2\albertmayor\Persons;

/**
 * Created by PhpStorm.
 * User: albert
 * Date: 5/10/15
 * Time: 18:13
 */
class Person
{
    public $type = "persona";

    /**
     * Personal identification (f.e.; DNI, NIF, NIE...)
     * @var
     */
    public $personalId;
    /**
     * Name
     * @var
     */
    public $givenName;
    /**
     * Surname 1
     * @var
     */
    public $sn1;
    /**
     * Surname 2
     * @var
     */
    public $sn2;
    /**
     * Personal email
     * @var
     */
    public $email;
    /**
     * Personal postal address
     * @var
     */
    public $postalAddress;
    /**
     * Personal locality
     * @var
     */
    public $locality;
    /**
     * Personal Postal Code
     * @var
     */
    public $postalCode;
    /**
     * Personal State
     * @var
     */
    public $state;
    /**
     * Personal Country
     * @var
     */
    public $country;

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getPostalAddress()
    {
        return $this->postalAddress;
    }

    /**
     * @param mixed $postalAddress
     */
    public function setPostalAddress($postalAddress)
    {
        $this->postalAddress = $postalAddress;
    }

    /**
     * @return mixed
     */
    public function getLocality()
    {
        return $this->locality;
    }

    /**
     * @param mixed $locality
     */
    public function setLocality($locality)
    {
        $this->locality = $locality;
    }

    /**
     * @return mixed
     */
    public function getPostalCode()
    {
        return $this->postalCode;
    }

    /**
     * @param mixed $postalCode
     */
    public function setPostalCode($postalCode)
    {
        $this->postalCode = $postalCode;
    }

    /**
     * @return mixed
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * @param mixed $state
     */
    public function setState($state)
    {
        $this->state = $state;
    }

    /**
     * @return mixed
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * @param mixed $country
     */
    public function setCountry($country)
    {
        $this->country = $country;
    }

    /**
     * @return mixed
     */
    public function getSn2()
    {
        return $this->sn2;
    }

    /**
     * @param mixed $sn2
     */
    public function setSn2($sn2)
    {
        $this->sn2 = $sn2;
    }

    /**
     * @return mixed
     */
    public function getSn1()
    {
        return $this->sn1;
    }

    /**
     * @param mixed $sn1
     */
    public function setSn1($sn1)
    {
        $this->sn1 = $sn1;
    }

    /**
     * @return mixed
     */
    public function getGivenName()
    {
        return $this->givenName;
    }

    /**
     * @param mixed $givenName
     */
    public function setGivenName($givenName)
    {
        $this->givenName = $givenName;
    }

    /**
     * @return mixed
     */
    public function getPersonalId()
    {
        return $this->personalId;
    }

    /**
     * @param mixed $personalId
     */
    public function setPersonalId($personalId)
    {
        $this->personalId = $personalId;
    }

    public function render()
    {
        echo "La {$this->type} es diu " . $this->getGivenName();
    }
}