<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

function getListAlcool(){
    $var = array("gin", "champagne", "rhum","whisky");
    return $var;
}
function getListSoft(){
    $var = array("coca","orangina","sprite");
    return $var;
}
function shaker($alcools,$softs){
    $indexAlcool = array_rand($alcools,1);
    // echo "index aléatoire alcool = ".$indexAlcool."<br>";
    //je veux afficher l'élément numéro 1 du tableau $alcools
    // echo "exemple d'un alcool = ".$alcools[$indexAlcool]."<br>";

    $indexSoft = array_rand($softs,1);
    // echo "index aléatoire soft = ".$indexSoft."<br>";  
    // echo "exemple d'un soft  = ".$softs[$indexSoft]."<br>";
    $cocktail = array($alcools[$indexAlcool],$softs[$indexSoft]);
    return $cocktail;
}
$listSoft = getListSoft();
$listAlcool = getListAlcool();

$listeIngredientsCocktail=shaker($listAlcool,$listSoft);
// echo "<pre>";
// print_r($listeIngredientsCocktail);
// echo "</pre>";

echo "Voici la recette de mon nouveau cocktail : $listeIngredientsCocktail[0] et $listeIngredientsCocktail[1].<br>";
echo "A consommer avec modération.";