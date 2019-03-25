<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

/* vers 1 */
echo "<br><br>######### TP ######### <br><br>";
// On initialise la fonction
function lenomdemafonction(){
    //ici on met les actions à exécuter lors de l'appel de la fonction
    echo "test";
}
// On appelle la fonction
lenomdemafonction();

/* vers 2 */
echo "<br><br>######### TP ######### <br><br>";
function getListSoft1(){
    $montableau = array("coca","jus d'orange","jus de goyave");
    // var_dump(array("coca","jus d'orange","jus de goyave"));
    var_dump($montableau);
}
getListSoft1();

/* vers 3 */
echo "<br><br>######### TP ######### <br><br>";
function maSuperList(){
    echo "gin, champagne, rhum";
}
maSuperList();

/* vers 4 */
echo "<br><br>######### TP ######### <br><br>";
function maSuperList2(){
    $var = array("gin", "champagne", "rhum");
    var_dump($var);
}
maSuperList2();

/* vers 5 */
echo "<br><br>######### TP 5 ######### <br><br>";
function getListAlcool(){
    $var = array("gin", "champagne", "rhum");
    return $var;
}
$contenu = getListAlcool();
var_dump($contenu);

/* vers 6 */
echo "<br><br>######### TP 6 ######### <br><br>";
// on créé une fonction
function getListSoft(){
    // code à exécuter lorsqu'on appelle la fonction
    $var = array("coca","orangina","sprite");
    return $var;
}
// on appelle la fonction
// on récupère le contenu retourné dans la variable $contenu
$contenu = getListSoft();

/* vers 7 */
echo "<br><br>######### TP 7 ######### <br><br>";
function shaker($var){
    echo $var;
}
shaker("toto");

/* vers 8 */
echo "<br><br>######### TP 8 ######### <br><br>";
function shaker2($var,$var2,$var3){
    echo "ma variable1 = ".$var."<br>";
    echo "ma variable2 = ".$var2."<br>";    
    echo "ma variable2 = ".$var3."<br>"; 
}
// ON peut passer en paramètres soit des chaines de caractères
// soit des variables comme $test

// Les noms de variables utilisés dans l'appel de la fonction
// sont différents des noms de variables utilisés dans la fonction
// elle même (function mafonction($param1, $param2, $param3))
$test= "mavariable";
shaker2("toto","tata",$test);
