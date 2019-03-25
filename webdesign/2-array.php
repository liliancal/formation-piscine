<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

$montableauvide = array();
/* Par défaut les index générés sont 0,1,2. */
$montableau = array("fabien","thomas","josé");

/* Ne fonctionne pas car on affiche un tableau avec echo = erreur */
//echo $montableau;

/* vers 1 - On affiche le contenu du tableau avec var_dump */
//var_dump( $montableau);

/* vers 2 - On affiche le contenu du tableau avec print_r */
//print_r( $montableau);

/* vers 3 - On affiche le contenu du tableau avec print_r */
echo "<pre>";
print_r($montableau);
echo "</pre>";
// Si le tableau est vide, var dump affiche array(0) { }

//echo $montableau[1];

/* vers 1 */
$accueilencore="mon prénom est : ".$montableau[1];
echo $accueilencore;

/* vers 2 */
$accueilencore="mon prénom est : ";
echo $accueilencore.$montableau[1];

/* vers 3 */
// echo "mon prénom est : ";
// echo $montableau[1];
echo "mon prénom est : ".$montableau[1];
