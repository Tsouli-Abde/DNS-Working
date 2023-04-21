<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport"              content="width=device-width, initial-scale=1.0">
        <script type = "text/javascript" src = "../JS/Menu.js"></script>
        <link rel="stylesheet" href="../Styles/MenacesStyle.css">
        <link rel="icon"       href="../Images/Icon.png">
        <title>Secure City ~ Menaces</title>
    </head>
    <body>
        <div id="container">
            <?php 
                include("../HTML/Header.html"); 
            ?>
            
            <section>
                <div id="main">
                    <div class="part">
                        <img src="../Images/7.jpg" alt="Les menaces directes">
                        <div class="info">
                            <h1>Les menaces directes</h1>
                            <p>
                                Les attaques sur les infrastructures DNS sont principalement techniques, utilisant des attaques de masse ou des techniques...
                            </p>
                            <a href="MenacesLirePlus.php #direct" class="bouton" id="bouton1">Lire plus</a>
                        </div>
                    </div>
                    <div class="part">
                        <img src="../Images/8.jpg" alt="Les menaces indirectes">
                        <div class="info">
                            <h1>Les menaces indirectes</h1>
                            <p>
                                Certaines attaques peuvent chercher à exploiter le côté administratif des noms de domaine plutôt que directement ciblant...
                            </p>
                            <a href="MenacesLirePlus.php #indirect" class="bouton" id="bouton2">Lire plus</a>
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