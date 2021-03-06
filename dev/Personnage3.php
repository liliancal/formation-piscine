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

    /* 
    Le construct est une méthode qui est appelée 
    automatiquement dès l'instanciation d'une classe 
    et donc la création d'un objet

    On peut passer un variable à l'instanciation d'une classe 
    comme $monObjet = new MaClasse($maVariable);
    et on récupère $maVariable dans le construct de la classe MaClasse
    */

    function __construct($name){
        $this->_strength = rand(0,10);
        $this->_defense = rand(0,10);  
        $this->_name = $name;      
    }

    function getName(){
        return $this->_name;
    }

    function getStrength(){
        return $this->_strength;
    }

    function getExperience(){
        return $this->_experience;
    }

    function setExperience(){
        return $this->_experience++;
    }

    function getHealthPoint(){
        return $this->_healthPoint;
    }

    function cutHealthPoint(){
        return $this->_healthPoint--;
    }

    // $adversaire = à l'objet $pierre
    function fight($adversaire){
        // $this correspond aux attributs et méthodes de chris
        if($this->_strength < $adversaire->_defense){
            $this->cutHealthPoint();
            $adversaire->setExperience();
            return $this->_name." : Perdu";
        }
        elseif($this->_strength == $adversaire->_defense){
            return "Match nul";
        }
        else {
            $this->setExperience();
            $adversaire->cutHealthPoint();
            return $this->_name." : Gagné";         
        }
        // réponse au combat
    }
}


// $mavariable= "Lilian";
// echo $mavariable;
// $$mavariable="toto";
// $$mavariable => $"echo $mavariable"
// je génère une variable dont le nom porte le contenu de la variable concaténée.
//echo $Lilian;

/* chris est un objet qui a été créé suite à l'instanciation de la classe Personnage */
// Je créé une variable qui s'appelle $chris 
$personnage1 = new Personnage("chris");

/* On affiche les attributs de l'objet chris */
// echo '<pre>';
// print_r($chris);
// echo '</pre>';

// Je créé une variable qui s'appelle $pierre
/* $pierre est un objet qui a été créé suite à l'instanciation de la classe Personnage */ 
$personnage2 = new Personnage("pierre");
// echo '<pre>';
// print_r($pierre);
// echo '</pre>';


/* 
Pour appeler la méthode d'un objet, on fait :
$monobjet->mamethode();
*/

//$forceChris = $chris->getStrength();

/* 
On affiche le résultat de la méthode fight depuis l'objet chris
avec pour paramètre l'objet pierre 
*/

$i=1;
while($personnage1->getHealthPoint() != NULL AND $personnage2->getHealthPoint() != NULL){    
    //on inverse les variables à chaque itération de la boucle
    echo "---------------".$personnage1->getName()." ATTAQUE ".$personnage2->getName()."---------------<br>"; 
    echo "---------------".$personnage1->getName()."---------------<br>";
    echo "expérience :".$personnage1->getExperience()." <br>";
    echo "HealthPoint :".$personnage1->getHealthPoint()." <br>";  
    echo "force :".$personnage1->_strength." <br>";  
    echo "force :".$personnage1->_defense." <br>";            
    echo "---------------".$personnage2->getName()."---------------<br>";
    echo "expérience :".$personnage2->getExperience()." <br>";
    echo "HealthPoint :".$personnage2->getHealthPoint()." <br>";    
    echo "force :".$personnage2->_strength." <br>";     
    echo "force :".$personnage2->_defense." <br>";         
    echo "------------------------------<br>";
    $resultCombat= $personnage1->fight($personnage2)." <br>";    
    echo "<br><b>RESULTAT MANCHE ".$i.": ".$resultCombat."</b><br>";

    echo "---------------FIN DE LA MANCHE---------------<br><br>"; 
    $tmpPers1=$personnage1;
    $personnage1=$personnage2;
    $personnage2=$tmpPers1;
    $i++;
}
$i--;
if($personnage1->getHealthPoint() == 0 ){
    echo "---------------RESULTAT---------------<br>";
    echo $personnage1->getName()." a Perdu et ".$personnage2->getName()." a Gagné le combat en ".$i." manches.<br>";
    echo "--------------------------------------<br>";              
}
else{
    echo "---------------RESULTAT---------------<br>";
    echo $personnage2->getName()." a Perdu et ".$personnage1->getName()." a Gagné le combat en ".$i." manches.<br>";
    echo "--------------------------------------<br>";
}
/*

Je créé un objet chris
Je créé un objet pierre

Je lance un combat en X manches tant que pierre et chris ont des points de vie {
    $perso1 combat $perso2
    on affiche les specs ds 2 personnages
    //si je veux que perso2 combate perso1 pour intevertir les attaquants et équilibrer
    // le combat, j'ai 2 solutions
        // soit je lance le second combat inversé à la main 
            donc si l'un des deux est mort à ce moment là la boucle continue et on ne veut pas
        // soit j'inverse les variables à chaque itération de boucle

    j'inverse perso1 et perso2 pour qu'au tour suivant ce soit perso2 qui combate perso1        
}

On veut organiser un combat entre 2 entre 2 personnages
On veut que les 2 personnages s'attaque l'un et l'autre successivementdonc
chris attaque pierre puis pierre attaque chris 
jusqu'à ce que l'un des deux ne dispose plus de point de vie

Au départ : 
on génère des spécifications aux deux personnages: 
    - force : générée aléatoirement à chaque manche
    - défense : générée aléatoirement à chaque manche
    - points de vie : 10

Durant le combat il y a plusieurs manches durant lesquelles 
l'un des deux personnages gagne et l'autre perd

en entrée de la méthode on a les spec des 2 joueurs en sortie :
- le gagnant 
- on fait perdre 1 PV au perdant
- on augmente de 1 l'XP du gagnant

on boucle pour tourner jusqu'à ce qu'un des deux personnages n'ait plus de PV

on veut que ce ne soit pas le même perso qui attaque à chaque manche








*/