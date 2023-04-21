<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport"              content="width=device-width, initial-scale=1.0">
        <script type ="text/javascript" src ="../JS/Menu.js"></script>
        <link rel="stylesheet" href="../Styles/AboutStyle.css">
        <link rel="icon"       href="../Images/Icon.png">
        <title>Secure City ~ À propos</title>
    </head>
    <body>
        <div id="container">
            <?php 
                include("../HTML/Header.html"); 
            ?>

            <section>
                <div id="main">
                    <div id="about">
                        <div id="QSN">
                            <h1>Qui sommes-nous?</h1>
                        </div>
                        <div id="cards">
                            <div class="card">
                                <div class="image" id="image1">
                                    <div class="icons">
                                        <a href="https://www.facebook.com/adambalery20"     target="blank"><i class="fa fa-facebook"></i></a>
                                        <a href="https://www.instagram.com/adambalery_ahb/" target="blank"><i class="fa fa-instagram"></i></a>
                                        <a href="https://twitter.com/AdamBalery_AHB"        target="blank"><i class="fa fa-twitter"  ></i></a>
                                    </div>
                                </div>
                                <h2 id="nom1">BOULERHCHA <span>Abdelhamid</span></h2>
                                <p>
                                    Je suis un étudiant de 19 ans, j'étudie le développement à l'ESTO, et ce site Web est mon
                                    projet de fin d'étude créé avec mon camarade Tsouli. Je suis un chanteur et un musicien à 
                                    temps partiel, mais je sacrifie mon temps au travail et me développer techniquement et 
                                    professionnellement. Voici mes coordonnées pour me contacter : <br><br>
                                    <i class="bi bi-telephone"></i> Tél : 06-18-32-19-64 <br>
                                    <i class="bi bi-envelope"> </i> E-mail : <a href="mailto:Abdelhamidboulerhcha@gmail.com">Abdelhamidboulerhcha@gmail.com</a>
                                </p>
                            </div>
                            <div class="card">
                                <div class="image" id="image2">
                                    <div class="icons">
                                        <a href="#"                                       target="blank"><i class="fa fa-facebook"></i></a>
                                        <a href="https://www.instagram.com/tsouli.abduu/" target="blank"><i class="fa fa-instagram"></i></a>
                                        <a href="#"                                       target="blank"><i class="fa fa-twitter"  ></i></a>
                                    </div>
                                </div>
                                <h2 id="nom2">TSOULI <span>Abderrahmane</span></h2>
                                <p> 
                                    Je suis un étudiant en DAI 2, et ce site est mon premier
                                    grand projet à l'ESTO sur lequelle j'ai travaillé avec mon camarade,
                                    sur le sujet des techniques de sécurité DNS
                                    et voici mes coordonnées si vous désirer me contacter personnellement : <br><br>
                                    <i class="bi bi-telephone"></i> Tél : 06-96-84-68-57 <br>
                                    <i class="bi bi-envelope"></i> E-mail : <a href="mailto:Tsouli.abderrahmane@gmail.com">Tsouli.abderrahmane@gmail.com</a>
                                </p>
                            </div>
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