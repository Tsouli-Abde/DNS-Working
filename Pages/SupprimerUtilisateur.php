<?php
    include("connectionBD.php");
    if(isset($_GET['id']) && !empty($_GET['id']))
    {
        $getid  = $_GET['id'];
        $delete = "DELETE FROM utilisateur WHERE ID=".$getid;
        $result = mysqli_query($con, $delete);
        if ($result)
        {
            header('Location: AdminInfo.php');
        }
        else
        {
            echo "La suppression a été échouée !";
        }
    }
    else
    {
        echo "Aucun identifiant trouvé !";
    }
?>