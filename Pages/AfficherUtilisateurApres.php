<?php
    session_start(); 
    if(!isset($_SESSION['utilisateur'])) 
    {
        header('location: Accueil.php');
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport"              content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../Styles/AfficherUtilisateurStyle.css">
        <link rel="icon"       href="../Images/Icon.png">
        <title>Secure City ~ Espace Utilisateur</title>
    </head>
    <body>
        <section>
            <?php
                echo "<span id='slt'>Bienvenue <b>".$_SESSION['utilisateur']."</b> !</span><br>";
            ?>
            <a id="btn" href="../Pages/Accueil.php">Accueil</a>
            <span id="msgsup">
                <i id="icn" class="bi bi-check2-circle"></i>
                La suppression est effectuée avec succès.
            </span>
        </section>
    </body>
</html>
