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
//moncocktail("pina colada","rhum + autre","ananas / coco + glaçon");

function monCocktailGeneriqueLucas($cocktail, $listeIngredients){
	echo "j ai fabriqué ".$cocktail." avec : ";

	foreach($listeIngredients as $element){
		$nbElement = count($element);
		for($i=0;$i <= $nbElement;$i++){
			echo $element.", ";
		}
	}
	echo "\n";
}

function monCocktailGeneriqueYoan($cocktail, $listeIngredients){
	echo "j ai fabriqué ".$cocktail." avec : ";

	foreach($listeIngredients as $element){
		echo $element;
		$nbElement = count($element)-1;
		for($i=0;$i <= $nbElement;$i++){
			echo ", ";
		}
	}
	echo "\n";
}
function monCocktailGeneriqueJulien($cocktail, $listeIngredients){
	echo "j ai fabriqué ".$cocktail." avec : ";
	// faire tourner le foreach pour les 3 1ers éléments et sortir pour le 4ème
	// => arrêter le foreach avant ..
	foreach($listeIngredients as $element){
		echo $element;
		$nbElement = count($element)-1;
		for($i=0;$i <= $nbElement;$i++){
			echo ", ";
		}
	}
	echo "\n";
}
function monCocktailGeneriqueLucas2($cocktail, $listeIngredients){
	echo "j ai fabriqué ".$cocktail." avec : ";
	// faire tourner le foreach pour les 3 1ers éléments et sortir pour le 4ème
	// => arrêter le foreach avant ..
	$nbElement = count($listeIngredients)-1;
	for($i=0;$i < $nbElement;$i++){
		echo $listeIngredients[$i].", ";
	}
	echo $listeIngredients[$nbElement].".\n";
}

function monCocktailGenerique($cocktail, $listeIngredients){
	echo "j ai fabriqué ".$cocktail." avec : ";

	$nbElement = count($listeIngredients);
	for($i=0;$i < $nbElement;$i++){

		if($i != $nbElement-1){
			echo $listeIngredients[$i].", ";
		}
		else{
			echo $listeIngredients[$i].".\n";
		}
	}
}

$malistedingredients=array('vodka','kalua','lait','glaçons');
monCocktailGenerique("whiteRussian", $malistedingredients);
