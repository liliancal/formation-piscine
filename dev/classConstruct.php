<?php
// include('../dashboard/system/init.php');
/*
XP = 0
PV = 10
random force 0,10
random défense 0,10
*/
error_reporting(E_ALL);
ini_set("display_errors", 1);

class Personnage{
    // On initialise les attributs
    private $_name;
    public $_strength;
    public $_defense;
    private $_healthPoint = 5;
    private $_experience = 0; 

    function __construct($varParDefaut =  NULL){
        // $this->_strength = rand(0,10);
        // $this->_defense = rand(0,10);  
        // $this->_name = $name;  
        echo $varParDefaut."\n";    
    }
}
//$pers = new Personnage();
//$pers = new Personnage("titi");
$pers = new Personnage();