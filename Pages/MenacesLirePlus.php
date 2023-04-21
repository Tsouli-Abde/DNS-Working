<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport"              content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../Styles/MenacesLirePlusStyle.css">
        <link rel="icon"       href="../Images/Icon.png">
        <title>Secure City ~ Menaces</title>
    </head>
    <body>
        <?php 
            include("../HTML/HeaderLirePlus.html"); 
        ?>
            
        <section>
            <div class="part" id="direct">
                <h2>Les menaces directes</h2>
                <p>
                    Les attaques sur les infrastructures DNS sont principalement techniques, utilisant des attaques de masse ou des techniques qui corrompent les informations 
                    échangées entre les résolveurs et les serveurs DNS :
                </p>
                <ul>
                    <li>
                        <b class="gras"><i class="bi bi-circle-fill"></i>Déni de service :</b>
                        <br>
                        <p>
                            Les attaques (DoS) sont des tentatives visant à rendre un service donné impossible 
                            ou très difficile d’accès. Les attaques utilisent parfois la force brute (saturer les serveurs 
                            par inondation avec des requêtes simultanées) ou optez pour une approche plus subtile en épuisant un rare 
                            sur le serveur. Attaques contre le système racine DNS en février 2007 étaient principalement 
                            des attaques DoS.
                        </p>
                    </li>
                    <li>
                        <b class="gras"><i class="bi bi-circle-fill"></i>Déni de service distribué :</b>
                        <br>
                        <p>
                            Les attaques (DDoS) sont une forme élaborée de DoS qui impliquent 
                            des milliers d’ordinateurs généralement dans le cadre d’un réseau de botnets ou de robots; un réseau d’ordinateurs zombies 
                            que l’attaquant réquisitionne à leur insu propriétaires en propageant des logiciels malveillants d’une machine à une autre.
                        </p>
                    </li>
                    <li>
                        <b class="gras"><i class="bi bi-circle-fill"></i>Attaques DNS basées sur le botnet :</b>
                        <br>
                        <p>
                            Fondamentalement, l'attaque basée sur ces réseaux d'ordinateurs connectés et infectés consiste à exécuter DDoS. 
                        </p>
                        <img id="img1" src="../Images/17.png" width="440px" height="220px">
                        <p>
                            Un seul botnet serait suffisamment grand pour rendre un serveur DNS normal inutile. Simplement, chaque zombie doit être «programmé» 
                            pour envoyer plusieurs demandes d'accès à une ressource Web reconnue par ce serveur DNS. Ensuite, ledit serveur sera saturé par tant 
                            de requêtes, il ne pourra pas y répondre et par conséquent, il cessera de fonctionner. 
                        </p>
                        <br>
                    </li>
                    <li>
                        <b class="gras"><i class="bi bi-circle-fill"></i>Attaques DNS Flood :</b>
                        <br>
                        <p>
                            Le but de cette attaque est d'obtenir la capacité du serveur DNS à la limite. Au point où vous ne pouvez plus recevoir de demandes.
                        </p>
                        <img id="img2" src="../Images/18.png" width="450px" height="250px">
                        <p>
                            Un cybercriminel peut infecter un ou plusieurs ordinateurs sur un réseau en créant un réseau de zombies. Comme vous pouvez le voir, 
                            c'est l'une des attaques qui peuvent être exécutées via un botnet. Tous les ordinateurs infectés commencent à envoyer plusieurs 
                            demandes DNS pour faire correspondre les noms de domaine et les adresses IP.
                        </p>
                        <p>
                            Il atteint une instance où il y a tant de demandes et cesse d'être opérationnel. Par conséquent, tout utilisateur légitime qui fait 
                            une demande DNS et passe par le serveur affecté ne peut tout simplement pas obtenir le résultat attendu: accéder à une ressource Web. 
                            Il s'agit de l'une des circonstances dans lesquelles un utilisateur n'aurait pas accès à une ou plusieurs pages sur Internet.
                        </p>
                    </li>
                    <li>
                        <b class="gras"><i class="bi bi-circle-fill"></i>Empoisonnement du cache DNS :</b>
                        <br>
                        <p>
                            Trompe le résolveur en lui faisant croire que le serveur «pirate» est un serveur faisant autorité à la place du serveur d’origine. 
                            Ces attaques capturent et détournent requêtes à un autre site Web à l’insu des utilisateurs, le danger étant que les utilisateurs 
                            pourraient divulguer des données personnelles sur ce qu’ils croient être un site de bonne foi. 
                        </p>
                        <p>
                            Supposons que vous souhaitiez accéder au site Web de votre banque et que, sans trop y prêter attention, vous constatiez que vous 
                            avez effectivement accédé à la page officielle. Apparemment, tout se ressemble et il n'y a rien à craindre. Cependant, vous entrez 
                            vos données d'accès et à un certain moment, vous vous rendez compte que quelque chose ne va pas.
                        </p>
                        <img id="img3" src="../Images/19.png" width="440px" height="220px">
                        <p>
                            Mais comment ça mise en cache dans DNS ? C’est un processus dans lequel un DNS serveur résout . Sa fonction est de stocker les 
                            réponses des requêtes DNS pendant un certain temps. Il s'agit de répondre à toutes les demandes DNS beaucoup plus rapidement, sans 
                            passer par tout le processus de résolution des noms de domaine.
                        </p>
                        <br>
                        <img id="img4" src="../Images/20.png" width="440px" height="220px">
                        <p>
                            Malheureusement, un cybercriminel peut prendre le contrôle du DNS en résolvant et en modifiant les réponses à toutes les demandes 
                            DNS stockées. Par exemple, si le site <span class="mot-cle">www.example.com</span> était associé à l'origine à l'IP 
                            <span class="mot-cle">192.0.0.16</span>, le cybercriminel peut modifier cette réponse en associant le domaine à une IP malveillante: 
                            <span class="mot-cle">192.0.0.17</span>.
                        </p>
                        <br>
                    </li>
                    <li>
                        <b class="gras"><i class="bi bi-circle-fill"></i>Attaque de déni de service distribué réflexif :</b>
                        <br>
                        <p>
                            Ceci est une autre preuve que les attaques DDoS peuvent atteindre de grandes échelles. Les serveurs qui agissent comme des réflecteurs 
                            dans cette variante de DDoS peuvent appartenir à différents réseaux. L'avantage pour l'attaquant est qu'il devient très difficile de 
                            retracer le schéma d'attaque.
                        </p>
                        <img id="img5" src="../Images/21.png" width="450px" height="250px">
                        <p>
                            Par conséquent, plusieurs réseaux peuvent participer à un Attaque DrDoS . Si j'ai trois serveurs réflecteurs qui appartiennent à trois 
                            réseaux différents, le cybercriminel pourrait prendre le contrôle de ces trois réseaux afin que tous les appareils connectés participent 
                            à l'attaque.
                        </p>
                        <p>
                            Déplaçons cela dans le contexte DNS. S'il y a plusieurs appareils connectés à partir de plusieurs réseaux et à leur tour, tous ces réseaux 
                            ont des serveurs réfléchissants, ces derniers ne seront pas affectés par le grand nombre de requêtes DNS qui les traversent. Précisément, 
                            cette fonctionnalité des réflecteurs les fait rediriger directement ce grand nombre de demandes vers le serveur DNS victime.
                        </p>
                        <p>
                            Le serveur affecté recevra tant de demandes illégitimes, ainsi que des demandes légitimes. Comme sa capacité a atteint sa limite, il 
                            commencera à rejeter les colis, y compris ceux qui correspondent à des demandes légitimes. Par conséquent, arrêtez de répondre.
                        </p>
                    </li>
                </ul>
                <a href="Ref.php">Aller vers les sources <i class="bi bi-arrow-right"></i></a>
            </div>
            <div class="part" id="indirect">
                <h2>Les menaces indirectes</h2>
                <p>
                    Certaines attaques peuvent chercher à exploiter le côté administratif des noms de domaine plutôt que directement cibler les infrastructures 
                    et les serveurs DNS :
                </p>
                <ul>
                    <li>
                        <b class="gras"><i class="bi bi-circle-fill"></i>Cybersquattage :</b>
                        <img id="img6" src="../Images/22.png" width="300px" height="150px">
                        <p>
                            Le cybersquatting est une pratique consistant à s’accaparer, en le déposant, un nom de domaine, reprenant ou évoquant une marque, 
                            un nom commercial, un patronyme ou toute autre dénomination sur laquelle le déposant n’a aucun droit et ce afin de tirer un profit 
                            matériel ou moral de sa notoriété présente ou à venir. Il existe de nombreuses techniques de cybersquattage, et le but général est 
                            de voler l’identité de la victime et/ou détourner le trafic du site Web de la victime.
                        </p>
                        <p>
                            Les objectifs du cybersquatting peuvent être différents :
                        </p>
                        <ul>
                            <li>
                                Bloquer l’accès au nom, à la marque.
                            </li>
                            <li>
                                Revendre ou marchander le nom de domaine auprès de la marque légitime.
                            </li>
                            <li>
                                Profiter de la notoriété de la marque pour drainer du trafic sur le site web en utilisant le nom de domaine.
                            </li>
                            <li>
                                Nuire à l’image de la marque ou de la société légitime, en associant par exemple au nom de domaine un site pornographique.
                            </li>
                            <li>
                                Associer le nom de domaine à un site qui affiche des produits de contrefaçon.
                            </li>
                            <li>
                                Associer le nom de domaine à un site web frauduleux utilisé pour une attaque en “phishing” ou pour crédibiliser une arnaque 
                                diffusée par spam.
                            </li>
                            <img id="img7" src="../Images/23.png" width="300px" height="150px">
                            <li>
                                Utiliser le nom de domaine pour l’envoi de mails de spam. Certains cybersquatteurs mettent sous surveillance automatique les 
                                noms de domaine de sociétés notoires, en espérant qu’elles oublient de renouveler leur nom de domaine. Ces noms seront 
                                aussitôt redéposés dans le but d’engager une éventuelle négociation financière.
                            </li>
                        </ul>
                    </li>
                    <li>
                        <b class="gras"><i class="bi bi-circle-fill"></i>DNS hijacking ou vol :</b>
                        <br>
                        <p>
                            DNS hijacking, également appelé redirection DNS, est un type d’attaque DNS dans lequel les requêtes DNS sont résolues de manière 
                            incorrecte afin de rediriger de manière inattendue les utilisateurs vers des sites malveillants. Pour effectuer l’attaque, les 
                            auteurs installent des logiciels malveillants sur les ordinateurs des utilisateurs, prennent le contrôle des routeurs ou interceptent 
                            ou piratent la communication DNS.
                        </p>
                        <p>
                            Le DNS hijacking peut être utilisé pour le pharming (dans ce contexte, les attaquants affichent généralement des publicités indésirables 
                            pour générer des revenus) ou pour le phishing (affichage de fausses versions de sites auxquels les utilisateurs accèdent et vol de données 
                            ou d’informations d’identification).
                        </p>
                        <p>
                            De nombreux fournisseurs de services Internet (FAI) utilisent également un type de DNS hijacking pour prendre en charge les requêtes DNS 
                            d’un utilisateur, collecter des statistiques et renvoyer des annonces lorsque les utilisateurs accèdent à un domaine inconnu. Certains 
                            gouvernements l'utilisent pour la censure, redirigeant les utilisateurs vers des sites autorisés par le gouvernement.
                        </p>
                        <p>
                            Il existe quatre types de base de cette attaque :
                        </p>
                        <img id="img8" src="../Images/24.png" width="360px" height="220px">
                        <ul id="types4">
                            <li>
                                <b><i class="bi bi-square-fill"></i>Local DNS hijack :</b>
                                <br>
                                <p>
                                    Les attaquants installent des chevaux de Troie sur l’ordinateur d’un utilisateur et modifient les paramètres DNS locaux pour rediriger 
                                    l’utilisateur vers des sites malveillants.
                                </p>                                    
                            </li>
                            <li>
                                <b><i class="bi bi-square-fill"></i>Router DNS hijack :</b> 
                                <br>
                                <p>
                                    De nombreux routeurs ont des mots de passe par défaut ou des vulnérabilités de microprogramme. Les attaquants peuvent prendre le contrôle 
                                    d’un routeur et écraser les paramètres DNS, affectant tous les utilisateurs connectés à ce routeur.
                                </p>
                            </li>
                            <li>
                                <b><i class="bi bi-square-fill"></i>Man in the middle DNS attacks :</b> 
                                <br>
                                <p>
                                    Les attaquants interceptent la communication entre un utilisateur et un serveur DNS et fournissent différentes adresses IP de destination 
                                    pointant vers des sites malveillants.
                                </p>
                            </li>
                            <li>
                                <b><i class="bi bi-square-fill"></i>Rogue DNS Server :</b> 
                                <br>
                                <p>
                                    Les attaquants peuvent pirater un serveur DNS et modifier les enregistrements DNS pour rediriger les requêtes DNS vers des sites malveillants.
                                </p>
                            </li>
                        </ul>
                    </li>
                </ul>
                <a href="Ref.php">Aller vers les sources <i class="bi bi-arrow-right"></i></a>
            </div>
        </section>

        <?php 
            include("../HTML/Footer.html"); 
        ?>
    </body>
</html>