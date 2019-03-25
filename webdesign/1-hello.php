<?php
/* moncommentaire */
echo "Hello world \n";
// \n == <br>
echo "<h1>Bonjour</h1>";
$utilisateur = "Jason";

echo "Bonjour ".$utilisateur."<br>"; // concaténation facultative
echo "Bonjour $utilisateur <br>"; // fonctionne
echo 'Bonjour $utilisateur <br>'; // fonctionne pas
echo 'Bonjour '.$utilisateur.'<br>'; //concaténation obligatoire

?>
<h2>Bonjour <?php echo $utilisateur ?></h2>
<p>Lorem ipsum <?=$utilisateur?></p>

