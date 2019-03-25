<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

class Article extends Commentaire{
    public $_id;
    function __construct ($idcommentaire){
        $this->_id = $idcommentaire;
    }
    function read(){
        return "Voici mon article \n";
    }
    function getPrivateAttr(){
        return $this->_name;
    }

    function getCommentaire(){
        return $this->readCommentaire(2);
    }
}

class Commentaire{
    public $_monattribut = "bonjour";
    public $_name = "Victor";
    function readCommentaire($id){
        //requete liste commentaire surarticle numéro $id
        if($id ==1){
            return "Voici mon commentaire \n";
        }
        else{
            return "Il n'y a pas de commentaire \n";           
        }
    }
}
//$pers = new Personnage();
//$pers = new Personnage("titi");
$id = 1;
$article = new Article($id);
echo $article->read();
// echo $article->_id;
echo $article->readCommentaire($article->_id);
echo $article->_monattribut;
// echo $article->getPrivateAttr();
echo $article->getCommentaire();


// $commentaire = new Commentaire();
// echo $commentaire->read();
