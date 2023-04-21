<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport"              content="width=device-width, initial-scale=1.0">
        <script type = "text/javascript" src = "../JS/Menu.js"></script>
        <link rel="stylesheet" href="../Styles/ConnexionStyle.css">
        <link rel="icon"       href="../Images/Icon.png">
        <title>Secure City ~ Connexion</title>
        <style>
            .conx
            { 
                color: red;
                font-size: 18px;
                font-weight: 600;
                margin-left: 10px;
            }		 
        </style>
    </head>
    <body>
        <?php   
            $l = $p = "";
            if(isset($_POST['Connexion'])) 
            {
                include("connectionBD.php");
                $sql = "SELECT * FROM Admin ";  
                $req = mysqli_query($con,$sql);
                while($row=mysqli_fetch_assoc($req))
                { 
                    if($_POST['admin']==$row['Login'])
                    {
                        if($_POST['mdp']==$row['Password'])
                        {
                            $l = $p = "";
                            session_start(); 
                            $_SESSION['monlogin'] = $_POST['admin'];
                            header('location: AdminInfo.php');
                            exit;
                        }
                        else
                        {
                            $l = "";
                            $p = "* Le mot de passe est incorrect !";
                            break;
                        }
                    }
                    else
                    {
                        if($_POST['mdp']==$row['Password'])
                        {
                            $l = "* Le nom d administrateur n existe pas !";
                            $p = "";
                            break;
                        }
                        else
                        {
                            $l = "* Le nom d administrateur n existe pas !";
                            $p = "* Le mot de passe est incorrect !";
                            continue;
                        }
                    }
                }
                mysqli_close($con);
            }   
        ?>
    
        <div id="container">
            <?php 
                include("../HTML/Header.html"); 
            ?>

            <section>
                <div id="main">
                    <div id="ContainerForm">
                        <div id="ContactForm">
                            <form name="form" action="Connexion.php" method="POST">
                                <h2>Vous devez s'identifier</h2>
                                <table>
                                    <tr>
                                        <td> 
                                            <div class="field">
                                                <input type="text"     name="admin" placeholder="Administrateur" size="30" required autofocus>
                                                <div class="icons">
                                                    <i class="bi bi-person-fill"></i>
                                                </div>
                                            </div>
                                            <?php
                                                echo "<span class='conx'>".$l."</span>";
                                            ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td> 
                                            <div class="field">
                                                <input type="password" name="mdp"   placeholder="Mot de passe"   size="30" required>
                                                <div class="icons">
                                                    <i class="bi bi-lock-fill"></i>
                                                </div>
                                            </div>
                                            <?php
                                                echo "<span class='conx'>".$p."</span>";
                                            ?>
                                        </td>
                                    </tr>
                                </table>
                                <input type="submit" name="Connexion" value="Connexion" id="sub">
                            </form>
                        </div>
                    </div>
                </div>
                
                <div class="shadow one"></div>
                <div class="shadow two"></div>
            </section>

            <?php 
                include("../HTML/Footer.html"); 
            ?>
        </div>
    </body>
</html>