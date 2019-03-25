<?php
// $_GET;
/* on utilise la méthode GET pour envoyer des variables 
d'un formulaire dans le cadre d'une recherche
sur un site internet par exemple 
Pour pouvoir partager le lien et pouvoir retrouver la recherche */

// On regarde si la variable $_POST n'est pas vide
if(!empty($_POST)){
    // Si le formulaire est envoyé en GET, 
    // les variables sont visibles dans l'URL
    // echo "<pre> GET ";
    // print_r($_GET);
    // echo "</pre>";

    // Si le formulaire est envoyé en POST, 
    // les variables sont invisibles 
    // $_POST;
    echo "<pre> POST ";
    print_r($_POST);
    echo "</pre>";

    echo $_POST['mail']."<br>";
    echo $_POST['subject']."<br>";
    echo $_POST['content']."<br>";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <!-- <form action="monfichier.php"> -->
    <!-- <form> par defaut en GET--> 

    <form method="POST">    
        <input type="email" name="mail" placeholder="Email" required />
        <input type="text" name="subject" placeholder="Subjet" required />
        <textarea placeholder="Content" name="content" required></textarea>      
        <input type="submit" />             
    </form>
</body>
</html>