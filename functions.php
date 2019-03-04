<?php


function mafonction1(){
	echo "toto";
}
//mafonction1();

function mafonction2(){
	return "toto";
}

//$data = mafonction2();
//echo $data;

function maPinaColada($alcool,$soft){
	echo "j ai fabriqué de la pina colada avec : ".$alcool." + ".$soft;
}
//maPinaColada("rhum","ananas / coco");

function moncocktail($cocktail, $alcool,$soft){
	echo "j ai fabriqué de la ".$cocktail." avec : ".$alcool." + ".$soft;
}
//moncocktail("pina colada","rhum","ananas / coco");
moncocktail("pina colada","rhum + autre","ananas / coco + glaçon");

function monCocktailGenerique($cocktail, $listeIngredients){
	echo "j ai fabriqué ".$cocktail." avec : ";
	
}

$malistedingredients=array('vodka','kalua','lait','glaçons');
monCocktailGenerique("whiteRussian", $malistedingredients);
