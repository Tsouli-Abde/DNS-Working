<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport"              content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../Styles/LogicielsLirePlusStyle.css">
        <link rel="icon"       href="../Images/Icon.png">
        <title>Secure City ~ Logiciels</title>
    </head>
    <body>
        <?php 
            include("../HTML/HeaderLirePlus.html"); 
        ?>
            
        <section>
            <div class="part" id="BIND">
                <h2>BIND</h2>
                <p>
                    Berkeley Internet Name Domain (BIND) est le serveur DNS le plus populaire actuellement utilisé. Il a été développé dans les années 1980 à l'Université de Berkley. 
                    Il s’agit d’un produit logiciel gratuit distribué avec la plupart des plates-formes Unix et Linux, où il est le plus souvent désigné par l’appellation named 
                    (name daemon). BIND peut être utilisé pour exécuter un serveur DNS de mise en cache ou un serveur de noms faisant autorité, et fournit des fonctionnalités 
                    telles que l'équilibrage de charge, la notification, la mise à jour dynamique, le DNS fractionné, DNSSEC, IPv6.
                </p>
                <img src="../Images/14.png" alt="BIND" width="220px" height="200px">
                <p>
                    BIND est le logiciel serveur DNS standard de facto. C'est le serveur DNS le plus largement déployé. Il est encore utilisé dans plus de 50% des serveurs DNS 
                    du monde et il équipe 12 des 13 serveurs racines. Historiquement, BIND a subi trois révisions majeures, chacune avec des architectures très différentes: 
                    BIND4, BIND8 et BIND9. BIND4 et BIND8 sont maintenant techniquement obsolètes. BIND9 est une réécriture de complète (de zéro) de BIND comportant un support 
                    DNSSEC complet en plus d'autres fonctionnalités et améliorations.
                </p>
                <p>
                    Internet Systems Consortium a entamé le développement d'une nouvelle version, BIND10. Sa première publication a eu lieu en avril 2010, mais la participation 
                    de ISC s'est achevée avec la publication de BIND10 version 1.2 en avril 2014. ISC a cité un manque de ressources pour poursuivre le développement de BIND10 
                    et ils ont réaffirmé leur engagement sur BIND9.
                </p>
                <p>
                    BIND comporte les principaux composants suivants :
                </p>
                <ul>
                    <li>
                        <b class="gras"><i class="bi bi-circle-fill"></i>Name server :</b>
                        <br>
                        <p>
                            Gère un fichier de zone DNS et répond aux requêtes DNS, agissant soit en tant que serveur de noms de mise en cache uniquement, à l’usage des clients internes 
                            à une organisation, soit en tant que serveur de noms faisant autorité uniquement, pour une utilisation par des clients externes.
                        </p>
                    </li>
                    <li>
                        <b class="gras"><i class="bi bi-circle-fill"></i>Résolveur léger :</b>
                        <br>
                        <p>
                            BIND fournit une combinaison d'une bibliothèque de résolution légère pouvant être exécutée sur des clients DNS, tels que des systèmes d'exploitation hôtes ou 
                            des routeurs, et un processus de démon de résolution pouvant s'exécuter sur un hôte local. Les deux communiquent à l'aide d'un protocole de résolution léger basé sur UDP.
                        </p>
                    </li>
                </ul>
                <a href="Ref.php">Aller vers les sources <i class="bi bi-arrow-right"></i></a>
            </div>
            <div class="part" id="ISC">
                <h2>ISC</h2>
                <p>
                    Internet Systems Consortium, abrégé par le sigle ISC, est un consortium de bienfaisance public à but non lucratif dont le but est d'aider à la mise en œuvre d'un Internet 
                    universel auto-organisé. Il s'agit d'une structure indépendante, les développeurs y participant créent et maintiennent notamment des logiciels comme une distribution DHCP 
                    (serveur et client), BIND (serveur DNS) ou encore d'InterNetNews (INN).
                </p>
                <img src="../Images/15.png" alt="ISC" width="280px" height="150px">
                <p>
                    Historiquement, l'ISC a été créé en 1994 sous le nom d'Internet Software Consortium pour permettre le développement de BIND jusque-là développé par l'Université de Berkeley 
                    et Vixie Enterprise. L'ISC change de nom (mais pas de sigle, par rétroacronymie) pour Internet Systems Consortium en 2004.
                </p>    
                <p>
                    ISC a développé plusieurs technologies Internet clés qui permettent l'Internet mondial, notamment : BIND, ISC DHCP et Kea. Parmi les autres projets logiciels qui ne sont 
                    plus en développement actif, citons OpenReg et ISC AFTR (une implémentation d'un protocole de transition IPv4/IPv6 basé sur Dual-Stack Lite). ISC exploite l'un des 13 
                    serveurs racine DNS mondiaux faisant autorité, F-Root. Au fil des ans, un certain nombre de systèmes logiciels supplémentaires ont été exploités sous ISC (par exemple : 
                    <span class="mot-cle">INN</span> et <span class="mot-cle">Lynx</span>) pour mieux prendre en charge l'infrastructure Internet. ISC a également élargi ses activités 
                    opérationnelles pour inclure des installations d'hébergement Internet pour d'autres projets open source tels que NetBSD, XFree86, kernel.org, un SNS (Service de Noms 
                    Secondaire) pour plus de 50 domaines de premier niveau et un DNS OARC (Operations, Centre d'Analyse et de Recherche) pour la surveillance et le reporting du DNS d'Internet. 
                    ISC participe activement au processus de conception communautaire ; il est l'auteur et participe au développement des normes IETF, y compris la production de logiciels open 
                    source gérés utilisés comme implémentation de référence du DNS. ISC est principalement financé par la vente de contrats de support technique pour ses logiciels open source.
                </p> 
                <a href="Ref.php">Aller vers les sources <i class="bi bi-arrow-right"></i></a>
            </div>
            <div class="part" id="AFNIC">
                <h2>AFNIC</h2>                
                <img src="../Images/16.png" alt="AFNIC" width="260px" height="150px">
                <p>
                    L'AFNIC pour Association Française pour le Nommage Internet en Coopération est une association à but non lucratif en charge de la gestion administrative et technique de 
                    la base de données des noms de domaine géographiques .fr (France) et .re (Île de la Réunion). Le dépôt des domaines en .fr est effectué par les bureaux d'enregistrement 
                    auprès de l'AFNIC pour le compte des déposants.
                </p>
                <p>
                    l'AFNIC est une émanation de l'INRIA (Institut National de Recherche en Informatique et en Automatique) qui gère les noms de domaine de la zone .fr à partir de 1986. 
                    Officiellement crée en 1997, l'association reprend la compétence. En 2006, le .fr, autrefois réservé aux associations, professionnels et organismes publics, s'ouvre 
                    aux particuliers. Depuis 2013, l'AFNIC veut évoluer et se placer comme opérateur technique pour accompagner l'ouverture de nouvelles extensions pour les noms de domaine. 
                    De plus elle participe à la coopération internationale et entend mener des projets de recherche et de développement afin de contribuer au bon fonctionnement et à la sécurité 
                    de l'Internet.
                </p>
                <p>
                    L’AFNIC a plusieurs missions parmi lesquelles :
                </p>
                <ul>
                    <li>
                        Attribuer et gérer des noms de domaine.
                    </li>
                    <li>
                        Gérer les domaines Internet nationaux de premier niveau.
                    </li>
                    <li>
                        Développer et fournir des services de support pour les applications de l’économie numérique.
                    </li>
                    <li>
                        Accompagner les entreprises et les collectivités locales dans l’acquisition et la gestion technique de leur TLD auprès de l’ICANN.
                    </li>
                    <li>
                        Fournir des solutions techniques et des services de registre.
                    </li>
                    <li>
                        Accomplir les missions confiées par les pouvoirs publics dans le cadre de la gestion d’Internet.
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