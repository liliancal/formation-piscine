<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader
require 'vendor/autoload.php';
require 'param.php';

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

    // Instantiation and passing `true` enables exceptions
    $mail = new PHPMailer(true);

    try {
        //Server settings
        $mail->SMTPDebug = 0;                                       // Enable verbose debug output
        $mail->isSMTP();                                            // Set mailer to use SMTP
        $mail->Host       = 'smtp.gmail.com';  // Specify main and backup SMTP servers
        $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
        $mail->Username   = 'lcalliot.contact@gmail.com';                     // SMTP username
        $mail->Password   = $password;                               // SMTP password
        $mail->SMTPSecure = 'tls';                                  // Enable TLS encryption, `ssl` also accepted
        $mail->Port       = 587;                                    // TCP port to connect to

        //Recipients
        $mail->setFrom("noreply@monsite.com", 'Lilian');
        $mail->addAddress("lilian.calliot@miicom.fr", 'Lilian Calliot');     // Add a recipient
        // $mail->addAddress('ellen@example.com');               // Name is optional
        $mail->addReplyTo($_POST['mail'], $_POST['mail']);
        // $mail->addCC('cc@example.com');
        // $mail->addBCC('bcc@example.com');

        // Attachments
        // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
        // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

        // Content
        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = $_POST['subject'];
        $mail->Body    = $_POST['content'];
        //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

        $mail->send();
        echo 'Message has been sent';
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }    
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