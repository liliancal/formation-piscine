<?php


/* Explication $i++ et $i-- */
$variable=1;
echo "etape1 : ".$variable."<br>";
$variable++;
echo  "etape2 : ".$variable."<br>";
$variable++;
echo  "etape3 : ".$variable."<br>";
$variable--;
echo  "etape4 : ".$variable."<br>";

/* Découverte boucle for */
$montableau = array("fabien","thomas","josé");
$count= count($montableau);

for($i=0 ; $i < $count ; $i++){
    if($i == 1){
        echo "aurevoir ".$montableau[$i]."<br>";
    }
    else{
        echo "bonjour ".$montableau[$i]."<br>";
    }
}


for($i=0 ; $i < $count ; $i++){
    if($i != 1){
        echo "bonjour ".$montableau[$i]."<br>";
    }
    else{
        echo "aurevoir ".$montableau[$i]."<br>";        
    }
}

// for($i=0 ; $i < $count ; $i++){
//     echo "bonjour ".$montableau[$i]."<br>";
// }
//echo $montableau[2]."<br>";
//echo count($montableau)."<br>";
// for($i=0 ; $i <= count($montableau) ; $i++){
//     echo $i." : bonjour <br>";
// }
// for($i=$count ; $i > 0 ; $i--){
//     echo "bonjour ".$montableau[$i]."<br>";
// }
// for($i=10 ; $i > 0 ; $i--){
//     echo "bonjour ".$i."<br>";
// }