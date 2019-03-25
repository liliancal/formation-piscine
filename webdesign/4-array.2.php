<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

// Pas obligé d'initialiser la variable avec array();
$montableau = array();

$montableau['membre1']="marine";
$montableau['membre2']="emma";
$montableau['membre3']="fafa";
$montableau['membre4']="sandrine";
$montableau['membre5'[0]]="solenn";
//$montableau['membre4';'toto']="sandrine";
$montableau[0]['name']="solenn";
$montableau[0]['email']="solenn@mail.fr";
$montableau[1]['name']="marine";
$montableau[1]['email']="marine@mail.fr";

/*
json = {
    [1] {
        "name": "toto",
        "email": "toto@a.fr"
    }
    [2] {
        "name": "titi",
        "email": "titi@a.fr"
    }
}
*/


$tableauFabien=array(
    0 => array(
        "name" => "titi",
        "email" => "titi@a.fr"        
    ),
    1 => array(
        "name" => "toto",
        "email" => "toto@a.fr"        
    )
);
$tableauFabien[2]['name'] = "Lilian";
$tableauFabien[2]['email'] = "lilian@a.fr";
$tableauFabien[2]['address'] = array('adresse 1','adresse 2');

echo "<pre>";
print_r($tableauFabien);
echo "<pre>";

echo $tableauFabien[1]['email'];
echo $tableauFabien[0]['name'];
echo $tableauFabien[2]['address'][0];