<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport"              content="width=device-width, initial-scale=1.0">
        <script type = "text/javascript" src = "../JS/Menu.js"></script>
        <link rel="stylesheet" href="../Styles/DNSStyle.css">
        <link rel="icon"       href="../Images/Icon.png">
        <title>Secure City ~ DNS</title>
    </head>
    <body>
        <div id="container">
            <?php 
                include("../HTML/Header.html"); 
            ?>
            
            <section>
                <div id="main">
                    <div class="part">
                        <img src="../Images/1.jpeg" alt="Définition de DNS server">
                        <div class="info">
                            <h1>Qu'est-ce qu'un serveur DNS ?</h1>
                            <p>
                                Un serveur DNS est un ordinateur avec une base de données contenant les adresses IP publiques associées aux noms des...
                            </p>
                            <a href="DNSLirePlus.php #para2" class="bouton" id="bouton1">Lire plus</a>
                        </div>
                    </div>
                    <div class="part">
                        <img src="../Images/2.jpg" alt="Définition de DNS">
                        <div class="info">
                            <h1>Qu'est-ce que le DNS ?</h1>
                            <p>
                                Le système de noms de domaine (DNS) est le répertoire téléphonique d'Internet. Les humains accèdent aux informations...
                            </p>
                            <a href="DNSLirePlus.php #para1" class="bouton" id="bouton2">Lire plus</a>
                        </div>
                    </div>
                    <div class="part">
                        <img src="../Images/3.jpg" alt="Les étapes de DNS">
                        <div class="info">
                            <h1>Comment fonctionne DNS ?</h1>
                            <p>
                                Dans une requête DNS classique, l'URL saisie par l'utilisateur doit passer par quatre serveurs pour que l'adresse IP soit fournie...
                            </p>
                            <a href="DNSLirePlus.php #para3" class="bouton" id="bouton3">Lire plus</a>
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