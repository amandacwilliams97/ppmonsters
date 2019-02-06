<?php
/*
 * Amanda Williams, Jarod Bose
 * Feruary 6, 2019
 * ifle name
 */

#Error Reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

class Monster
{
    private $_name;

    #constructor
    function __construct($name="Mimic")
    {
        $this->_name=$name;
    }

    #set and get
    function setName($name)
    {
        $this->_name=$name;
    }

    function getName()
    {
        return $this->_name;
    }

    #attack
    function attack()
    {
        echo "$this->_name is attacking.";
    }
}