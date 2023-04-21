<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport"              content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../Styles/DNSLirePlusStyle.css">
        <link rel="icon"       href="../Images/Icon.png">
        <title>Secure City ~ DNS</title>
    </head>
    <body>
        <?php 
            include("../HTML/HeaderLirePlus.html"); 
        ?>
        
        <section>
            <div class="part" id="para1">
                <img src="../Images/12.png" alt="DNS" width="350px" height="200px">
                <h2>Qu'est-ce que le DNS ?</h2>
                <p>
                    Le système de noms de domaine (DNS) est le répertoire téléphonique d'Internet. Les humains accèdent aux informations en ligne par le biais de noms de domaine,
                    comme <span class="mot-cle">facebook.com</span> ou <span class="mot-cle">espn.com</span>. Les navigateurs Web interagissent via des adresses IP (Internet Protocol). 
                    DNS traduit le domaine noms en adresses IP afin que les navigateurs puissent charger des ressources Internet.
                </p>
                <p>
                    Chaque appareil connecté à Internet possède une adresse IP unique que d'autres machines utilisent pour trouver l'appareil. Serveurs DNS éliminent le besoin pour les 
                    humains de mémoriser des adresses IP telles que <span class="mot-cle">192.168.1.1</span> (en IPv4), ou des adresses alphanumériques plus récentes et plus complexes 
                    adresses IP telles que <span class="mot-cle">2400:cb00:2048:1::c629:d7a2</span> (en IPv6).
                </p>
                <a href="Ref.php">Aller vers les sources <i class="bi bi-arrow-right"></i></a>
            </div>
            <div class="part" id="para2">
                <img src="../Images/13.png" alt="DNS" width="220px" height="280px">
                <h2>Qu'est-ce qu'un serveur DNS ?</h2>
                <p>
                    Un serveur DNS est un ordinateur avec une base de données contenant les adresses IP publiques associées aux noms dessites Web une adresse IP amène un utilisateur à. 
                    Le DNS agit comme un annuaire téléphonique pour Internet. Chaque fois que les gens tapent des noms de domaine dans la barre d'adresse des navigateurs Web, le DNS 
                    trouve la bonne adresse IP. L'adresse IP du site est ce qui dirige l'appareil au bon endroit pour accéder aux données du site.
                </p>
                <p>
                    Une fois que le serveur DNS trouve l'adresse IP correcte, les navigateurs prennent l'adresse et l'utilisent pour envoyer des données à la diffusion de contenu
                    serveurs périphériques réseau (CDN) ou serveurs d'origine. Une fois cela fait, les informations sur le site Web peuvent être consultées par l'utilisateur. Le serveur
                    DNS démarre le processus en trouvant l'adresse IP correspondante pour le localisateur de ressources uniforme d'un site Web (URL).
                </p>
                <a href="Ref.php">Aller vers les sources <i class="bi bi-arrow-right"></i></a>
            </div>
            <div class="part" id="para3">
                <h2>Comment fonctionne DNS ?</h2>
                <p>
                    Dans une requête DNS classique, l'URL saisie par l'utilisateur doit passer par quatre serveurs pour que l'adresse IP soit fournie. Le quatre serveurs fonctionnent 
                    ensemble pour obtenir l'adresse IP correcte du client, et ils incluent :
                </p>
                <table>
                    <tr>
                        <td>
                            <img id="img1" src="../Images/DNS Step 1.png" alt="DNS recursor" width="250px" height="100px">
                        </td>
                        <td>
                            <b class="gras"><i class="bi bi-circle-fill"></i>Le récurseur DNS :</b>
                            <br>
                            <p>
                                Egalement appelé résolveur DNS, reçoit la requête du client DNS. Ensuite, il communique avec d’autres serveurs DNS pour trouver la bonne adresse IP. 
                                Après la récupération du résolveur la demande du client, le résolveur agit comme un client lui-même. Ce faisant, il effectue des requêtes qui sont 
                                envoyés aux trois autres serveurs DNS.
                            </p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <img id="img2" src="../Images/DNS Step 2.png" alt="TLD nameservers" width="250px" height="100px">
                        </td>
                        <td>
                            <b class="gras"><i class="bi bi-circle-fill"></i>Le serveur de noms racine :</b>
                            <br>
                            <p>
                                Il est désigné pour la zone racine DNS d’Internet. Son travail est de répondre aux demandes lui a été envoyé pour les enregistrements dans la zone 
                                racine. Il répond aux demandes en renvoyant une liste des serveurs de noms faisant autorité qui vont avec le TLD correct.
                            </p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <img id="img3" src="../Images/DNS Step 3.png" alt="Root nameserves" width="250px" height="100px">
                        </td>
                        <td>
                            <b class="gras"><i class="bi bi-circle-fill"></i>Le serveur de noms TLD :</b>
                            <br>
                            <p>
                                Il conserve l’adresse IP du domaine de deuxième niveau contenue dans le nom TLD. Il puis libère l’adresse IP du site Web et envoie la requête au 
                                serveur de noms du domaine.
                            </p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <img id="img4" src="../Images/DNS Step 4.png" alt="Authoritative nameservers" width="250px" height="100px">
                        </td>
                        <td>
                            <b class="gras"><i class="bi bi-circle-fill"></i>Le serveur de noms faisant autorité :</b>
                            <br>
                            <p>
                                Il est ce qui vous donne la vraie réponse à votre requête DNS. Il y a deux types de serveurs de noms faisant autorité :
                            </p>
                            <ul>
                                <li>
                                    <b><i class="bi bi-square-fill"></i>Master server ou primary nameserver :</b>
                                    <br>
                                    <p>
                                        Conserve les copies originales des enregistrements de zone.
                                    </p>                                    
                                </li>
                                <li>
                                    <b><i class="bi bi-square-fill"></i>Slave server ou secondary nameserver :</b> 
                                    <br>
                                    <p>
                                        Est une copie exacte du serveur maître, il partage la charge du serveur DNS et agit comme une sauvegarde 
                                        en cas de défaillance du serveur maître.
                                    </p>
                                </li>
                            </ul>
                        </td>
                    </tr>
                </table>
                <a href="Ref.php">Aller vers les sources <i class="bi bi-arrow-right"></i></a>
            </div>
        </section>

        <?php 
            include("../HTML/Footer.html"); 
        ?>
    </body>
</html>