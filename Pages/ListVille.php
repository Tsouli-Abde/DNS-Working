<?php
    echo "<select name='listville'>";
    if(isset($_POST["idPays"]))
    {
        include('connectionBD.php');
        $query = "SELECT * FROM Ville WHERE ID_Pays = '".$_POST["idPays"]."'"; 
        $results =  mysqli_query($con,$query);
        echo '<option value="'.'" disabled selected>Sélectionner votre ville</option>';
        while($row=mysqli_fetch_assoc($results))
        { 
            echo '<option value="'.$row['ID_Ville'].'">'.$row['Ville'].'</option>'; 
        }
    }
    echo "</select>";
?>