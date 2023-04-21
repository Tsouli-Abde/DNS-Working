<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport"              content="width=device-width, initial-scale=1.0">
        <script type = "text/javascript" src = "../JS/Menu.js"></script>
        <link rel="stylesheet" href="../Styles/TechniquesStyle.css">
        <link rel="icon"       href="../Images/Icon.png">
        <title>Secure City ~ Techniques</title>
    </head>
    <body>
        <div id="container">
            <?php 
                include("../HTML/Header.html"); 
            ?>
            
            <section>
                <div id="main">
                    <div class="part">
                        <img src="../Images/9.jpg" alt="ISC">
                        <div class="info">
                            <h1>Meilleure redondance</h1>
                            <p>
                                De manière à ce qu’un serveur affecté par une attaque puisse être remplacé en toute transparence par d’autres...
                            </p>
                            <a href="TechniquesLirePlus.php #redondance" class="bouton" id="bouton1">Lire plus</a>
                        </div>
                    </div>
                    <div class="part">
                        <img src="../Images/10.png" alt="BIND">
                        <div class="info">
                            <h1>DNSSEC</h1>
                            <p>
                                Protocole de sécurisation du DNS par l’authentiﬁcation des serveurs, ce système limitant notamment les attaques...
                            </p>
                            <a href="TechniquesLirePlus.php #DNSSEC" class="bouton" id="bouton2">Lire plus</a>
                        </div>
                    </div>
                    <div class="part">
                        <img src="../Images/11.jpg" alt="AFFNIC">
                        <div class="info">
                            <h1>Surveillance régulière</h1>
                            <p>
                                De préférence depuis plusieurs points de l’Internet. Il est souvent arrivé, en raison de la robustesse du DNS...
                            </p>
                            <a href="TechniquesLirePlus.php #surveillance" class="bouton" id="bouton3">Lire plus</a>
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