<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

// Pas obligé d'initialiser la variable avec array();
$montableau = array();

$montableau[1]="solenn";
$montableau[8]="sandrine";
$montableau['membre1']="marine";
$montableau['membre2']="emma";
$montableau['membre2']="fafa";

echo "<pre>";
print_r($montableau);
echo "</pre>";

/* version 1 */
// \n interprétable que ligne de commande 
$content="toto ";
$content="fafa ".$content;
$content="josé ".$content;
$content="josé2 ".$content;
//echo $content;

/* version 2 */
$content2 = "toto";
$content2 .= "fafa";
//echo $content2;



$mavariable = "toto";
// on écrase la valeur toto
$mavariable = "titi";
echo $mavariable;

echo"<br>";

// $var= "blibli "; // blibli
// $var= "blublu ".$var; //blublu blibli
// $var= "blabla ".$var; //blabla blublu blibli
// echo $var;

// $var= "blibli "; 
// $var.= "blublu "; // $var = $var + "nouveau contenu"
// $var.= "blabla "; // $var = $var + "nouveau contenu"
// echo $var;

$var= "blibli "; 
$var= $var."blublu "; // blibli blublu
$var .= "blabla ".$var; 
echo $var;
