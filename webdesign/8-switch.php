<?php
$montableau = array("toto","fafa","roro");
// foreach ($myArray as $unElementDeMonTableau) {
    // if ($unElementDeMonTableau == "fafa"){
    //   echo "Bonjour ".$unElementDeMonTableau."<br>";
    // }
 
    // else if ($unElementDeMonTableau == "roro"){
    //   echo "Bonsoir ".$unElementDeMonTableau."<br>";
    // }
    // else if ($unElementDeMonTableau == "toires"){
    //     echo "Bonsoir ".$unElementDeMonTableau."<br>";
    //   }
    //   else if ($unElementDeMonTableau == "greg"){
    //     echo "Bonsoir ".$unElementDeMonTableau."<br>";
    //   }
    //   else if ($unElementDeMonTableau == "rgresgoro"){
    //     echo "Bonsoir ".$unElementDeMonTableau."<br>";
    //   }
    //   else if ($unElementDeMonTableau == "gre"){
    //     echo "Bonsoir ".$unElementDeMonTableau."<br>";
    //   }
    //   else if ($unElementDeMonTableau == "grq"){
    //     echo "Bonsoir ".$unElementDeMonTableau."<br>";
    //   }
    //   else if ($unElementDeMonTableau == "grzq"){
    //     echo "Bonsoir ".$unElementDeMonTableau."<br>";
    //   }
    //   else if ($unElementDeMonTableau == "gnjytjrj"){
    //     echo "Bonsoir ".$unElementDeMonTableau."<br>";
    //   }                                   
    // else {
    //   echo "Au revoir ".$unElementDeMonTableau."<br>";
    // }
// }

$myArray = array("toto","fafa","roro");
foreach ($myArray as $unElementDeMonTableau) {
    switch($unElementDeMonTableau){
        case 'toto':
            echo "bonjour ".$unElementDeMonTableau."<br>";
            break;
        case 'fafa':
            echo "aurevoir ".$unElementDeMonTableau."<br>";
            break;  
        case 'roro':
            echo "bonsoir ".$unElementDeMonTableau."<br>";
            break;                          
    }
}



$var="";
//empty si var est vide = 1
//empty si var n'est pas vide = 0
// !empty si var est vide = 0
// !empty si var n'est pas vide = 1

echo empty($var);

// If 1 = ok on passe
// If 0 = ok on ne passe pas
if(true){
    echo 'test';
}