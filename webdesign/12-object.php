<?php
/*
class MaClasse {
    function maFonction(){
        echo "bonjour";
    }
    function maDeuxiemeFonction(){
        echo "bonsoir";
    }    
}
$monObjet = new MaClasse;
$monObjet->maDeuxiemeFonction();
*/
/* 
J'instancie la classe "MaClasse" (mon moule)
La variable $monObjet devient non pas un tableau ou une variable standard,
mais devient un objet (mon gateau).

Avant on faisait :
$mavariable = mafonction();

Dans une classe on peut avoir X fonctions.
*/

error_reporting(E_ALL);
ini_set("display_errors", 1);

class MonBar{
    // Une fonction dans une classe ets appelée une méthode
    function getListAlcool(){
        $var = array("gin", "champagne", "rhum", "whisky");
        return $var;
     }
     
     function getListSoft(){
        $var = array("coca", "orangina", "sprite");
        return $var;
     }
     
     function shaker($alcools,$softs,$nbElements){
        $indexAlcool = array_rand($alcools,$nbElements);
     
        $indexSoft = array_rand($softs,$nbElements);
     
        if($nbElements == 1){
            // $cocktail = array($alcools[*indexAlcool], $softs[*indexSoft])
            $cocktail[]=$alcools[$indexAlcool];
            $cocktail[]=$softs[$indexSoft];
            // Ici, indexAlcool et indexSoft n'ont qu'une valeur. Donc ce ne sont pas des tableau, ce sont seulement des valeurs.
            // pour les appeler dans le tableau cocktail, on a juste a y appeler les valeurs !
        }
        else{
            foreach ($indexAlcool as $alcoolsKey){
                echo $alcools[$alcoolsKey]."<br>";
                $cocktail[]=$alcools[$alcoolsKey];
            }
     
            foreach ($indexSoft as $softsKey){
                echo $softs[$softsKey]."<br>";
                $cocktail[]=$softs[$softsKey];
     
            }
         }
        return $cocktail;
     }
}

$bar = new MonBar;
// echo "<pre> ";
// print_r($bar);
// echo "</pre>";

$listSoft = $bar->getListSoft();
$listAlcool = $bar->getListAlcool();

$ListeIngredientsCocktail = $bar->shaker($listAlcool, $listSoft, 3);
//var_dump($ListeIngredientsCocktail);

$msg = "Voici la recette de mon nouveau cocktail : ";
foreach ($ListeIngredientsCocktail as $key => $Ingredient){
   if ($key == count($ListeIngredientsCocktail)-1){
       $msg.="$Ingredient. " ;
   }
   else{
       $msg.="$Ingredient, " ;
   }
}
echo $msg;
?>