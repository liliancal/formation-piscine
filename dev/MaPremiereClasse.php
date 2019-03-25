<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

class User{
    function getName0(){
        echo "Lilian";
    }    
    function getName1($x){
        if(!$x)
            echo "Lilian";
        elseif($x)
            echo "Victor";
    }
    private function examplePrivate(){
        echo "on voit rien";
    }

    public function monCocktail(){
        echo "voici la liste de mes ingrédients :";
        $result = $this->getListeIngredients();
        foreach($result as $id => $ingredient){
            if($id == count($result)-1){
                echo $ingredient.".";
            }
            else{
                echo $ingredient.", ";
            }
        }
    }
    // Je veux une fonction private qui me renvoie une liste d'alcool
    // FIN à 14h39
    // Je veux une v2 de la fonction monCocktail qui mélange la liste 
    // des softs et la liste des alcools
    // FIN à 14h49
    
    private function getListeIngredients(){
        $liste = array('orange','ananas','coco','champomy');
        return $liste;

    }

}

$user = new User;

//$user->getName0();

// $user->getName1(0);
// $user->getName1(1);

//$user->examplePrivate();

$user->monCocktail();