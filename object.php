<?php
// Une classe on l'appelle avec $variable = new LeNomDeMaClasse();
$user = new User("victor");

$result = $user->getInfos();
// Nom = gonzalez
// Prenom = victor
// mail = victor@gonzalez.fr

$user->setPassword("toto");

$result = $user->checkMail("toto@tata.fr");
// Une méthode on l'appelle avec $resultat = $variable->mamethode();

/*
Entité : Utilisateur
    - Nom
    - prenom
    - mail
    - password
    - status
    - achats
    - commandes
    - livraisons
    - commentaires

Entité : Boutique
    - produits
    - promo
    - prix
    - stock
    - commandes
*/