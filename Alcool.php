<?php

    class alcool {
        public function monCocktail($x) {
            echo "voici un cocktail original : ";

            $liste1 = $this->mesSofts();
            $liste2 = $this->mesAlcools();
            $listetotal = array_merge($liste1, $liste2);
            for($i = 0; $i < $x; $i++) {
                $result = rand(0, count($listetotal)-1);
                if($i == $x-1) {
                    echo $listetotal[$result].'.';
                    // echo "index: ".$result;
                } else {
                    echo $listetotal[$result].', ';
                    unset($listetotal[$result]);
                    // echo "index: ".$result;
                }
                $listetotal = array_values(array_filter($listetotal));
            }
        }

        private function mesSofts() {
            $listeSoft = array('lait de coco', 'lait', 'jus de pamplemous', 'jus d‘annas', 'coca-cola', 'eau', 
                                'jus de pipi', 'tabasco', 'glaçons', 'tonic', 'jus de pomme', 'jus de morve', 'limonade');
            return $listeSoft;
        }
        private function mesAlcools() {
            $listeAlcool = array('rhum', 'vodka', 'gin', 'malibu', 'ricard', 'soho', 'champagne', 'kalua', 'cognac', 'bière',
                                'jagermaster', 'G27', 'baileys', 'amareto', 'ricard');
            return $listeAlcool;
        }

    }

    $alcool = new alcool();
    $alcool->monCocktail(4);

?>