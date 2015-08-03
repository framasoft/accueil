<?php
    $home_subdir="/accueil/";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <title>Framasoft - Logiciels Libres</title>
    <meta name="url" content="http://framasoft.org" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Association française de loi 1901, issue du monde éducatif, Framasoft est un réseau d'éducation populaire consacré principalement au logiciel libre. Le réseau s'organise en trois axes sur un mode collaboratif : promotion, diffusion et développement de logiciels libres, enrichissement de la culture libre. Il offre également des services libres en ligne. La page portail du réseau présente l'ensemble des activités de Framasoft et propose des liens vers les différents sites et activités du réseau.">
    <meta name="author" content="Framasoft">
    <meta name="keywords" content="Framasoft, logiciels libres, logiciels libres et open source, culture libre, FOSS, promotion et diffusion des logiciels libres, open source" />

    <!--metas DC-->
    <link rel="schema.DC" href="http://purl.org/dc/elements/1.1/" />
    <meta name="DC.type" content="Text" />
    <meta name="DC.format" content="text/html" />
    <meta name="DC.identifier" scheme="URI" content="http://framasoft.org" />
    <meta name="DC.title" content="Framasoft ~ Page portail du réseau" />
    <meta name="DC.publisher" content="Framasoft" />
    <meta name="DC.contributor" content="Framasoft" />
    <meta name="DC.language" scheme="RFC3066" content="fr" />
    <meta name="DC.subject" content="Framasoft, logiciels libres, logiciels libres et open source, culture libre, FOSS, promotion et diffusion des logiciels libres, open source" />
    <meta name="DC.rights" content="Creative Commons-By-SA sauf mention contraire" />
    <meta name="DC.description" content="Association française de loi 1901, issue du monde éducatif, Framasoft est un réseau d'éducation populaire consacré principalement au logiciel libre. Le réseau s'organise en trois axes sur un mode collaboratif : promotion, diffusion et développement de logiciels libres, enrichissement de la culture libre. Il offre également des services libres en ligne. La page portail du réseau présente l'ensemble des activités de Framasoft et propose des liens vers les différents sites et activités du réseau." />
    <!-- fin metas DC -->

    <!-- Les styles -->
    <link href="https://n1.framasoft.org/nav/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <link href="<?php echo $home_subdir; ?>css/framasoft.css" rel="stylesheet" />

    <!-- Fav and touch icons -->
    <link rel="shortcut icon" href="../NAVPICS/favicon.png">
    <script src="https://n1.framasoft.org/nav/lib/jquery/jquery.min.js" type="text/javascript"></script>
    <script src="https://n1.framasoft.org/nav/lib/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>

</head>

<body>
    <script src="https://n1.framasoft.org/nav/nav.js" type="text/javascript"></script>
    <script>
        if ( window.addEventListener ) {
            var kkeys = [], konami = "38,38,40,40,37,39,37,39,66,65";
            window.addEventListener("keydown", function(e){
                kkeys.push( e.keyCode );
                if ( kkeys.toString().indexOf( konami ) >= 0 ) {
                alert('Konami old school ! pwnd :p');
                window.location = "http://framasoft.org";
                }
            }, true);
        }
        $(document).ready(function(){
            $('#carousel-actus').carousel()
            $("#play-pause a").on('click', function() {
                if(jQuery(this).children('.glyphicon').hasClass('glyphicon-pause')) {
                    jQuery(this).children('.glyphicon').addClass('glyphicon-play').removeClass('glyphicon-pause');
                    jQuery(this).attr('title','Lecture');
                    jQuery(this).children('.sr-only').text('Lecture');
                    jQuery('#carousel-actus').carousel('pause');
                } else {
                    jQuery(this).children('.glyphicon').addClass('glyphicon-pause').removeClass('glyphicon-play');
                    jQuery(this).attr('title','Pause');
                    jQuery(this).children('.sr-only').text('Pause');
                    jQuery('#carousel-actus').carousel('cycle');
                };
                return false;
            });
        });
    </script>

    <!-- accueil Top -->
    <div class="container ombre" style="margin-top:20px;" id="topPgAccueil">
        <div class="row header">
            <div class="col-md-4">
                <h1 id="framasoft" class="sitename"><a href="#" class="orange"><span class="violet">Frama</span>soft</a></h1>
            </div>
            <div class="col-md-5">
                <p class="headerSubTitle">La route est longue mais la voie est libre…</p>
            </div>
            <div class="col-md-3">
                <ul class="navEntities">
                    <li><a href="#topPgLogiciels" title="vers la rubrique logiciels"><span class="sr-only">Rubrique libr’en vrac</span></a></li>
                    <li><a href="#topPgCulture" title="vers la rubrique culture"><span class="sr-only">Rubrique cloud</span></a></li>
                    <li><a href="#topPgCloud" title="vers la rubrique cloud"><span class="sr-only">Rubrique culture</span></a></li>
                    <li><a href="#topPgVrac" title="vers la rubrique libr’en vrac"><span class="sr-only">Rubrique logiciels</span></a></li>
                </ul>
            </div>
        </div>

        <div class="row">
            <div class="col-md-8">
                <div class="row">
                    <ul class="accroche">
                        <li>Un réseau dédié à la promotion du « <span class="smallcaps">libre</span> » en général et du <span class="smallcaps">logiciel libre</span> en particulier.</li>
                        <li>De nombreux services et projets innovants mis librement à disposition du grand public.</li>
                        <li>Une <a href="#topPgCommunaute">communauté</a> de bénévoles soutenue par une association d’intérêt général.</li>
                        <li>Une invitation à bâtir ensemble un monde de partage et de coopération.</li>
                    </ul>
                </div>
                <div class="row">
                    <p class="homeAlerte well">Vous cherchez l'annuaire de logiciels libres ? <a href="http://framalibre.org">C'est par ici&nbsp!</a></p>
                    <figure id="pingouinVolant">
                        <img src="<?php echo $home_subdir; ?>img/pingouinVolantRefait.png" alt="" />
                    </figure>
                </div>
                <div class="row containerActu">
                    <h3 id="news">Quoi de neuf sur Framasoft ?</h3>
                </div>

                <!--  Carousel -->
                <div id="carousel-actus" class="carousel slide">
                    <div class="carousel-inner">
                        <div class="item active">
                            <a href="http://degooglisons-internet.org"><img src="<?php echo $home_subdir; ?>img/slide-degooglisons-internet.png" alt="" />
                                <div class="carousel-caption">
                                    <p><b><span class="violet">Dégooglisons</span> <span class="orange">Internet</span></b> : des alternatives libres sont possibles.<br />Découvrez notre projet pour résister aux géants des services en ligne.</p>
                                </div>
                            </a>
                        </div>
                        <div class="item">
                            <a href="http://framablog.org/2015/05/05/framabee-le-meta-moteur-qui-va-vous-butiner-le-web/"><img src="<?php echo $home_subdir; ?>img/slide-framabee.jpg" alt="" />
                                <div class="carousel-caption">
                                    <p><b><span class="violet">Frama</span><span class="vert">bee</span></b>, le moteur de recherche libre et anonyme<br />qui butine les internets pour vous, sort de sa ruche.</p>
                                </div>
                            </a>
                        </div>
                        <div class="item">
                            <a href="http://framablog.org/2015/03/12/avant-de-dormir-un-roman-fantastique-et-sombre-chez-framabook/"><img src="<?php echo $home_subdir; ?>img/slide-avant-de-dormir.png" alt="" />
                                <div class="carousel-caption">
                                    <p>Sortie du roman fantastique <cite><em>Avant de dormir</em></cite> de Lilly Bouriot chez <b><span class="violet">Frama</span><span class="culture">book</span></b></p>
                                </div>
                            </a>
                        </div>
                        <div class="item">
                            <a href="http://framablog.org/2015/06/18/framagames-des-jeux-pour-changer-les-idees-aux-lyceens/"><img src="/accueil/img/slide-games-bookin.jpg" alt="" />
                                <div class="carousel-caption">
                                    <p><b><span class="violet">Frama</span><span class="vert">games</span></b> et <b><span class="violet">Frama</span><span class="rouge">bookin</span></b> : deux nouveaux services libres<br />pour vous détendre pendant cet été.</p>
                                </div>
                            </a>
                        </div>
                        <div class="item">
                            <a href="http://framabook.org/thermodynamique-de-lingenieur/"><img src="<?php echo $home_subdir; ?>img/slide-thermo.jpg" alt="" />
                                <div class="carousel-caption">
                                    <p><b><span class="violet">Frama</span><span class="rouge">book</span></b> publie le premier manuel libre<br />de thermodynamique destiné aux futur⋅e⋅s ingénieur⋅e⋅s</p>
                                </div>
                            </a>
                        </div>
                        <div class="item">
                            <a href="http://framablog.org/2015/02/05/degooglisons-internet-la-conference/"><img src="/accueil/img/slide-dio-conf.png" alt="" />
                                <div class="carousel-caption">
                                    <p><b><span class="violet">Dégooglisons</span> <span class="orange">Internet</span></b>, LA conférence en vidéo.<br />« Et si Google était le Skynet de 2024 ? »</p>
                                </div>
                            </a>
                        </div>
                        <div class="item">
                            <a href="http://fr.ulule.com/etherpad-framapad/news/"><img src="<?php echo $home_subdir; ?>img/slide-mypads-dev.jpg" alt="" />
                                <div class="carousel-caption">
                                    <p>La version <b class="orange">beta</b> du plugin MyPads qui permettra<br />la création de comptes privés sur <strong><span class="violet">Frama</span><span class="vert">pad</span></strong> est en ligne… À tester !</p>
                                </div>
                            </a>
                        </div>
                        <div class="item">
                            <a href="http://framasphere.org"><img src="<?php echo $home_subdir; ?>img/slide-framasphere.jpg" alt="" />
                                <div class="carousel-caption">
                                    <p>Framasoft ouvre l'accès à un réseau social décentralisé,<br/>sans publicité ni exploitation de données : <strong><span class="violet">Frama</span><span class="vert">sphère</span></strong>.</p>
                                </div>
                            </a>
                        </div>
                    </div><!-- /.carousel-inner -->

                    <!-- Controls -->
                    <p class="text-center" id="play-pause"><a href="#play-pause" class="carousel-control" title="Pause"><span class="glyphicon glyphicon-pause"></span><span class="sr-only">Pause</span></a></p>

                    <a class="left carousel-control" href="#carousel-actus" role="button" data-slide="prev" title="Diapo précédente">
                        <i class="glyphicon glyphicon-chevron-left"></i><span class="sr-only">Diapo précédente</span>
                    </a>

                    <a class="right carousel-control" href="#carousel-actus" role="button" data-slide="next" title="Diapo suivante">
                        <i class="glyphicon glyphicon-chevron-right"></i><span class="sr-only">Diapo suivante</span>
                    </a>
                </div><!-- /.carousel -->
            </div>
            <div class="col-md-4" id="blocFramatrucs">
                <h4 class="titreFramaTrucs"><a href="#topPgLogiciels" class="bleu">Libres logiciels</a></h4>
                <div class="row">
                    <ul class="listeFramaTrucs col-md-12">
                        <li>Un annuaire <a href="http://framalibre.org" class="bleu">≻   <span class="violet">Frama</span>libre</a></li>
                        <li>Une clé USB <a href="https://framakey.org"class="bleu">≻   <span class="violet">Frama</span>key</a></li>
                        <li>Un DVD <a href="http://framadvd.org"class="bleu">≻   <span class="violet">Frama</span>dvd</a></li>
                        <li>Un distributeur <a href="http://framapack.org"class="bleu">≻   <span class="violet">Frama</span>pack</a></li>
                    </ul>
                </div>
                <h4 class="titreFramaTrucs"><a href="#topPgCulture" class="rouge">Libres cultures</a></h4>
                <div class="row">
                    <ul class="listeFramaTrucs col-md-12">
                        <li>Des infos <a href="http://framablog.org" class="rouge">≻   <span class="violet">Frama</span>blog</a></li>
                        <li>Des livres… <a href="http://framabook.org" class="rouge">≻   <span class="violet">Frama</span>book</a></li>
                        <li>…et une bibliothèque <a href="http://framabookin.org" class="rouge">≻   <span class="violet">Frama</span>bookin</a></li>
                        <li>Des traductions <a href="http://framablog.org/framalang" class="rouge">≻   <span class="violet">Frama</span>lang</a></li>
                        <li>Des vidéos <a href="https://framatube.org" class="rouge">≻   <span class="violet">Frama</span>tube</a></li>
                        <li>De la musique <a href="http://framazic.org" class="rouge">≻   <span class="violet">Frama</span>zic</a></li>
                    </ul>
                </div>
                <h4 class="titreFramaTrucs"><a href="#topPgCloud" class="vert">Libres services</a></h4>
                <div class="row">
                    <ul class="listeFramaTrucs col-md-12">
                        <li>&Eacute;diter <a href="https://framapad.org/" class="vert">≻   <span class="violet">Frama</span>pad</a></li>
                        <li>Organiser <a href="https://framadate.org/" class="vert">≻   <span class="violet">Frama</span>date</a></li>
                        <li>Calculer <a href="https://framacalc.org/" class="vert">≻   <span class="violet">Frama</span>calc</a></li>
                        <li>Structurer <a href="https://framindmap.org/" class="vert">≻   <span class="violet">Fra</span>mindmap</a></li>
                        <li>Dessiner <a href="http://framavectoriel.org/" class="vert">≻   <span class="violet">Frama</span>vectoriel</a></li>
                        <li>Réseauter <a href="https://framasphere.org/" class="vert">≻   <span class="violet">Frama</span>sphère</a></li>
                        <li>Jouer <a href="http://framagames.org/" class="vert">≻   <span class="violet">Frama</span>games</a></li>
                        <li>Coder <a href="https://git.framasoft.org/" class="vert">≻   <span class="violet">Frama</span>git</a></li>
                        <li>Rechercher <a href="https://framabee.org/" class="vert">≻   <span class="violet">Frama</span>bee</a></li>
                        <li>Partager <a href="https://framabin.org/" class="vert">≻   <span class="violet">Frama</span>bin</a><br/>
                                     <a href="https://framapic.org/" class="vert">≻   <span class="violet">Frama</span>pic</a><br/>
                                     <a href="https://frama.link/" class="vert">≻   <span class="violet">Frama</span>link</a></li>
                    </ul>
                </div>
                <h4 class="titreFramaTrucs"><a href="#topPgVrac" class="jaune">Libr’en vrac</a></h4>
                <div class="row">
                    <ul class="listeFramaTrucs col-md-12">
                        <li>Un forum <a href="https://forum.framasoft.org/" class="jaune">≻   <span class="violet">Fram</span>agora</a></li>
                        <li>Une boutique <a href="http://enventelibre.org/" class="jaune">≻   <span class="violet">EnVente</span>Libre</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="row" class="finPseudoPage">
            <div class="col-md-2">
                <ul class="navEntities2">
                    <li><a href="#topPgLogiciels" title="vers la rubrique logiciels"><span class="sr-only">Rubrique logiciels</span></a></li>
                    <li><a href="#topPgCulture" title="vers la rubrique culture"><span class="sr-only">Rubrique culture</span></a></li>
                    <li><a href="#topPgCloud" title="vers la rubrique cloud"><span class="sr-only">Rubrique cloud</span></a></li>
                    <li><a href="#topPgVrac" title="vers la rubrique libr’en vrac"><span class="sr-only">Rubrique libr’en vrac</span></a></li>
                </ul>
            </div>
        </div>
    </div> <!-- /container -->


    <!-- communauté -->
    <div class="container ombre" id="topPgCommunaute">
        <div class="row header">
            <div class="col-md-4">
                <h1 class="sitename"><a href="#" class="violet">Libre communauté</a></h1>
            </div>
            <div class="col-md-5">
                <p class="headerSubTitle">Vous êtes libre ce soir ?</p>
            </div>
            <div class="col-md-3">
                <ul class="navEntities">
                    <li><a href="#topPgLogiciels" title="vers la rubrique logiciels"><span class="sr-only">Rubrique libr’en vrac</span></a></li>
                    <li><a href="#topPgCulture" title="vers la rubrique culture"><span class="sr-only">Rubrique cloud</span></a></li>
                    <li><a href="#topPgCloud" title="vers la rubrique cloud"><span class="sr-only">Rubrique culture</span></a></li>
                    <li><a href="#topPgVrac" title="vers la rubrique libr’en vrac"><span class="sr-only">Rubrique logiciels</span></a></li>
                </ul>
            </div>
        </div>

        <div class="row" id="contentCommunaute">
            <div class="col-md-4 blocCommunaute" >
                <img src="<?php echo $home_subdir; ?>img/framateam1.jpg" alt="" />
            </div>

            <div class="col-md-4 blocCommunaute">
                <h4 class="titreBloc">Une communauté</h4>
                <p class="miniBlocSubTitle">Un joyeux bazar</p>
                <p class="miniBlocTexte">Qui se cache derrière Framasoft ? Tous ceux qui ont participé ou participent de près ou de loin à nos différents projets. Il suffit de vouloir promouvoir le Libre et de placer sa participation sous licence libre, garantissant qu’elle sera mise dans le pot des biens communs sans risque d’appropriation.</p>
            </div>

            <div class="col-md-4 blocCommunaute">
                <h4 class="titreBloc">Une association</h4>
                <p class="miniBlocSubTitle">Un peu de cathédrale</p>
                <p class="miniBlocTexte">Framasoft repose sur une association 1901 d’intérêt général. À charge pour elle de mettre de l'huile dans les rouages et de s’assurer que la communauté puisse s’activer dans les meilleures conditions. Elle compte trois permanents et est financée principalement par les dons individuels collectés sur Internet. Vous pouvez en être vous aussi, mais attention ça tient plus du sacerdoce que de la sinécure !</p>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4 blocCommunaute">
                <h4 class="titreBloc">Participer ? </h4>
                <p class="miniBlocSubTitle">Il y a mille et une façon de participer avec nous à diffuser le Libre au sein de nos nombreux projets.</p>
                <p class="miniBlocTexte">Tester, rédiger, modérer, administrer, traduire, relire, relayer, coder, communiquer, promouvoir, sensibiliser… N’hésitez pas à <a href="https://participer.framasoft.org/">mettre la main à la pâte</a> avec nous ! Et merci d'avance…</p>
            </div>

            <div class="col-md-4 blocCommunaute">
                <h4 class="titreBloc">Nous soutenir ? </h4>
                <p class="miniBlocSubTitle">Parce que libre ne signifie pas gratuit</p>
                <p class="miniBlocTexte">Framasoft ne serait rien sans sa communauté de bénévoles mais ne pourrait pas fonctionner non plus sans le service de l’association qui a des frais et emploie trois indispensables permanents. Notre financement dépend de vous, c’est-à-dire des dons individuels collectés sur Internet. <a href="https://soutenir.framasoft.org/">Si vous pensez que nous le méritons…</a></p>
            </div>

            <div class="col-md-4 blocCommunaute">
                <img src="<?php echo $home_subdir; ?>img/framateam2.jpg" alt="" />
            </div>

            <div class="col-md-12 blocCommunaute">
                <h4 class="titreBloc">Nos partenaires</h4>
                <p class="miniBlocTexte">Framasoft est avant tout une communauté d’utilisateurs. Cependant, son fonctionnement est clairement celui d’un réseau, non seulement de projets, mais aussi de partenaires.
                <br/>Ainsi, Framasoft bénéficie du soutien de nombreuses organisations (publiques, commerciales, associatives) qui permettent aux projets de croître et de se développer. <a href="https://soutenir.framasoft.org/partenaires">Liste de tous nos partenaires</a></p>
                <ul class="list-inline text-center">
                    <li><a href="http://www.milliweb.fr/"><img src="https://soutenir.framasoft.org/sites/default/files/partenaires/logoMilliweb_150.png" alt="Milliweb"></a></li>
                    <li><a href="https://www.ikoula.com/"><img src="https://soutenir.framasoft.org/sites/default/files/transparent-png-bleu.png" alt="Ikoula"></a></li>
                </ul>
            </div>

        </div>

        <div class="row" class="finPseudoPage">
            <div class="col-md-2">
                <ul class="navEntities2">
                    <li><a href="#topPgLogiciels" title="vers la rubrique logiciels"><span class="sr-only">Rubrique logiciels</span></a></li>
                    <li><a href="#topPgCulture" title="vers la rubrique culture"><span class="sr-only">Rubrique culture</span></a></li>
                    <li><a href="#topPgCloud" title="vers la rubrique cloud"><span class="sr-only">Rubrique cloud</span></a></li>
                    <li><a href="#topPgVrac" title="vers la rubrique libr’en vrac"><span class="sr-only">Rubrique libr’en vrac</span></a></li>
                </ul>
            </div>
        </div>
    </div > <!-- /container -->


    <!-- Logiciel Libre -->
    <div class="container ombre" id="topPgLogiciels">
        <div class="row header">
            <div class="col-md-4">
                <h1 class="sitename bleu"><a href="#" class="bleu">Libres logiciels</a></h1>
            </div>
            <div class="col-md-5">
                <p class="headerSubTitle">Liberté, égalité, fraternité</p>
            </div>
            <div class="col-md-3">
                <ul class="navEntities">
                    <li><a href="#topPgLogiciels" title="rubrique logiciels"><span class="sr-only">Rubrique libr’en vrac</span></a></li>
                    <li><a href="#topPgCulture" title="vers la rubrique culture"><span class="sr-only">Rubrique cloud</span></a></li>
                    <li><a href="#topPgCloud" title="vers la rubrique cloud"><span class="sr-only">Rubrique culture</span></a></li>
                    <li><a href="#topPgVrac" title="vers la rubrique libr’en vrac"><span class="sr-only">Rubrique logiciels</span></a></li>
                </ul>
            </div>
        </div>

        <div class="row">
            <div class="col-md-8" id="presentationLogiciels">
                <h3 class="presentation">Logiciel Libre ?</h3>
                <p class="blocSubTitle">Un <a href="http://fr.wikipedia.org/wiki/Logiciel_libre" target="_blank">logiciel libre</a> est un logiciel qui offre et garantit les quatre libertés suivantes : utilisation, étude, modification et duplication en vue de sa diffusion (gratuite ou pas).</p>
                <p class="blocTexte">Ceci est permis techniquement grâce à l’accès au <a href="http://fr.wikipedia.org/wiki/Code_source" target="_blank">code</a> et légalement grâce à la <a href="http://fr.wikipedia.org/wiki/Licence_libre" target="_blank">licence libre</a> qui l’accompagne. Ces <span class="smallcaps">quatre libertés</span> favorisent la transparence, la confiance, l’échange, le partage et la collaboration au sein de communautés.</p>
                <p class="blocTexte">Framasoft vous propose un annuaire, des clés USB et DVD et un installateur Windows pour les découvrir et les utiliser régulièrement.</p>

            </div>

            <div class="col-md-4">
                <figure id="pingouinMuseeWindows">
                    <img src="<?php echo $home_subdir; ?>img/musee-windows_ll-de-mars_licence-art-libre.jpg" alt="" />
                </figure>
            </div>
        </div>

        <div class="row">
            <div class="col-md-3 miniBloc">
                <a href="http://framalibre.org" ><h4 class="bleu"><span class="violet">Frama</span>libre</h4></a>
                <p class="miniBlocSubTitle fa-linux">Le gros annuaire</p>
                <p class="miniBlocTexte">Plus de 1600 logiciels classés, testés et commentés dans le projet historique et fondateur de Framasoft. On y trouve également des tutoriels et des articles de fond.</p>

            </div>

            <div class="col-md-3 miniBloc">
                <a href="https://framakey.org" ><h4 class="bleu"><span class="violet">Frama</span>key</h4></a>
                <p class="miniBlocSubTitle fa-archive">Le plein de liberté dans une simple clé</p>
                <p class="miniBlocTexte">Dans une clé USB (ou tout autre support mobile) utiliser en mode nomade une centaine de logiciels libres portables pour Windows, tester voire installer une distribution GNU/Linux ou encore avoir accès hors ligne à toute la Wikipédia francophone.</p>
                <p class="EnVenteLibre"><a href="http://enventelibre.org/catalog/par-association/framasoft" class="bleu" title="Acheter la Framakey sur la boutique En Vente Libre"><span aria-hidden="true">[€]</span><span class="sr-only">En Vente Libre</span></a></p>
            </div>

            <div class="col-md-3 miniBloc">
                <a href="http://framadvd.org" ><h4 class="bleu"><span class="violet">Frama</span>dvd</h4></a>
                <p class="miniBlocSubTitle fa-play-circle-o">Le plein de liberté dans un DVD</p>
                <p class="miniBlocTexte">Un DVD rempli non seulement des meilleurs logiciels libres pour Windows, Mac et GNU/Linux (avec une distribution dedans) mais aussi de la culture libre (textes, photos, audios et vidéos). Existe en une version spéciale école</p>
                <p class="EnVenteLibre"><a href="http://enventelibre.org/catalog/par-association/framasoft" class="bleu" title="Acheter le FramaDVD sur la boutique En Vente Libre"><span aria-hidden="true">[€]</span><span class="sr-only">En Vente Libre</span></a></p>
            </div>

            <div class="col-md-3 miniBloc">
                <a href="http://framapack.org" ><h4 class="bleu"><span class="violet">Frama</span>pack</h4></a>
                <p class="miniBlocSubTitle fa-download">Distribution massive</p>
                <p class="miniBlocTexte">Pratique, sur Framapack on fait son marché des meilleurs logiciels libres Windows dans leur dernière version.<br>On les sélectionne et ils s’installent tous ensemble d’un simple clic !</p>

            </div>
        </div>

        <div class="row" class="finPseudoPage">
            <div class="col-md-2">
                <ul class="navEntities2">
                    <li><a href="#topPgLogiciels" title="rubrique logiciels"><span class="sr-only">Rubrique logiciels</span></a></li>
                    <li><a href="#topPgCulture" title="vers la rubrique culture"><span class="sr-only">Rubrique culture</span></a></li>
                    <li><a href="#topPgCloud" title="vers la rubrique cloud"><span class="sr-only">Rubrique cloud</span></a></li>
                    <li><a href="#topPgVrac" title="vers la rubrique libr’en vrac"><span class="sr-only">Rubrique libr’en vrac</span></a></li>
                </ul>
            </div>
        </div>
    </div> <!-- /container -->


    <!-- Culture Libre -->
    <div class="container ombre" id="topPgCulture">
        <div class="row header">
            <div class="col-md-4">
                <h1 class="sitename rouge"><a href="#" class="rouge">Libres cultures</a></h1>
            </div>
            <div class="col-md-5">
                <p class="headerSubTitle">Extension du domaine du Libre</p>
            </div>
            <div class="col-md-3">
                <ul class="navEntities">
                    <li><a href="#topPgLogiciels" title="vers la rubrique logiciels"><span class="sr-only">Rubrique libr’en vrac</span></a></li>
                    <li><a href="#topPgCulture" title="rubrique culture"><span class="sr-only">Rubrique cloud</span></a></li>
                    <li><a href="#topPgCloud" title="vers la rubrique cloud"><span class="sr-only">Rubrique culture</span></a></li>
                    <li><a href="#topPgVrac" title="vers la rubrique libr’en vrac"><span class="sr-only">Rubrique logiciels</span></a></li>
                </ul>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6" id="presentationLibre">
                <div class="row col-md-12">
                    <h3 class="presentation">Culture Libre ?</h3>
                    <p class="blocSubTitle">Facilitée par Internet et la numérisation, la « <a href="http://fr.wikipedia.org/wiki/Culture_libre">culture libre</a> » est une culture en mouvement qui s’inspire directement du logiciel libre dans sa philosophie et ses licences pour promouvoir et diffuser des œuvres de l’esprit.</p>
                    <p class="blocTexte">Elle explore des domaines aussi variés que les arts, l’éducation, les sciences, le matériel... Ces œuvres peuvent alors être considérées comme des <a href="http://fr.wikipedia.org/wiki/Bien_commun">biens communs</a>. L’exemple le plus emblématique est l’encyclopédie libre Wikipédia.</p>
                    <p class="blocTexte">Dans ce cadre, Framasoft vous propose un blog, une maison d’édition, une plateforme vidéo, un site dédié à la musique libre ainsi qu’un service original de traduction collaborative.</p>

                </div>

                <div class="row col-md-12">
                    <figure id="pingouinsQuelquesBriques">
                        <img src="<?php echo $home_subdir; ?>img/quelques-briques_licence-art-libre.jpg" alt="" />
                    </figure>
                </div>

                <div class="row col-md-12">
                    <blockquote class="well">
                    « Parce que ce serait l’une des plus grandes opportunités manquées de notre époque si le logiciel libre ne libérait rien d’autre que du code. »
                    </blockquote>
                </div>
            </div>

            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-6 miniBloc2">
                        <a href="http://framablog.org" ><h4 class="rouge"><span class="violet">Frama</span>blog</h4></a>
                        <p class="miniBlocSubTitle fa-pencil">L’actualité du « Libre »</p>
                        <p class="miniBlocTexte">Chroniques quotidiennes autour du Libre en général et du logiciel libre en particulier. De riches débats dans les commentairees, de nombreuses traductions originales et les annonces des nouveautés de l’ensemble du réseau Framasoft.</p>
                    </div>
                    <div class="col-md-6 miniBloc2">
                        <a href="http://framabook.org" ><h4 class="rouge"><span class="violet">Frama</span>book</h4></a>
                        <p class="miniBlocSubTitle fa-book">Le pari du livre libre</p>
                        <p class="miniBlocTexte">Notre maison d’édition qui comporte une vingtaine de titres autour du logiciel libre, initiation à la programmation, réflexion sur le droit d’auteur mais aussi des BD et même un roman. Un livre libre offre au lecteur les mêmes libertés qu’un logiciel libre.</p>
                        <p class="EnVenteLibre"><a href="http://enventelibre.org/catalog/par-association/framasoft" class="rouge" title="Acheter les Framabooks sur la boutique En Vente Libre"><span aria-hidden="true">[€]</span><span class="sr-only">En Vente Libre</span></a></p>
                    </div>

                </div>

                <div class="row">
                    <div class="col-md-6 miniBloc2">
                        <a href="http://framabookin.org" ><h4 class="rouge"><span class="violet">Frama</span>bookin</h4></a>
                        <p class="miniBlocSubTitle fa-coffee">Une bibliothèque numérique libre</p>
                        <p class="miniBlocTexte">Notre bibliothèque contient quelques centaines d’ouvrages libres ou du domaine public. Elle est consultable en ligne sur les plateformes mobiles. Vous pouvez l’ajouter directement une application de lecture d’ebook grâce au flux <abbr>OPDS</abbr>.</p>
                    </div>
                    <div class="col-md-6 miniBloc2">
                        <a href="http://framablog.org/framalang" ><h4 class="rouge"><span class="violet">Frama</span>lang</h4></a>
                        <p class="miniBlocSubTitle fa-language">Traduction collaborative</p>
                        <p class="miniBlocTexte">Traduire tous ensemble, principalement de l’anglais vers le français, dans la convivialité en bénéficiant de la force d’Internet et de la bonne volonté de ses habitants. Il peut s’agir d’articles, de sous-titrage et même de livres entiers !</p>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 miniBloc2">
                        <a href="https://framatube.org" ><h4 class="rouge"><span class="violet">Frama</span>tube</h4></a>
                        <p class="miniBlocSubTitle fa-film">Notre « YouTube » du Libre</p>
                        <p class="miniBlocTexte">Vidéos en français (ou sous-titrées en français) autour du logiciel libre en particulier et du Libre en général. Interviews, conférences, documentaires, extraits télévisés… pour s’informer mais aussi informer les autres.</p>
                    </div>
                    <div class="col-md-6 miniBloc2">
                        <a href="http://framazic.org" ><h4 class="rouge"><span class="violet">Frama</span>zic</h4></a>
                        <p class="miniBlocSubTitle fa-music">Quand la musique est libre</p>
                        <p class="miniBlocTexte">Une « musique libre » est une musique qui offre au mélomane les mêmes libertés qu’un logiciel libre. Un site dédié permettant de mieux la comprendre accompagné d’une petite sélection permettant de constater que la qualité est au rendez-vous.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row" class="finPseudoPage">
            <div class="col-md-2">
                <ul class="navEntities2">
                    <li><a href="#topPgLogiciels" title="vers la rubrique logiciels"><span class="sr-only">Rubrique logiciels</span></a></li>
                    <li><a href="#topPgCulture" title="rubrique culture"><span class="sr-only">Rubrique culture</span></a></li>
                    <li><a href="#topPgCloud" title="vers la rubrique cloud"><span class="sr-only">Rubrique cloud</span></a></li>
                    <li><a href="#topPgVrac" title="vers la rubrique libr’en vrac"><span class="sr-only">Rubrique libr’en vrac</span></a></li>
                </ul>
            </div>
        </div>
    </div> <!-- /container -->

    <!-- Cloud libre -->
    <div class="container ombre" id="topPgCloud">
        <div class="row header">
            <div class="col-md-4">
                <h1 class="sitename vert"><a href="#" class="vert">Libres services</a></h1>
            </div>
            <div class="col-md-5">
                <p class="headerSubTitle">Du cloud computing libre ? c’est possible !</p>
            </div>
            <div class="col-md-3">
                <ul class="navEntities">
                    <li><a href="#topPgLogiciels" title="vers la rubrique logiciels"><span class="sr-only">Rubrique libr’en vrac</span></a></li>
                    <li><a href="#topPgCulture" title="vers la rubrique culture"><span class="sr-only">Rubrique cloud</span></a></li>
                    <li><a href="#topPgCloud" title="rubrique cloud"><span class="sr-only">Rubrique culture</span></a></li>
                    <li><a href="#topPgVrac" title="vers la rubrique libr’en vrac"><span class="sr-only">Rubrique logiciels</span></a></li>
                </ul>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6" id="presentationServices">
                <div class="row col-md-12" id="blocServices">
                    <h3 class="presentation">Service Libre ?</h3>
                    <p class="blocSubTitle">Nom de code : « Framacloud »</p>
                    <p class="blocTexte">Intuitif, sans inscription et à même votre navigateur, un ensemble de services en ligne libres et respectueux de vos données personnelles. Ces services vous sont proposés dans le cadre de la notre campagne « <a href="http://degooglisons-internet.org"><b class="violet">Dégooglisons</b> <b class="orange">Internet</b></a> »</p>
                    <p class="blocTexte">Vous pouvez aussi les installer sur votre propre serveur, participant ainsi à décentraliser l’Internet. Des tutoriels sont là pour vous aider à franchir le pas dans la rubrique <a href="http://framacloud.org/cultiver-son-jardin">Cultiver son jardin</a>.</p>
                </div>
            </div>

            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-6 miniBloc2">
                        <a href="https://framapad.org/" ><h4 class="vert"><span class="violet">Frama</span>pad</h4></a>
                        <p class="miniBlocSubTitle fa-align-left">Éditer collaborativement</p>
                        <p class="miniBlocTexte">Écrivons tous ensemble sur le même document dans une interface de rédaction collective en ligne. Aucune inscription requise, on se donne un pseudo, une couleur et on se lance !</p>
                    </div>

                    <div class="col-md-6 miniBloc2">
                        <a href="https://framadate.org/" ><h4 class="vert"><span class="violet">Frama</span>date</h4></a>
                        <p class="miniBlocSubTitle fa-calendar">Organiser des rendez-vous et des sondages</p>
                        <p class="miniBlocTexte">Framadate c’est un peu comme Doodle mais en libre. Rien de plus simple de créer un rendez-vous ou un sondage sans inscription pour y inviter vos collaborateurs.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-3 miniBloc">
                        <a href="https://framacalc.org" ><h4 class="vert"><span class="violet">Frama</span>calc</h4></a>
                        <p class="miniBlocSubTitle fa-th">Un tableur collaboratif</p>
                        <p class="miniBlocTexte">Framacalc est au tableur ce que Framapad est au traitement de texte, autrement dit la possibilité d’éditer simplement et collectivement en ligne sur un même document.</p>
                    </div>

                    <div class="col-md-3 miniBloc">
                        <a href="https://framindmap.org" ><h4 class="vert"><span class="violet">Fra</span>mindmap</h4></a>
                        <p class="miniBlocSubTitle fa-sitemap">Créer des cartes mentales</p>
                        <p class="miniBlocTexte">Interface fluide et intuitive pour créer rapidement et simplement des cartes heuristiques à même votre navigateur. Pertinent en situation de brainstorming ou de prise de notes.</p>
                    </div>

                    <div class="col-md-3 miniBloc">
                        <a href="http://framavectoriel.org" ><h4 class="vert"><span class="violet">Frama</span>vectoriel</h4></a>
                        <p class="miniBlocSubTitle fa-paint-brush">Dessiner en vectoriel</p>
                        <p class="miniBlocTexte">Pour créer et éditer simplement et rapidement de belles images en ligne au format ouvert SVG. Les enfants adorent !</p>
                    </div>

                    <div class="col-md-3 miniBloc">
                        <a href="http://framagames.org" ><h4 class="vert"><span class="violet">Frama</span>games</h4></a>
                        <p class="miniBlocSubTitle fa-gamepad">Jouer en ligne ou déconnecté</p>
                        <p class="miniBlocTexte">Framagames est une compilation de jeux libres qui se jouent en ligne, se téléchargent sur son PC, sa tablette… et ne nécessitent aucune installation supplémentaire.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-6 miniBloc">
                        <a href="http://degooglisons-internet.org"><img src="<?php echo $home_subdir; ?>img/stallmanoramix.png" alt="" class="img-responsive"/></a>
                    </div>

                    <div class="col-md-6 miniBloc">
                        <a href="https://framabee.org" ><h4 class="vert"><span class="violet">Frama</span>bee</h4></a>
                        <p class="miniBlocSubTitle fa-search">Le moteur qui butine les internets pour vous</p>
                        <p class="miniBlocTexte">Framabee est un meta-moteur de recherche libre et anonyme. Vos recherches effectuées au travers de ce moteur sont envoyées à différents moteurs avant d’être affichées dans votre navigateur. L’intérêt ? Notre moteur est alors un intermédiaire entre vous et Google (et autres), ainsi vos données personnelles (adresse IP, historique de vos recherches, géolocalisation, profil) ne sont pas enregistrées chez eux.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-3 miniBloc">
                        <a href="https://framasphere.org" ><h4 class="vert"><span class="violet">Frama</span>sphère</h4></a>
                        <p class="miniBlocSubTitle fa-asterisk">Le réseau social libre</p>
                        <p class="miniBlocTexte">Framasphère est un réseau social libre, basé sur le logiciel décentralisé Diaspora*. Retrouvez vos amis sur Framasphère - ou d’autres pods Diaspora* - et échangez avec eux sans être pisté.</p>
                    </div>
                    <div class="col-md-3 miniBloc">
                        <a href="https://framabag.org" ><h4 class="vert"><span class="violet">Frama</span>bag</h4></a>
                        <p class="miniBlocSubTitle fa-briefcase">Ne ratez plus aucun article !</p>
                        <p class="miniBlocTexte">Framabag vous permet de mettre de côté les articles que vous n’avez pas le temps de lire tout de suite.</p>
                    </div>

                    <div class="col-md-3 miniBloc">
                        <a href="http://framanews.org" ><h4 class="vert"><span class="violet">Frama</span>news</h4></a>
                        <p class="miniBlocSubTitle fa-newspaper-o">Suivre l’actualité</p>
                        <p class="miniBlocTexte">En vous abonnant aux flux RSS de vos sites préférés, restez informés de toutes leurs actualités avec Framanews !</p>
                    </div>

                    <div class="col-md-3 miniBloc">
                        <a href="https://git.framasoft.org" ><h4 class="vert"><span class="violet">Frama</span>git</h4></a>
                        <p class="miniBlocSubTitle fa-git">Héberger du code libre</p>
                        <p class="miniBlocTexte">Framagit est un outil qui s’adresse avant tout aux développeurs. Il permet d’héberger vos projets de logiciels libres et de travailler collaborativement dessus.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-3 miniBloc">
                        <a href="https://framabin.org" ><h4 class="vert"><span class="violet">Frama</span>bin</h4></a>
                        <p class="miniBlocSubTitle fa-paste">Transmettre des données chiffrées</p>
                        <p class="miniBlocTexte">Avec Framabin, vous pouvez partager des informations que seuls vous et votre correspondant aurez le pouvoir de déchiffrer, et ceci de manière très simple.</p>
                    </div>

                    <div class="col-md-3 miniBloc">
                        <a href="https://framapic.org" ><h4 class="vert"><span class="violet">Frama</span>pic</h4></a>
                        <p class="miniBlocSubTitle fa-photo">Partager des images anonymement</p>
                        <p class="miniBlocTexte">Framapic vous permet de partager facilement des images, par exemple pour les publier sur Twitter, Facebook, ou … Framasphère !</p>
                    </div>

                    <div class="col-md-3 miniBloc">
                        <a href="https://frama.link" ><h4 class="vert"><span class="violet">Frama</span>link</h4></a>
                        <p class="miniBlocSubTitle fa-link">Réduire des liens</p>
                        <p class="miniBlocTexte">Avec Frama.link, il est possible de raccourcir des adresses web trop longues. Sur les réseaux sociaux et le microblogging, un lien raccourci permet d’économiser de l’espace et gagner en clarté.</p>
                    </div>

                    <div class="col-md-3 miniBloc">
                        <a href="http://degooglisons-internet.org"><img src="<?php echo $home_subdir; ?>img/carte_petite.png" alt="" class="img-responsive"/></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="row" class="finPseudoPage">
            <div class="col-md-2">
                <ul class="navEntities2">
                    <li><a href="#topPgLogiciels" title="vers la rubrique logiciels"><span class="sr-only">Rubrique logiciels</span></a></li>
                    <li><a href="#topPgCulture" title="vers la rubrique culture"><span class="sr-only">Rubrique culture</span></a></li>
                    <li><a href="#topPgCloud" title="rubrique cloud"><span class="sr-only">Rubrique cloud</span></a></li>
                    <li><a href="#topPgVrac" title="vers la rubrique libr’en vrac"><span class="sr-only">Rubrique libr’en vrac</span></a></li>
                </ul>
            </div>
        </div>
    </div> <!-- /container -->

    <!-- Vrac Libre -->
    <div class="container ombre" id="topPgVrac">

        <div class="row header">
            <div class="col-md-4">
                <h1 class="sitename jaune"><a href="#" class="jaune">Libr’en Vrac</a></h1>
            </div>
            <div class="col-md-5">
                <p class="headerSubTitle">Inclassables mais non mal classés !</p>
            </div>
            <div class="col-md-3">
                <ul class="navEntities">
                    <li><a href="#topPgLogiciels" title="vers la rubrique logiciels"><span class="sr-only">Rubrique libr’en vrac</span></a></li>
                    <li><a href="#topPgCulture" title="vers la rubrique culture"><span class="sr-only">Rubrique cloud</span></a></li>
                    <li><a href="#topPgCloud" title="vers la rubrique cloud"><span class="sr-only">Rubrique culture</span></a></li>
                    <li><a href="#topPgVrac" title="rubrique libr’en vrac"><span class="sr-only">Rubrique logiciels</span></a></li>
                </ul>
            </div>
        </div>

        <div class="row">
            <div class="col-md-8" id="presentationLibrenVrac">
                <h3 class="presentation">Les projets transversaux </h3>
                <p class="blocSubTitle">Espaces d’échanges, d’achats, de développements…</p>
                <p class="blocTexte">
                    Nous regroupons ici tout ce qui touche à l’ensemble du réseau ainsi que notre laboratoire d’idées et de projets en construction.
                </p>
            </div>

            <div class="col-md-4" id="AlaUne">
                <h4 class="titreBloc">Lumière sur…</h4>
                <p class="miniBlocSubTitle">GéGé, Geektionnerd generator</p>
                <figure id="GeGeGenerator">
                    <a href="https://framalab.org/gknd-creator/" title="vers le générateur de Geektionnerd"><img src="<?php echo $home_subdir; ?>img/GeGeGenerator.jpg" alt="" /></a>
                </figure>
                <p class="legende">
                    Le geektionnerd à faire soi-même.
                </p>
            </div>
        </div>

        <div class="row">
            <!--<div class="col-md-3 miniBloc">
                <a href="https://framalab.org/"><h4 class="jaune"><span class="violet">Frama</span>lab</h4></a>
                <p class="miniBlocSubTitle">Le laboratoire des projets Framasoft</p>
                <p class="miniBlocTexte">C’est ici que nous déposons les projets modestes, dans nos cartons, en cours ou en attente de bonnes volontés. On peut y trouver des belles suprises.</p>
            </div>-->

            <div class="col-md-6 miniBloc">
                <a href="https://forum.framasoft.org" ><h4 class="jaune"><span class="violet">Fram</span>agora</h4></a>
                <p class="miniBlocSubTitle fa-comment">Le forum du réseau Framasoft<P>
                <p class="miniBlocTexte">Vous avez une question ? Nous avons (peut-être) une réponse ! « Si tu ne sais pas, demande. Si tu sais, partage. » Framagora est notre convivial espace d’échange d’informations autour du Libre.</p>
            </div>

            <!--<div class="col-md-3 miniBloc">
                <a href="http://framacode.org"><h4 class="jaune"><span class="violet">Frama</span>code</h4></a>
                <p class="miniBlocSubTitle">Chez nous aussi on développe</p>
                <p class="miniBlocTexte">Le dépôt Gitlab du code produit par Framasoft, en particulier les services libres Framacloud pour les installer soi-même et les améliorer ensemble.</p>
            </div>-->

            <div class="col-md-6 miniBloc">
                <a href="http://enventelibre.org" ><h4 class="jaune"><span class="violet">EnVente</span>libre</h4></a>
                <p class="miniBlocSubTitle fa-shopping-cart">Notre libre petite boutique</p>
                <p class="miniBlocTexte">L’espace vente des différents produits Framasoft qui peuvent se matérialiser : Framakey, Framabook, Framadvd mais aussi des goodies et des tee-shirts.</p>
            </div>
        </div>

        <div class="row" class="finPseudoPage">
            <div class="col-md-2">
                <ul class="navEntities2">
                    <li><a href="#topPgLogiciels" title="vers la rubrique logiciels"><span class="sr-only">Rubrique logiciels</span></a></li>
                    <li><a href="#topPgCulture" title="vers la rubrique culture"><span class="sr-only">Rubrique culture</span></a></li>
                    <li><a href="#topPgCloud" title="vers la rubrique cloud"><span class="sr-only">Rubrique cloud</span></a></li>
                    <li><a href="#topPgVrac" title="rubrique libr’en vrac"><span class="sr-only">Rubrique libr’en vrac</span></a></li>
                </ul>
            </div>
        </div>
    </div> <!-- /container -->

</body>
</html>