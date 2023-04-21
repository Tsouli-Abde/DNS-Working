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
        <script type ="text/javascript" src ="../js/Enregistrer.js"></script>
        <script type ="text/javascript" src ="../js/Affiche.js"></script>
        <link rel="stylesheet" href="../Styles/ModifierUtilisateurStyle.css">
        <link rel="icon"       href="../Images/Icon.png">
        <title>Secure City ~ Espace Utilisateur</title>
    </head>
    <body>
        <section>
            <?php
                echo "<span id='slt'>Bienvenue <b>".$_SESSION['utilisateur']."</b> !</span><br>";
            ?>
            <a id="btn" href="../Pages/Accueil.php">Accueil</a>
            <span id="msg">Inserez vos nouvelles données et votre nouveau message :</span>
            <?php                  
                include("connectionBD.php");
                $prenom   = $_SESSION['utilisateur'];
                $maxid    = "select max(ID) from utilisateur";
                $reqmaxid = mysqli_query($con,$maxid);         
	            $rowmax   = mysqli_fetch_assoc($reqmaxid);
                $id = $p = $n = $e = $t = $c = $v = $m = "";
                $resultat = mysqli_query($con ,"SELECT * FROM utilisateur WHERE Prenom='$prenom' AND ID='".$rowmax['max(ID)']."'");
                if($resultat) 
                { 
                    while($ligne = mysqli_fetch_object($resultat)) 
                    {
                        $num_pays  = $ligne->ID_pays;
                        $num_ville = $ligne->ID_ville;
                        $res_pays  = mysqli_query($con ,"SELECT Pays FROM pays WHERE ID_Pays='$num_pays'");
                        $res_ville = mysqli_query($con ,"SELECT Ville FROM ville WHERE ID_Ville='$num_ville'");
                        while($ligne_p = mysqli_fetch_object($res_pays))
                        {
                            while($ligne_v = mysqli_fetch_object($res_ville))
                            {
                                $id = $ligne->ID;
                                $p  = $ligne->Prenom;
                                $n  = $ligne->Nom;
                                $e  = $ligne->Email;
                                $t  = $ligne->Telephone;
                                $c  = $ligne_p->Pays;
                                $v  = $ligne_v->Ville;
                                $m  = $ligne->Message; 
                            }   
                        }
                    } 
                }                
            ?>
            <form name="form" action="TraitementModification.php" method="POST">
                <table cellspacing="4"> 
                    <tr>
                        <th id="th"></th>
                        <th class="th thd">Anciennes données</th>
                        <th class="th thd">Nouvelles données</th>
                        <th></th>
                    </tr>
                    <tr> 
                        <th class="th">Prénom    </th>
                        <td class="td">
                            <?php echo $p; ?>
                        </td>
                        <td>
                            <div class="field">
                                <input type="text" name="prenom"     placeholder="Nouveau prénom"   size="30" onchange="checkPrenom()"    required autofocus>       
                                <div class="icons">
                                    <i id="pi1" class="icon1 bi bi-check-circle-fill"      ></i>
                                    <i id="pi2" class="icon2 bi bi-exclamation-circle-fill"></i>
                                    <i id="pi3" class="icon3 bi bi-x-circle-fill"          ></i>
                                </div>                         
                            </div>
                        </td>
                        <td id="msg1"></td>
                    </tr>
                    <tr>                    
                        <th class="th">Nom       </th>
                        <td class="td">
                            <?php echo $n; ?>
                        </td>
                        <td>
                            <div class="field"> 
                                <input type="text" name="nom"       placeholder="Nouveau nom"       size="30" onchange="checkNom()"       required>                         
                                <div class="icons">
                                    <i id="ni1" class="icon1 bi bi-check-circle-fill"      ></i>
                                    <i id="ni2" class="icon2 bi bi-exclamation-circle-fill"></i>
                                    <i id="ni3" class="icon3 bi bi-x-circle-fill"          ></i>
                                </div>      
                            </div>
                        </td>
                        <td id="msg2"></td>
                    </tr>
                    <tr>
                        <th class="th">E-mail    </th>
                        <td class="td">
                            <?php echo $e; ?>
                        </td>
                        <td>
                            <div class="field">           
                                <input type="email" name="email"    placeholder="Nouveau e-mail"    size="30" onchange="checkEmail()"     required>                     
                                <div class="icons">
                                    <i id="ei1" class="icon1 bi bi-check-circle-fill"      ></i>
                                    <i id="ei2" class="icon2 bi bi-exclamation-circle-fill"></i>
                                    <i id="ei3" class="icon3 bi bi-x-circle-fill"          ></i>
                                </div>
                            </div>
                        </td>
                        <td id="msg3"></td>
                    </tr>
                    <tr>
                        <th class="th">Téléphone </th>
                        <td class="td">
                            <?php echo $t; ?>
                        </td>
                        <td>
                            <div class="field">
                                <input type="text" name="telephone" placeholder="Nouveau téléphone" size="30" onchange="checkTelephone()" required>
                                <div class="icons">
                                    <i id="ti1" class="icon1 bi bi-check-circle-fill"      ></i>
                                    <i id="ti2" class="icon2 bi bi-exclamation-circle-fill"></i>
                                    <i id="ti3" class="icon3 bi bi-x-circle-fill"          ></i>
                                </div>
                            </div>
                        </td>
                        <td id="msg4"></td>
                    </tr>
                    <tr>
                        <th class="th">Pays      </th>
                        <td class="td">
                            <?php echo $c; ?>
                        </td>
                        <td>
                            <div class="field">
                                <select name="listepays" id="listepays"  onchange='affiche(), checkPays()'>
                                    <option value="-1" disabled selected>Sélectionner votre pays</option>
                                    <?php
                                        include('connectionBD.php');
                                        $sql = "SELECT * FROM pays ";  
                                        $req = mysqli_query($con,$sql);
                                        while($row=mysqli_fetch_assoc($req))
                                        { 
                                            echo '<option value="'.$row['ID_Pays'].'">'.$row['Pays'].'</option>'; 
                                        }
                                    ?>
                                </select>
                                <div class="flags">
                                    <img id="Morocco"     src="../Images/Morocco.png"      alt="Morocco">
                                    <img id="Algeria"     src="../Images/Algeria.png"      alt="Algeria">
                                    <img id="Tunisia"     src="../Images/Tunisia.png"      alt="Tunisia">
                                    <img id="Spain"       src="../Images/Spain.png"        alt="Spain">
                                    <img id="France"      src="../Images/France.png"       alt="France">
                                    <img id="UK"          src="../Images/UK.png"           alt="UK">
                                    <img id="USA"         src="../Images/USA.png"          alt="USA">
                                    <img id="Canada"      src="../Images/Canada.png"       alt="Canada">                                                    
                                    <img id="Australia"   src="../Images/Australia.png"    alt="Australia">
                                </div>
                            </div>
                        </td>
                        <td id="msg5"></td>
                    </tr>
                    <tr>
                        <th class="th">Ville      </th>
                        <td class="td">
                            <?php echo $v; ?>
                        </td>
                        <td>
                            <select name="listville" id="listville" onchange="checkVille()">
                                <option value="">Sélectionner votre ville</option>
                            </select>
                        </td>
                        <td id="msg6"></td>
                    </tr>
                    <tr>
                        <th class="th">Message    </th>
                        <td class="td">
                            <?php echo $m; ?>
                        </td>
                        <td>
                            <div class="field">
                                <input type="text" name="message"   placeholder="Nouveau message"  size="500" onchange="checkMessage()"   required>
                                <div class="icons">
                                    <i id="mi1" class="icon1 bi bi-check-circle-fill"></i>
                                    <i id="mi2" class="icon2 bi bi-exclamation-circle-fill"></i>
                                </div>
                            </div>
                        </td>
                        <td id="msg7"></td>
                    </tr>                    
                </table>

                <div id="boutons">
                    <button type="button" id="save" onclick="enregistrer()">Enregistrer</button>
                    <input  type="submit" id="sub"  name="valider" value="Valider" disabled>
                </div>
            </form>
        </section>
    </body>
</html>
