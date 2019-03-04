<?php

$tab=array("victor","yoan","lisa","jerome","marie");
/*foreach($tab as $element){
    echo $element."\n";
}
*/

function styleEcho($style,$msg){
    return "<".$style.">".$msg."</".$style.">";
}

foreach($tab as $id => $element){
    $msg = $id. " : ".$element;  
    if ($id ==1 )
        echo styleEcho("b",$msg);         
    elseif ($id ==3 )
        echo styleEcho("strike",$msg);    
    else 
        echo styleEcho("p",$msg); 
}