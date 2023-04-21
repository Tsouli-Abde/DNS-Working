<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport"              content="width=device-width, initial-scale=1.0">
        <script type = "text/javascript" src = "../JS/Menu.js"></script>
        <link rel="stylesheet" href="../Styles/AccueilStyle.css">
        <link rel="icon"       href="../Images/Icon.png">
        <title>Secure City ~ Accueil</title>
    </head>
    <body>
        <div id="container">
            <?php 
                include("../HTML/Header.html"); 
            ?>

            <section>
                <div id="main">
                    <div id="text">
                        <h1>Les services DNS</h1>
                        <p>
                            Le DNS est un service informatique très utile, surtout sur Internet, qui permet de résoudre des noms de domaine en adresses IP. <br>
                            Le Domain Name System ou DNS est un service informatique distribué utilisé qui traduit les noms de domaine Internet en adresse IP ou
                            autres enregistrements. En fournissant dès les premières années d'Internet, autour de 1985, un service distribué de résolution de noms, 
                            le DNS est un composant essentiel du développement du réseau.
                        </p>
                        <a id="btn" href="DNS.php">Pour plus d'informations</a>
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