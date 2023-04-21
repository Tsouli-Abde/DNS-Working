<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport"              content="width=device-width, initial-scale=1.0">
        <script type ="text/javascript" src ="../JS/Validation.js"></script>
        <script type ="text/javascript" src ="../JS/Annulation.js"></script>
        <script type ="text/javascript" src ="../js/Affiche.js"></script>
        <script type ="text/javascript" src ="../JS/Menu.js"></script>
        <link rel="stylesheet" href="../Styles/ContactStyle.css">
        <link rel="icon"       href="../Images/Icon.png">
        <title>Secure City ~ Contactez-nous</title>
    </head>
    <body>
        <div id="container">
            <?php 
                include("../HTML/Header.html"); 
            ?>

            <section>
                <div id="main">
                    <div id="ContainerForm">
                        <div id="ContactForm">
                            <form name="form" action="Traitement.php" method="POST">
                                <h2>Envoyer votre message</h2>
                                <table>
                                    <tr>
                                        <td>
                                            <div class="field">
                                                <input type="text"  name="prenom" placeholder="Prénom"    size="30" onchange="checkPrenom()"  required class="right" autofocus>
                                                <div class="icons">
                                                    <i id="pi1" class="icon1 bi bi-check-circle-fill"      ></i>
                                                    <i id="pi2" class="icon2 bi bi-exclamation-circle-fill"></i>
                                                    <i id="pi3" class="icon3 bi bi-x-circle-fill"          ></i>
                                                </div>
                                            </div>
                                            <span id="msg1"><br></span>
                                        </td>
                                        <td>
                                            <div class="field">
                                                <input type="text"  name="nom"    placeholder="Nom"       size="30" onchange="checkNom()"    required>
                                                <div class="icons">
                                                    <i id="ni1" class="icon1 bi bi-check-circle-fill"      ></i>
                                                    <i id="ni2" class="icon2 bi bi-exclamation-circle-fill"></i>
                                                    <i id="ni3" class="icon3 bi bi-x-circle-fill"          ></i>
                                                </div>
                                            </div>
                                            <span id="msg2"><br></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="field">
                                                <input type="email" name="email"  placeholder="E-mail"    size="30" onchange="checkEmail()"  required class="right">
                                                <div class="icons">
                                                    <i id="ei1" class="icon1 bi bi-check-circle-fill"      ></i>
                                                    <i id="ei2" class="icon2 bi bi-exclamation-circle-fill"></i>
                                                    <i id="ei3" class="icon3 bi bi-x-circle-fill"          ></i>
                                                </div>
                                            </div>
                                            <span id="msg3"><br></span>
                                        </td>
                                        <td>
                                            <div class="field">
                                                <input type="text"  name="tel"    placeholder="Téléphone" size="30" onchange="checkTele()"   required>
                                                <div class="icons">
                                                    <i id="ti1" class="icon1 bi bi-check-circle-fill"      ></i>
                                                    <i id="ti2" class="icon2 bi bi-exclamation-circle-fill"></i>
                                                    <i id="ti3" class="icon3 bi bi-x-circle-fill"          ></i>
                                                </div>
                                            </div>
                                            <span id="msg4"><br></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="field">
                                                <select name="listepays" id="listepays"  onchange='affiche(), checkPays()' class="right">
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
                                            <span id="msg5"><br></span>
                                        </td>
                                        <td>
                                            <select name="listville" id="listville" onchange='checkVille()'>
                                                <option value="">Sélectionner votre ville</option>
                                            </select>
                                            <br>
                                            <span id="msg6"><br></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            <div class="field">
                                                <textarea rows="4" name="message" placeholder="Message" onkeydown="checkMessage()" required ></textarea>
                                                <div class="icons">
                                                    <i id="mi1" class="icon1 bi bi-check-circle-fill"></i>
                                                    <i id="mi2" class="icon2 bi bi-exclamation-circle-fill"></i>
                                                </div>
                                            </div>
                                            <span id="msg7"><br></span>
                                        </td>
                                    </tr>
                                </table>

                                <div id="boutons">
                                    <input type="submit" name="valider" value="Valider" disabled id="sub">
                                    <input type="reset"  name="annuler" value="Annuler" onclick="Annuler()"> 
                                </div>
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