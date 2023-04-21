<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport"              content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../Styles/TechniquesLirePlusStyle.css">
        <link rel="icon"       href="../Images/Icon.png">
        <title>Secure City ~ Techniques</title>
    </head>
    <body>
        <?php 
            include("../HTML/HeaderLirePlus.html"); 
        ?>
            
        <section>
            <div class="part" id="DNSSEC">
                <h2>DNSSEC</h2>
                <p>
                    Les extensions de sécurité du système des noms de domaine (DNSSEC) est un protocole de sécurisation du DNS par l’authentiﬁcation des 
                    serveurs, ce système limitant notamment les attaques par empoisonnement, permettent aux titulaires de noms de domaine de signer 
                    numériquement l’information qu’ils envoient à travers le système des noms de domaine (DNS). Il s’agit d’un moyen de protéger les 
                    consommateurs en évitant qu’ils reçoivent des données DNS ayant été corrompues de manière accidentelle ou illicite.
                </p>
                <p>
                    Au moment de la création du DNS, la sécurité n’était pas au cœur de sa conception. Les attaquants pouvaient compromettre vos messages 
                    DNS et les rediriger ailleurs sur Internet au lieu de les délivrer à leurs destinataires.
                </p>
                <img src="../Images/25.png" width="500px" height="150px">
                <p>
                    La communauté technique du DNS crée la solution définitive à ce problème : les <span class="mot-cle">DNSSEC</span>. Les DNSSEC renforcent 
                    l’authentification dans le DNS à l’aide de signatures numériques basées sur une cryptographie à clé publique.
                </p>
                <p>
                    Avantages du déploiement des DNSSEC :
                </p>
                <ul>
                    <li>
                        Réduction de la vulnérabilité aux attaques.
                    </li>
                    <li>
                        Protection de l’Internet, des utilisateurs finaux, des entreprises, des organisations et des gouvernements.
                    </li>
                    <li>
                        Promotion de l’innovation. Les DNSSEC vérifient et protègent les données DNS, qui deviennent donc fiables pour des applications 
                        au-delà du DNS. 
                    </li>
                </ul>
                <a href="Ref.php">Aller vers les sources <i class="bi bi-arrow-right"></i></a>
            </div>
            <div class="part" id="redondance">
                <h2>La meilleure redondance</h2>
                <img src="../Images/26.jpg" width="300px" height="200px">
                <p>
                    Assurer la meilleure redondance possible ; de manière à ce qu’un serveur affecté par une attaque puisse être remplacé en toute 
                    transparence par d’autres serveurs disposant des mêmes informations mais situés sur d’autres réseaux. C’est la raison pour 
                    laquelle les registres de noms de domaine, tel l’AFNIC, exigent toujours que chaque nom de domaine soit installé sur au moins 
                    deux serveurs de noms. D’autres techniques plus élaborées, comme le recours à des nuages anycast, permettent d’augmenter encore 
                    plus la redondance avec à la clé des gains notables en termes de sécurisation et de performances.
                </p>
                <a href="Ref.php">Aller vers les sources <i class="bi bi-arrow-right"></i></a>
            </div>
            <div class="part" id="surveillance">
                <h2>Une surveillance régulière</h2>
                <img src="../Images/27.jpg" width="400px" height="200px">
                <p>
                    Assurer une surveillance régulière de ses serveurs et de leur conﬁguration ; de préférence depuis plusieurs points de l’Internet. 
                    Il est souvent arrivé, en raison de la robustesse du DNS, que la panne de serveurs ne soit détectée que lorsque le dernier d’entre 
                    eux tombe en panne. Pour vériﬁer la conﬁguration, il existe des logiciels libres comme <span class="mot-cle">ZoneCheck</span>. 
                    Pour assurer la surveillance depuis l’extérieur, l’organisation qui ne souhaite  pas déployer une infrastructure spéciﬁque peut 
                    faire appel à des services commerciaux ou communautaires existants. 
                </p>
                <a href="Ref.php">Aller vers les sources <i class="bi bi-arrow-right"></i></a>
            </div>
            <div class="part" id="autre">
                <h2>Autres techniques</h2>
                <ul>
                    <li>
                        <b class="gras"><i class="bi bi-circle-fill"></i>Veiller à utiliser des versions à jour des logiciels DNS :</b>
                        <br>
                        <p>
                            Notamment de BIND, corrigées par les « patchs » appropriés, aﬁn de ne pas être vulnérable à des attaques portant sur des failles 
                            de sécurité déjà bien identiﬁées.
                        </p>
                    </li>
                    <li>
                        <b class="gras"><i class="bi bi-circle-fill"></i>Déﬁnir un « Plan de continuité d’activité » :</b>
                        <br>
                        <p>
                            Permettant à la victime d’une attaque de poursuivre, ou de reprendre en cas d’incident grave, ses activités avec un minimum 
                            d’indisponibilité de ses services. Cette précaution est particulièrement essentielle pour tous ceux qui dépendent d’Internet, 
                            et donc du DNS, pour leur chiffre d’affaires, notamment ceux qui proposent des services en ligne à leurs clients.
                        </p>
                    </li>
                    <li>
                        <b class="gras"><i class="bi bi-circle-fill"></i>Développez une stratégie de sécurité DNS :</b>
                        <br>
                        <p>
                            Décidez de l’accès dont vos clients ont besoin et des données que vous souhaitez protéger. Il vous aidera à examiner le trafic 
                            de résolution de noms pour voir quels clients peuvent interroger quels serveurs. Ensuite, décidez du niveau de sécurité requis, 
                            car il existe un compromis entre sécurité et performance. Si la connectivité Internet n’est pas requise, les serveurs DNS peuvent 
                            être beaucoup plus sécurisés. Dans ce scénario, votre réseau requiert uniquement une racine DNS interne et un espace de noms. Toutes 
                            les autorisations pour les zones DNS seront traitées en interne.
                        </p>
                    </li>
                </ul>
                <p id="last-para">
                    Les attaques DNS, bien qu'elles soient menées depuis de nombreuses années, ne cessent de croître en termes de nombre d'événements qui se 
                    produisent chaque année. Bien que votre organisation ne soit probablement jamais victime de l'une des attaques susmentionnées, <i>la protection 
                    de l'infrastructure réseau n'est pas une option</i>.
                </p>
                <a href="Ref.php">Aller vers les sources <i class="bi bi-arrow-right"></i></a>
            </div>
        </section>

        <?php 
            include("../HTML/Footer.html"); 
        ?>
    </body>
</html>