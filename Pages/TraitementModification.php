<?php
    include("connectionBD.php");
    if(isset($_POST['valider']))
    {
        $p        = $_SESSION['utilisateur'];
        $maxid    = "select max(ID) from utilisateur";
        $reqmaxid = mysqli_query($con,$maxid);         
        $rowmax   = mysqli_fetch_assoc($reqmaxid);
        $nom      = $_POST['nom'];
        $prenom   = $_POST['prenom'];
        $email    = $_POST['email'];
        $tel      = $_POST['telephone'];
        $pays     = $_POST['listepays'];
        $ville    = $_POST['listville'];
        $msg      = $_POST['message'];
        $update   = "UPDATE utilisateur SET Nom='$nom', Prenom='$prenom', Email='$email', Telephone='$tel', 
                                            ID_pays='$pays', ID_ville='$ville', Message='$msg' 
                                        WHERE ID='".$rowmax['max(ID)']."'";
        $result   = mysqli_query($con, $update);	
        if ($result)
        {
            header('Location: ModifierUtilisateurApres.php');
        }
        else
        {
            echo "La modification a été échouée !";
        }
    }
?>		