<?php
    include("connectionBD.php");
    if(isset($_POST['valider']))
    {
        session_start(); 
        $_SESSION['utilisateur'] = $_POST['prenom'];
        $maxid    = "select max(ID) from utilisateur";
	    $reqmaxid = mysqli_query($con,$maxid);
	    $rowmax   = mysqli_fetch_assoc($reqmaxid);
	    $id       = $rowmax['max(ID)']+1;
        $nom      = $_POST['nom'];
        $prenom   = $_POST['prenom'];
        $email    = $_POST['email'];
        $tel      = $_POST['tel'];
        $pays     = $_POST['listepays'];
        $ville    = $_POST['listville'];
        $msg      = $_POST['message'];
        $adduser  = "INSERT INTO utilisateur (ID, Nom, Prenom, Email, Telephone, ID_Pays, ID_Ville, Message) 
                     VALUES ('$id','$nom','$prenom','$email','$tel','$pays','$ville','$msg')";
        $resul    = mysqli_query($con,$adduser);	
        mysqli_close($con);
        header("location:/PFE/HTML/BienReçu.html");
    }
?>		