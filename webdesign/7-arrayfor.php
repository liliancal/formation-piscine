<?php
/*foreach */
$montableau = array("toto","fafa","roro");
foreach ($montableau as $unElementDeMonTableau) {
  if ($unElementDeMonTableau == "fafa"){
    echo "Bonjour ".$unElementDeMonTableau."<br>";
  }
  else if ($unElementDeMonTableau == "roro"){
    echo "Bonsoir ".$unElementDeMonTableau."<br>";
  }
  else {
    echo "Au revoir ".$unElementDeMonTableau."<br>";
  }
}

/*foreach with key*/
$montableau = array("toto","fafa","roro");
foreach ($montableau as $key => $unElementDeMonTableau) {
  if ($unElementDeMonTableau == "fafa"){
    echo "Bonjour ".$unElementDeMonTableau." tu as l'index ".$key."<br>";
  }
  else if ($unElementDeMonTableau == "roro"){
    echo "Bonjour ".$unElementDeMonTableau." tu as l'index ".$key."<br>";
  }
  else {
    echo "Au revoir ".$unElementDeMonTableau." tu as l'index ".$key."<br>";
  }
}