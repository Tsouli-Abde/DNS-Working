<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport"              content="width=device-width, initial-scale=1.0">
        <script type = "text/javascript" src = "../JS/Menu.js"></script>
        <link rel="stylesheet" href="../Styles/LogicielsStyle.css">
        <link rel="icon"       href="../Images/Icon.png">
        <title>Secure City ~ Logiciels</title>
    </head>
    <body>
        <div id="container">
            <?php 
                include("../HTML/Header.html"); 
            ?>
            
            <section>
                <div id="main">
                    <div class="part">
                        <img src="../Images/4.jpeg" alt="ISC">
                        <div class="info">
                            <h1>ISC</h1>
                            <p>
                                Internet Systems Consortium (ISC) est une société de bienfaisance publique à but non lucratif enregistrée au Delaware...
                            </p>
                            <a href="LogicielsLirePlus.php #ISC" class="bouton" id="bouton1">Lire plus</a>
                        </div>
                    </div>
                    <div class="part">
                        <img src="../Images/5.png" alt="BIND">
                        <div class="info">
                            <h1>BIND</h1>
                            <p>
                                Berkeley Internet Name Domain (BIND) est le serveur DNS le plus populaire actuellement utilisé. Il a été développé dans...
                            </p>
                            <a href="LogicielsLirePlus.php #BIND" class="bouton" id="bouton2">Lire plus</a>
                        </div>
                    </div>
                    <div class="part">
                        <img src="../Images/6.jpeg" alt="AFFNIC">
                        <div class="info">
                            <h1>AFNIC</h1>
                            <p>
                                L’Association Française pour le Nommage Internet en Coopération (AFNIC) est une organisation à but non lucratif créée...
                            </p>
                            <a href="LogicielsLirePlus.php #AFNIC" class="bouton" id="bouton3">Lire plus</a>
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