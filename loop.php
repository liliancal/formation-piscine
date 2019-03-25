<?php
/*
for ($i=10; $i > 5; $i--) {
    echo "lisa : ".$i." \n";
}
*/
$tab=array("vodka","gin","whisky","pomme","ice-tea");
print_r($tab);
//solution 1
/*for ($i=0; $i < count($tab); $i++) {
    echo $tab[$i]." : ".$i." \n";
}*/

// SOlution 2
/*for ($i=0; $i <= count($tab)-1; $i++) {
    echo $tab[$i]." : ".$i." \n";
}*/

// SOlution 3
$tab[1] = "vodka"; 
$tab[2] = "gin"; 
$tab[3] = "whisky"; 
$tab[4] = "pomme"; 
$tab[5] = "ice-tea"; 
print_r($tab);

/*for ($i=1; $i <= count($tab); $i++) {
    echo $tab[$i]." : ".$i." \n";
}*/
