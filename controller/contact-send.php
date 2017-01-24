<?php
sleep(5);
header('Location: ./../index.php');
?>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
    // CONDITIONS NOM
    if ( (isset($_POST["name"])) && (strlen(trim($_POST["name"])) > 0) ) {
        $nom = stripslashes(strip_tags($_POST["name"]));
    } else {
        echo "Merci d'écrire un nom <br />";
        $nom = "";
    }


    // CONDITIONS EMAIL
    if ( (isset($_POST["email"])) && (strlen(trim($_POST["email"])) > 0) ) {
        $email = stripslashes(strip_tags($_POST["email"]));
    } else {
        echo "Merci d'écrire une adresse email <br />";
        $email = "";
    }

   // CONDITIONS SUJET
   if ( (isset($_POST["subject"])) && (strlen(trim($_POST["subject"])) > 0) ) {
        $sujet = stripslashes(strip_tags($_POST["subject"]));
   } else {
       echo "Merci d'écrire un objet <br />";
        $sujet = "";
   }

    // CONDITIONS MESSAGE
    if ( (isset($_POST["message"])) && (strlen(trim($_POST["message"])) > 0) ) {
        $message = stripslashes(strip_tags($_POST["message"]));
    } else {
        echo "Merci d'écrire un message<br />";
        $message = "";
    }

    // Les messages d'erreurs ci-dessus s'afficheront si Javascript est désactivé

    // PREPARATION DES DONNEES
    $ip           = $_SERVER["REMOTE_ADDR"];
    $hostname     = gethostbyaddr($_SERVER["REMOTE_ADDR"]);
    $destinataire = "alicedevaux@gmail.com";
    $objet        = "[Site Web] " . $sujet;
    $contenu      = "Nom de l'expéditeur : " . $nom . "\r\n";
    $contenu     .= $message . "\r\n\n";
    $contenu     .= "Adresse IP de l'expéditeur : " . $ip . "\r\n";
    $contenu     .= "DLSAM : " . $hostname;

    $headers  = "From: " . $email . " \r\n"; // ici l'expediteur du mail
    $headers .= "Content-Type: text/plain; charset=\"ISO-8859-1\"; DelSp=\"Yes\"; format=flowed /r/n";
    $headers .= "Content-Disposition: inline \r\n";
    $headers .= "Content-Transfer-Encoding: 7bit \r\n";
    $headers .= "MIME-Version: 1.0";

    // SI LES CHAMPS SONT MAL REMPLIS
    if ( (empty($nom)) && (empty($sujet)) && (empty($email)) && (!filter_var($email, FILTER_VALIDATE_EMAIL)) && (empty($message)) ) {
        echo 'echec :( <br /><a href="index.php">Retour au formulaire</a>';
    } else {
        // ENCAPSULATION DES DONNEES
        mail($destinataire, $objet, utf8_decode($contenu), $headers);
    }

    // Les messages d'erreurs ci-dessus s'afficheront si Javascript est désactivé
?>
