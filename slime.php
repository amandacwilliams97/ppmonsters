<?php
/**
 * Created by PhpStorm.
 * User: humme_000
 * Date: 2/6/2019
 * Time: 12:14 PM
 */

#Error Reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

class Slime extends monster
{
    private $_spew;

    #constructor
    function __construct()
    {
        Monster:: __construct('Rimuru the slime');
        $this->_spew=0;
    }

    #get goo spew
    function getSpew()
    {
        return $this->_spew;
    }

    #attack
    function attack()
    {
        $name = $this->getName();
        $this->_spew++;
        echo "<p>$name is spewing goo.</p>";
    }

}