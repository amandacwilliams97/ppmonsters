<?php
/*
 * Amanda Williams, Jarod Bose
 * Feruary 6, 2019
 * ifle name
 */

#Error Reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

class Vampire extends monster
{
    private $_victims;

    #constructor
    function __construct()
    {
        //parent::__construct('Dracula');
        Monster:: __construct('Dracula');
        $this->_victims=0;
    }

    #get victims
    function getVictims()
    {
        return $this->_victims;
    }

    #attack
    function attack()
    {
        $name = $this->getName();
        $this->_victims++;
        echo "<p>$name is drinking you blood.</p>";
    }
}
