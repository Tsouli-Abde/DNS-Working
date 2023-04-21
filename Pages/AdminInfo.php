<?php
    session_start(); 
    if(!isset($_SESSION['monlogin'])) 
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
        <link rel="stylesheet" href="../Styles/AdminInfoStyle.css">
        <link rel="icon"       href="../Images/Icon.png">
        <title>Secure City ~ Espace Administrateur</title>
    </head>
    <body>
        <section>
            <?php
                echo "<span id='slt'>Bienvenue Mr <b>".$_SESSION['monlogin']."</b> !</span><br>";
            ?>
            <a id="btn" href="../Pages/Accueil.php">Accueil</a>
            <span id="msg">Voici les messages laissés par les utilisateurs :</span>
            <br>
            <table cellspacing="8"> 
                <tr> 
                    <th>ID     </th> 
                    <th>Nom    </th> 
                    <th>Prénom </th> 
                    <th>Message</th>
                    <th id="thbi1" title="Répondre" ><i class="bi bi-reply-fill"></i></th>
                    <th id="thbi2" title="Supprimer"><i class="bi bi-x"         ></i></th>
                </tr>
                <?php                  
                    include("connectionBD.php");
                    $resultat = mysqli_query($con ,"SELECT * FROM utilisateur");
                    if($resultat) 
                    { 
                        while($ligne = mysqli_fetch_object($resultat)) 
                        {                      
                            $subject = "Réponse à votre message";
                            $body    = "Salut ".$ligne->Prenom." ".$ligne->Nom.",
                                        Nous tenons à vous remercier pour la confiance que vous nous accordez et le soutien incroyable de votre part.
                                        Votre message a été bien transmis et bien traité que nous avons trouvé comme solution/réponse à votre demande que...
                                        Cordialement,";
                            echo '<tr align="center"><td>'.$ligne->ID.     '</td>
                                                     <td>'.$ligne->Nom.    '</td>
                                                     <td>'.$ligne->Prenom. '</td>
                                                     <td>'.$ligne->Message.'</td>
                                                     <td id="tdbi1" title="Faites un clic pour répondre au message de cet utilisateur">
                                                        <a href="mailto:'.$ligne->Email.'?subject='.$subject.'&body='.$body.'">
                                                            <i class="bi bi-envelope-fill"></i>
                                                        </a>
                                                     </td>
                                                     <td id="tdbi2" title="Faites un clic pour supprimer cet utilisateur">
                                                        <a href="SupprimerUtilisateur.php?id='.$ligne->ID.'">
                                                            <i class="bi bi-person-x-fill"></i>
                                                        </a>
                                                     </td></tr>'; 
                        } 
                    }
                ?>
            </table>
        </section>
    </body>
</html>
