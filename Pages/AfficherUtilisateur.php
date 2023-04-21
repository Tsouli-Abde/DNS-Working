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
            <span id="msg">Voici les données et le message que vous venez de saisir :</span>
            <br>
            <table cellspacing="8"> 
                <tr> 
                    <th>Prénom   </th>
                    <th>Nom      </th>
                    <th>E-mail   </th>
                    <th>Téléphone</th>
                    <th>Pays     </th>
                    <th>Ville    </th>
                    <th>Message  </th>
                </tr>
                <?php                  
                    include("connectionBD.php");
                    $num_user = "";
                    $prenom   = $_SESSION['utilisateur'];
                    $maxid    = "select max(ID) from utilisateur";
                    $reqmaxid = mysqli_query($con,$maxid);         
	                $rowmax   = mysqli_fetch_assoc($reqmaxid);
                    $resultat = mysqli_query($con ,"SELECT * FROM utilisateur WHERE Prenom='$prenom' AND ID='".$rowmax['max(ID)']."'");
                    if($resultat) 
                    { 
                        while($ligne = mysqli_fetch_object($resultat)) 
                        {
                            $num_user  = $ligne->ID;
                            $num_pays  = $ligne->ID_pays;
                            $num_ville = $ligne->ID_ville;
                            $res_pays  = mysqli_query($con ,"SELECT Pays FROM pays WHERE ID_Pays='$num_pays'");
                            $res_ville = mysqli_query($con ,"SELECT Ville FROM ville WHERE ID_Ville='$num_ville'");
                            while($ligne_p = mysqli_fetch_object($res_pays))
                            {
                                while($ligne_v = mysqli_fetch_object($res_ville))
                                {
                                    echo '<tr align="center"><td>'.$ligne->Prenom.   '</td>
                                                             <td>'.$ligne->Nom.      '</td>
                                                             <td>'.$ligne->Email.    '</td>
                                                             <td>'.$ligne->Telephone.'</td>
                                                             <td>'.$ligne_p->Pays.   '</td>
                                                             <td>'.$ligne_v->Ville.  '</td>
                                                             <td>'.$ligne->Message.  '</td></tr>'; 
                                }   
                            }
                        } 
                    }
                ?>
            </table>
            <a href="ModifierUtilisateur.php" id="update" title="Voulez-vous effectuer des modifications sur vos données ou changer votre message ?">
                <i class="bi bi-pencil-square"></i>
            </a>
            <?php
                echo '<a href="AnnulerUtilisateur.php?id='.$num_user.'" id="delete" title="Voulez-vous vraiment annuler la saisie de vos données ainsi votre message ?">
                        <i class="bi bi-trash-fill"></i>
                      </a>';
            ?>
        </section>
    </body>
</html>
