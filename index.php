<?php
    $home_subdir="/accueil/";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <title>Framasoft - Logiciels Libres</title>
    <meta name="url" content="http://www.framasoft.net/" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Association française de loi 1901, issue du monde éducatif, Framasoft est un réseau d'éducation populaire consacré principalement au logiciel libre. Le réseau s'organise en trois axes sur un mode collaboratif : promotion, diffusion et développement de logiciels libres, enrichissement de la culture libre. Il offre également des services libres en ligne. La page portail du réseau présente l'ensemble des activités de Framasoft et propose des liens vers les différents sites et activités du réseau.">
    <meta name="author" content="Framasoft">
    <meta name="keywords" content="Framasoft, logiciels libres, logiciels libres et open source, culture libre, FOSS, promotion et diffusion des logiciels libres, open source" />

    <!--metas DC-->
    <link rel="schema.DC" href="http://purl.org/dc/elements/1.1/" />
    <meta name="DC.type" content="Text" />
    <meta name="DC.format" content="text/html" />
    <meta name="DC.identifier" scheme="URI" content="http://www.framasoft.org/" />
    <meta name="DC.title" content="Framasoft ~ Page portail du réseau" />
    <meta name="DC.publisher" content="Framasoft" />
    <meta name="DC.contributor" content="Framasoft" />
    <meta name="DC.language" scheme="RFC3066" content="fr" />
    <meta name="DC.subject" content="Framasoft, logiciels libres, logiciels libres et open source, culture libre, FOSS, promotion et diffusion des logiciels libres, open source" />
    <meta name="DC.rights" content="Creative Commons-By-SA sauf mention contraire" />
    <meta name="DC.description" content="Association française de loi 1901, issue du monde éducatif, Framasoft est un réseau d'éducation populaire consacré principalement au logiciel libre. Le réseau s'organise en trois axes sur un mode collaboratif : promotion, diffusion et développement de logiciels libres, enrichissement de la culture libre. Il offre également des services libres en ligne. La page portail du réseau présente l'ensemble des activités de Framasoft et propose des liens vers les différents sites et activités du réseau." />
    <!-- fin metas DC -->

    <!-- Les styles -->
    <link href="/nav/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <link href="<?php echo $home_subdir; ?>css/framasoft.css" rel="stylesheet" />

    <!-- Fav and touch icons -->
    <link rel="shortcut icon" href="../NAVPICS/favicon.png">
    <script src="/nav/lib/jquery/jquery.min.js" type="text/javascript"></script>
    <script src="/nav/lib/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>

</head>

<body>
    <script src="/nav/nav.js" id="nav_js" type="text/javascript"></script>
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
    <div class="container ombre" style="margin-top:20px;">
        <div class="row header">
            <div class="col-md-4">
                <h1 id="framasoft" class="sitename"><a href="#" class="orange"><span class="violet1">Frama</span>soft</a></h1>
            </div>
            <div class="col-md-5">
                <p class="headerSubTitle">La route est longue mais la voie est libre…</p>
            </div>
            <div class="col-md-3">
                <ul class="navEntities">
                    <li class="bleu1"><a href="#topPgLogiciels" title="vers la rubrique logiciels"><span aria-hidden="true">lkB</span><span class="sr-only">Rubrique libr’en vrac</span></a></li>
                    <li class="rouge1"><a href="#topPgCulture" title="vers la rubrique culture"><span aria-hidden="true">lkR</span><span class="sr-only">Rubrique cloud</span></a></li>
                    <li class="vert1"><a href="#topPgCloud" title="vers la rubrique cloud"><span aria-hidden="true">lkG</span><span class="sr-only">Rubrique culture</span></a></li>
                    <li class="jaune1"><a href="#topPgVrac" title="vers la rubrique libr’en vrac"><span aria-hidden="true">lkY</span><span class="sr-only">Rubrique logiciels</span></a></li>
                </ul>
            </div>
        </div>

        <div class="row">
            <div class="col-md-8 accueil">
                <div class="row">
                    <ul class="accroche">
                        <li>Un réseau dédié à la promotion du «&nbsp;<span class="smallcaps">libre</span>&nbsp;» en général et du <span class="smallcaps">logiciel libre</span> en particulier.</li>
                        <li>De nombreux services et projets innovants mis librement à disposition du grand public.</li>
                        <li>Une <a href="#topPgCommunaute">communauté</a> de bénévoles soutenue par une association d’intérêt général.</li>
                        <li>Une invitation à bâtir ensemble un monde de partage et de coopération.</li>
                    </ul>
                </div>
                <div class="row">
                    <p class="homeAlerte">Vous cherchez l'annuaire de logiciels libres&nbsp;? <a href="http://framalibre.org">C'est par ici&nbsp!</a></p>
                    <figure id="pingouinVolant">
                        <img src="<?php echo $home_subdir; ?>img/pingouinVolantRefait.png" alt="" />
                    </figure>
                </div>
                <div class="row containerActu">
                    <h3 id="news">Quoi de neuf sur Framasoft&nbsp;?</h3>
                </div>

                <!--  Carousel -->
                <div id="carousel-actus" class="carousel slide">
                    <div class="carousel-inner">
                        <div class="item active">
                            <a href="http://degooglisons-internet.org"><img src="<?php echo $home_subdir; ?>img/slide-degooglisons-internet.png" alt="" />
                                <div class="carousel-caption">
                                    <p><strong><span class="violet1">Dégooglisons</span> <span class="orange">Internet</span></strong> : des alternatives libres sont possibles.<br />Découvrez notre projet pour résister aux géants des services en ligne.</p>
                                </div>
                            </a>
                        </div>
                        <div class="item">
                            <a href="http://framasphere.org"><img src="<?php echo $home_subdir; ?>img/slide-framasphere.jpg" alt="" />
                                <div class="carousel-caption">
                                    <p>Framasoft ouvre l'accès à un réseau social décentralisé,<br/>sans publicité ni exploitation de données : <strong><span class="violet1">Frama</span><span class="vert">sphère</span></strong>.</p>
                                </div>
                            </a>
                        </div>
                        <div class="item">
                            <a href="http://framabook.org/16-r-et-espace/"><img src="<?php echo $home_subdir; ?>img/slide-book-r-et-espace.png" alt="" />
                                <div class="carousel-caption">
                                    <p>Nouveau <strong><span class="violet1">Frama</span><span class="rouge">book</span></strong> : <em>R et espace</em>, un manuel pour s’initier<br />au traitement de données géographiques et à la programmation avec R</p>
                                </div>
                            </a>
                        </div>
                        <div class="item">
                            <a href="http://2014.capitoledulibre.org"><img src="/accueil/img/slide-capitole2014.jpg" alt="" />
                                <div class="carousel-caption">
                                    <p><strong><span class="violet1">Frama</span><span class="orange">soft</span></strong> sera à Toulouse pour le <em>Capitole du Libre</em> les 14, 15 et 16 novembre.</p>
                                </div>
                            </a>
                        </div>
                        <div class="item">
                            <a href="http://fr.ulule.com/etherpad-framapad/news/"><img src="<?php echo $home_subdir; ?>img/slide-mypads-dev.jpg" alt="" />
                                <div class="carousel-caption">
                                    <p>Le développement du plugin MyPads pour permettre<br />la création de comptes privés sur <strong><span class="violet1">Frama</span><span class="vert">pad</span></strong> a commencé…</p>
                                </div>
                            </a>
                        </div>
                    </div><!-- /.carousel-inner -->

                    <!-- Controls -->
                    <p class="text-center" id="play-pause"><a href="#play-pause" class="carousel-control" title="Pause"><span class="glyphicon glyphicon-pause"></span><span class="sr-only">Pause</span></a></p>

                    <a class="left carousel-control" href="#carousel-actus" role="button" data-slide="prev" title="Diapo précédente">
                        <span class="glyphicon glyphicon-chevron-left"></span><span class="sr-only">Diapo précédente</span>
                    </a>

                    <a class="right carousel-control" href="#carousel-actus" role="button" data-slide="next" title="Diapo suivante">
                        <span class="glyphicon glyphicon-chevron-right"></span><span class="sr-only">Diapo suivante</span>
                    </a>
                </div><!-- /.carousel -->
            </div>

            <div class="col-md-4" id="blocFramatrucs">
                <h4 class="titreFramaTrucs"><a href="#topPgLogiciels" class="bleu">Libres logiciels</a></h4>
                <div class="row">
                    <div class="col-md-4">
                        <ul class="listeFramaTrucs">
                            <li>Un&nbsp;annuaire</li>
                            <li>Une&nbsp;clé&nbsp;USB</li>
                            <li>Un&nbsp;DVD</li>
                            <li>Un&nbsp;distributeur</li>
                        </ul>
                    </div>
                    <div class="col-md-8">
                        <ul class="FramaTrucs">
                            <li><a href="http://www.framalibre.org/" class="bleu">&#8827;&nbsp;&nbsp; <span class="violet1">Frama</span>libre</a></li>
                            <li><a href="http://www.framakey.org/"class="bleu">&#8827;&nbsp;&nbsp; <span class="violet1">Frama</span>key</a></li>
                            <li><a href="http://www.framadvd.org/"class="bleu">&#8827;&nbsp;&nbsp; <span class="violet1">Frama</span>dvd</a></li>
                            <li><a href="http://www.framapack.org/"class="bleu">&#8827;&nbsp;&nbsp; <span class="violet1">Frama</span>pack</a></li>
                        </ul>
                    </div>
                </div>
                <h4 class="titreFramaTrucs"><a href="#topPgCulture" class="rouge">Libres cultures</a></h4>
                <div class="row">
                    <div class="col-md-4">
                        <ul class="listeFramaTrucs">
                            <li>Des&nbsp;infos</li>
                            <li>Des&nbsp;livres</li>
                            <li>Des&nbsp;traductions</li>
                            <li>Des&nbsp;vidéos</li>
                            <li>De&nbsp;la&nbsp;musique</li>
                        </ul>
                    </div>
                    <div class="col-md-8">
                        <ul class="FramaTrucs">
                            <li><a href="http://www.framablog.org/" class="rouge">&#8827;&nbsp;&nbsp; <span class="violet1">Frama</span>blog</a></li>
                            <li><a href="http://www.framabook.org/" class="rouge">&#8827;&nbsp;&nbsp; <span class="violet1">Frama</span>book</a></li>
                            <li><a href="http://www.framablog.org/index.php/pages/framalang" class="rouge">&#8827;&nbsp;&nbsp; <span class="violet1">Frama</span>lang</a></li>
                            <li><a href="http://www.framatube.org/" class="rouge">&#8827;&nbsp;&nbsp; <span class="violet1">Frama</span>tube</a></li>
                            <li><a href="http://www.framazic.org/" class="rouge">&#8827;&nbsp;&nbsp; <span class="violet1">Frama</span>zic</a></li>
                        </ul>
                    </div>
                </div>
                <h4 class="titreFramaTrucs"><a href="#topPgCloud" class="vert">Libres services</a></h4>
                <div class="row">
                    <div class="col-md-4">
                        <ul class="listeFramaTrucs">
                            <li>&Eacute;diter</li>
                            <li>Organiser</li>
                            <li>Calculer</li>
                            <li>Structurer</li>
                            <li>Dessiner</li>
                            <li>Partager</li>
                        </ul>
                    </div>
                    <div class="col-md-8">
                        <ul class="FramaTrucs">
                            <li><a href="http://www.framapad.org/" class="vert">&#8827;&nbsp;&nbsp; <span class="violet1">Frama</span>pad</a></li>
                            <li><a href="http://www.framadate.org/" class="vert">&#8827;&nbsp;&nbsp; <span class="violet1">Frama</span>date</a></li>
                            <li><a href="http://www.framacalc.org/" class="vert">&#8827;&nbsp;&nbsp; <span class="violet1">Frama</span>calc</a></li>
                            <li><a href="http://www.framindmap.org/" class="vert">&#8827;&nbsp;&nbsp; <span class="violet1">Fra</span>mindmap</a></li>
                            <li><a href="http://framavectoriel.org/" class="vert">&#8827;&nbsp;&nbsp; <span class="violet1">Frama</span>vectoriel</a></li>
                            <li><a href="https://framasphere.org/" class="vert">&#8827;&nbsp;&nbsp; <span class="violet1">Frama</span>sphère</a></li>
                        </ul>
                    </div>
                </div>
                <h4 class="titreFramaTrucs"><a href="#topPgVrac" class="jaune">Libr’en vrac</a></h4>
                <div class="row">
                    <div class="col-md-4">
                        <ul class="listeFramaTrucs">
                            <li>Un&nbsp;laboratoire</li>
                            <li>Un&nbsp;forum</li>
                            <li>Une&nbsp;forge</li>
                            <li>Une&nbsp;boutique</li>
                        </ul>
                    </div>
                    <div class="col-md-8">
                        <ul class="FramaTrucs">
                            <li><a href="http://framalab.org/" class="jaune">&#8827;&nbsp;&nbsp; <span class="violet1">Frama</span>lab</a></li>
                            <li><a href="http://forum.framasoft.org/" class="jaune">&#8827;&nbsp;&nbsp; <span class="violet1">Fram</span>agora</a></li>
                            <li><a href="https://framacode.org" class="jaune">&#8827;&nbsp;&nbsp; <span class="violet1">Frama</span>code</a></li>
                            <li><a href="http://www.enventelibre.org/" class="jaune">&#8827;&nbsp;&nbsp; <span class="violet1">EnVente</span>Libre</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="row" class="finPseudoPage">
            <div class="col-md-2">
                <ul class="navEntities2">
                    <li class="jaune2"><a href="#topPgLogiciels" title="vers la rubrique logiciels"><span aria-hidden="true">lkY</span><span class="sr-only">Rubrique logiciels</span></a></li>
                    <li class="vert2"><a href="#topPgCulture" title="vers la rubrique culture"><span aria-hidden="true">lkG</span><span class="sr-only">Rubrique culture</span></a></li>
                    <li class="rouge2"><a href="#topPgCloud" title="vers la rubrique cloud"><span aria-hidden="true">lkR</span><span class="sr-only">Rubrique cloud</span></a></li>
                    <li class="bleu2"><a href="#topPgVrac" title="vers la rubrique libr’en vrac"><span aria-hidden="true">lkB</span><span class="sr-only">Rubrique libr’en vrac</span></a></li>
                </ul>
            </div>
        </div>
    </div> <!-- /container -->


    <!-- communauté -->
    <div class="container ombre" >
        <div class="row header">
            <div class="col-md-4">
                <h1 class="sitename"><a href="#" class="violet1">Libre communauté</a></h1>
            </div>
            <div class="col-md-5">
                <p class="headerSubTitle">Vous êtes libre ce soir&nbsp;?</p>
            </div>
            <div class="col-md-3">
                <ul class="navEntities">
                    <li class="bleu1"><a href="#topPgLogiciels" title="vers la rubrique logiciels"><span aria-hidden="true">lkB</span><span class="sr-only">Rubrique libr’en vrac</span></a></li>
                    <li class="rouge1"><a href="#topPgCulture" title="vers la rubrique culture"><span aria-hidden="true">lkR</span><span class="sr-only">Rubrique cloud</span></a></li>
                    <li class="vert1"><a href="#topPgCloud" title="vers la rubrique cloud"><span aria-hidden="true">lkG</span><span class="sr-only">Rubrique culture</span></a></li>
                    <li class="jaune1"><a href="#topPgVrac" title="vers la rubrique libr’en vrac"><span aria-hidden="true">lkY</span><span class="sr-only">Rubrique logiciels</span></a></li>
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
                <p class="miniBlocTexte">Qui se cache derrière Framasoft&nbsp;? Tous ceux qui ont participé ou participent de près ou de loin à nos différents projets. Il suffit de vouloir promouvoir le Libre et de placer sa participation sous licence libre, garantissant qu’elle sera mise dans le pot des biens communs sans risque d’appropriation.</p>
                <p class="miniBlocLast">&nbsp;</p>
            </div>

            <div class="col-md-4 blocCommunaute">
                <h4 class="titreBloc">Une association</h4>
                <p class="miniBlocSubTitle">Un peu de cathédrale</p>
                <p class="miniBlocTexte">Framasoft repose sur une association&nbsp;1901 d’intérêt général. À charge pour elle de mettre de l'huile dans les rouages et de s’assurer que la communauté puisse s’activer dans les meilleures conditions. Elle compte trois permanents et est financée principalement par les dons individuels collectés sur Internet. Vous pouvez en être vous aussi, mais attention ça tient plus du sacerdoce que de la sinécure&nbsp;!</p>
                <p class="miniBlocLast">&nbsp;</p>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4 blocCommunaute">
                <h4 class="titreBloc">Participer&nbsp;? </h4>
                <p class="miniBlocSubTitle">Il y a mille et une façon de participer avec nous à diffuser le Libre au sein de nos nombreux projets.</p>
                <p class="miniBlocTexte">Tester, rédiger, modérer, administrer, traduire, relire, relayer, coder, communiquer, promouvoir, sensibiliser… N’hésitez pas à <a href="http://contact.framasoft.org/">prendre contact</a> avec nous&nbsp;! Et merci d'avance…</p>
                <p class="miniBlocLast">&nbsp;</p>
            </div>

            <div class="col-md-4 blocCommunaute">
                <h4 class="titreBloc">Nous soutenir&nbsp;? </h4>
                <p class="miniBlocSubTitle">Parce que libre ne signifie pas gratuit</p>
                <p class="miniBlocTexte">Framasoft ne serait rien sans sa communauté de bénévoles mais ne pourrait pas fonctionner non plus sans le service de l’association qui a des frais et emploie trois indispensables permanents. Notre financement dépend de vous, c’est-à-dire des dons individuels collectés sur Internet. <a href="http://soutenir.framasoft.org/">Si vous pensez que nous le méritons…</a></p>
                <p class="miniBlocLast">&nbsp;</p>
            </div>

            <div class="col-md-4 blocCommunaute">
                <img src="<?php echo $home_subdir; ?>img/framateam2.jpg" alt="" />
            </div>

        </div>

        <div class="row" class="finPseudoPage">
            <div class="col-md-2">
                <ul class="navEntities2">
                    <li class="jaune2"><a href="#topPgLogiciels" title="vers la rubrique logiciels"><span aria-hidden="true">lkY</span><span class="sr-only">Rubrique logiciels</span></a></li>
                    <li class="vert2"><a href="#topPgCulture" title="vers la rubrique culture"><span aria-hidden="true">lkG</span><span class="sr-only">Rubrique culture</span></a></li>
                    <li class="rouge2"><a href="#topPgCloud" title="vers la rubrique cloud"><span aria-hidden="true">lkR</span><span class="sr-only">Rubrique cloud</span></a></li>
                    <li class="bleu2"><a href="#topPgVrac" title="vers la rubrique libr’en vrac"><span aria-hidden="true">lkB</span><span class="sr-only">Rubrique libr’en vrac</span></a></li>
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
                    <li class="bleu3"><a href="#topPgLogiciels" title="rubrique logiciels"><span aria-hidden="true">lkB</span><span class="sr-only">Rubrique libr’en vrac</span></a></li>
                    <li class="rouge1"><a href="#topPgCulture" title="vers la rubrique culture"><span aria-hidden="true">lkR</span><span class="sr-only">Rubrique cloud</span></a></li>
                    <li class="vert1"><a href="#topPgCloud" title="vers la rubrique cloud"><span aria-hidden="true">lkG</span><span class="sr-only">Rubrique culture</span></a></li>
                    <li class="jaune1"><a href="#topPgVrac" title="vers la rubrique libr’en vrac"><span aria-hidden="true">lkY</span><span class="sr-only">Rubrique logiciels</span></a></li>
                </ul>
            </div>
        </div>

        <div class="row">
            <div class="col-md-8" id="presentationLogiciels">
                <h3 class="presentation">Logiciel Libre ?</h3>
                <p class="blocSubTitle">Un <a href="http://fr.wikipedia.org/wiki/Logiciel_libre" target="_blank">logiciel libre&nbsp;&#8599;</a> est un logiciel qui offre et garantit les quatre libertés suivantes&nbsp;: utilisation, étude, modification et duplication en vue de sa diffusion (gratuite ou pas).</p>
                <p class="blocTexte">Ceci est permis techniquement grâce à l’accès au <a href="http://fr.wikipedia.org/wiki/Code_source" target="_blank">code&nbsp;&#8599;</a> et légalement grâce à la <a href="http://fr.wikipedia.org/wiki/Licence_libre" target="_blank">licence libre&nbsp;&#8599;</a> qui l’accompagne. Ces <span class="smallcaps">quatre libertés</span> favorisent la transparence, la confiance, l’échange, le partage et la collaboration au sein de communautés.</p>
                <p class="blocTexte">Framasoft vous propose un annuaire, des clés USB et DVD et un installateur Windows pour les découvrir et les utiliser régulièrement.</p>
                <p class="miniBlocLast">&nbsp;</p>
            </div>

            <div class="col-md-4">
                <figure id="pingouinMuseeWindows">
                    <img src="<?php echo $home_subdir; ?>img/musee-windows_ll-de-mars_licence-art-libre.jpg" alt="" />
                </figure>
            </div>
        </div>

        <div class="row">
            <div class="col-md-3 miniBloc">
                <h4 class="titreBloc goTo1"><a href="http://www.framalibre.org/" class="bleu FramaTrucsLien"><span class="violet1">Frama</span>libre</a></h4>
                <p class="miniBlocSubTitle">Le gros annuaire</p>
                <p class="miniBlocTexte">Plus de 1600 logiciels classés, testés et commentés dans le projet historique et fondateur de Framasoft. On y trouve également des tutoriels et des articles de fond.</p>
                <p class="miniBlocLast">&nbsp;</p>
            </div>

            <div class="col-md-3 miniBloc">
                <h4 class="titreBloc goTo1"><a href="http://www.framakey.org/"class="bleu FramaTrucsLien"><span class="violet1">Frama</span>key</a></h4>
                <p class="miniBlocSubTitle">Le plein de liberté dans une simple clé</p>
                <p class="miniBlocTexte">Dans une clé USB (ou tout autre support mobile) utiliser en mode nomade une centaine de logiciels libres portables pour Windows, tester voire installer une distribution GNU/Linux ou encore avoir accès hors ligne à toute la Wikipédia francophone.</p>
                <p class="EnVenteLibre"><a href="http://enventelibre.org/catalog/par-association/framasoft" class="bleu" title="Acheter la Framakey sur la boutique En Vente Libre"><span aria-hidden="true">[€]</span><span class="sr-only">En Vente Libre</span></a></p>
            </div>

            <div class="col-md-3 miniBloc">
                <h4 class="titreBloc goTo1"><a href="http://www.framadvd.org/"class="bleu FramaTrucsLien"><span class="violet1">Frama</span>dvd</a></h4>
                <p class="miniBlocSubTitle">Le plein de liberté dans un DVD</p>
                <p class="miniBlocTexte">Un DVD rempli non seulement des meilleurs logiciels libres pour Windows, Mac et GNU/Linux (avec une distribution dedans) mais aussi de la culture libre (textes, photos, audios et vidéos). Existe en une version spéciale école</p>
                <p class="EnVenteLibre"><a href="http://enventelibre.org/catalog/par-association/framasoft" class="bleu" title="Acheter le FramaDVD sur la boutique En Vente Libre"><span aria-hidden="true">[€]</span><span class="sr-only">En Vente Libre</span></a></p>
            </div>

            <div class="col-md-3 miniBloc">
                <h4 class="titreBloc goTo1"><a href="http://www.framapack.org/"class="bleu FramaTrucsLien"><span class="violet1">Frama</span>pack</a></h4>
                <p class="miniBlocSubTitle">Distribution massive</p>
                <p class="miniBlocTexte">Pratique, sur Framapack on fait son marché des meilleurs logiciels libres Windows dans leur dernière version.<br>On les sélectionne et ils s’installent tous ensemble d’un simple clic&nbsp;!</p>
                <p class="miniBlocLast">&nbsp;</p>
            </div>
        </div>

        <div class="row" class="finPseudoPage">
            <div class="col-md-2">
                <ul class="navEntities2">
                    <li class="jaune4"><a href="#topPgLogiciels" title="rubrique logiciels"><span aria-hidden="true">lkY</span><span class="sr-only">Rubrique logiciels</span></a></li>
                    <li class="vert2"><a href="#topPgCulture" title="vers la rubrique culture"><span aria-hidden="true">lkG</span><span class="sr-only">Rubrique culture</span></a></li>
                    <li class="rouge2"><a href="#topPgCloud" title="vers la rubrique cloud"><span aria-hidden="true">lkR</span><span class="sr-only">Rubrique cloud</span></a></li>
                    <li class="bleu2"><a href="#topPgVrac" title="vers la rubrique libr’en vrac"><span aria-hidden="true">lkB</span><span class="sr-only">Rubrique libr’en vrac</span></a></li>
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
                    <li class="bleu5"><a href="#topPgLogiciels" title="vers la rubrique logiciels"><span aria-hidden="true">lkB</span><span class="sr-only">Rubrique libr’en vrac</span></a></li>
                    <li class="rouge3"><a href="#topPgCulture" title="rubrique culture"><span aria-hidden="true">lkR</span><span class="sr-only">Rubrique cloud</span></a></li>
                    <li class="vert1"><a href="#topPgCloud" title="vers la rubrique cloud"><span aria-hidden="true">lkG</span><span class="sr-only">Rubrique culture</span></a></li>
                    <li class="jaune1"><a href="#topPgVrac" title="vers la rubrique libr’en vrac"><span aria-hidden="true">lkY</span><span class="sr-only">Rubrique logiciels</span></a></li>
                </ul>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6" id="presentationLibre">
                <div class="row">
                    <h3 class="presentation">Culture Libre&nbsp;?</h3>
                    <p class="blocSubTitle">Facilitée par Internet et la numérisation, la «&nbsp;<a href="http://fr.wikipedia.org/wiki/Culture_libre">culture libre&nbsp;&#8599;</a>&nbsp;» est une culture en mouvement qui s’inspire directement du logiciel libre dans sa philosophie et ses licences pour promouvoir et diffuser des œuvres de l’esprit.</p>
                    <p class="blocTexte">Elle explore des domaines aussi variés que les arts, l’éducation, les sciences, le matériel... Ces œuvres peuvent alors être considérées comme des <a href="http://fr.wikipedia.org/wiki/Bien_commun">biens communs&nbsp;&#8599;</a>. L’exemple le plus emblématique est l’encyclopédie libre Wikipédia.</p>
                    <p class="blocTexte">Dans ce cadre, Framasoft vous propose un blog, une maison d’édition, une plateforme vidéo, un site dédié à la musique libre ainsi qu’un service original de traduction collaborative.</p>
                    <p class="miniBlocLast">&nbsp;</p>
                </div>

                <div class="row">
                    <figure id="pingouinsQuelquesBriques">
                        <img src="<?php echo $home_subdir; ?>img/quelques-briques_licence-art-libre.jpg" alt="" />
                    </figure>
                </div>

                <div class="row">
                    <blockquote>
                    «&nbsp;Parce que ce serait l’une des plus grandes opportunités manquées de notre époque si le logiciel libre ne libérait rien d’autre que du code.&nbsp;»
                    </blockquote>
                </div>
            </div>

            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-6 miniBloc2">
                        <h4 class="titreBloc goTo2"><a href="http://www.framablog.org/index.php" class="rouge FramaTrucsLien"><span class="violet1">Frama</span>blog</a></h4>
                        <p class="miniBlocSubTitle">L’actualité du «&nbsp;Libre&nbsp;»</p>
                        <p class="miniBlocTexte">Chroniques quotidiennes autour du Libre en général et du logiciel libre en particulier. De riches débats dans les commentairees, de nombreuses traductions originales et les annonces des nouveautés de l’ensemble du réseau Framasoft.</p>
                        <p class="miniBlocLast">&nbsp;</p>
                    </div>

                    <div class="col-md-6 miniBloc2">
                        <h4 class="titreBloc goTo2"><a href="http://framabook.org/" class="rouge FramaTrucsLien"><span class="violet1">Frama</span>book</a></h4>
                        <p class="miniBlocSubTitle">Le pari du livre libre</p>
                        <p class="miniBlocTexte">Notre maison d’édition qui comporte une vingtaine de titres autour du logiciel libre, initiation à la programmation, réflexion sur le droit d’auteur mais aussi des BD et même un roman. Un livre libre offre au lecteur les mêmes libertés qu’un logiciel libre.</p>
                        <p class="EnVenteLibre"><a href="http://enventelibre.org/catalog/par-association/framasoft" class="rouge" title="Acheter les Framabooks sur la boutique En Vente Libre"><span aria-hidden="true">[€]</span><span class="sr-only">En Vente Libre</span></a></p>
                    </div>

                </div>

                <div class="row">
                    <div class="col-md-6 miniBloc2">
                        <h4 class="titreBloc goTo2"><a href="http://www.framablog.org/index.php/pages/framalang" class="rouge FramaTrucsLien"><span class="violet1">Frama</span>lang</a></h4>
                        <p class="miniBlocSubTitle">Traduction collaborative</p>
                        <p class="miniBlocTexte">Traduire tous ensemble, principalement de l’anglais vers le français, dans la convivialité en bénéficiant de la force d’Internet et de la bonne volonté de ses habitants. Il peut s’agir d’articles, de sous-titrage et même de livres entiers&nbsp;!</p>
                        <p class="miniBlocLast">&nbsp;</p>
                    </div>

                    <div class="col-md-6 miniBloc2">
                        <h4 class="titreBloc goTo2"><a href="http://www.framatube.org/" class="rouge FramaTrucsLien"><span class="violet1">Frama</span>tube</a></h4>
                        <p class="miniBlocSubTitle">Notre «&nbsp;YouTube&nbsp;» du Libre</p>
                        <p class="miniBlocTexte">Vidéos en français (ou sous-titrées en français) autour du logiciel libre en particulier et du Libre en général. Interviews, conférences, documentaires, extraits télévisés… pour s’informer mais aussi informer les autres.</p>
                        <p class="miniBlocLast">&nbsp;</p>
                    </div>

                </div>

                <div class="row">
                    <div class="col-md-6 miniBloc2">
                        <h4 class="titreBloc goTo2"><a href="http://framazic.org/" class="rouge FramaTrucsLien"><span class="violet1">Frama</span>zic</a></h4>
                        <p class="miniBlocSubTitle">Quand la musique est libre</p>
                        <p class="miniBlocTexte">Une «&nbsp;musique libre&nbsp;» est une musique qui offre au mélomane les mêmes libertés qu’un logiciel libre. Un site dédié permettant de mieux la comprendre accompagné d’une petite sélection permettant de constater que la qualité est au rendez-vous.</p>
                        <p class="miniBlocLast">&nbsp;</p>
                    </div>

                    <div class="col-md-6 miniBloc2">
                        <h4 class="titreBloc goTo2"><a href="http://www.openculture.com/2010/07/the_monty_python_philosophy_football_match.html" class="rouge FramaTrucsLien"><span class="violet1">Frama</span>cat</a></h4>
                        <p class="miniBlocSubTitle">Hommage à nos héros</p>
                        <figure id="nyanCat">
                            <img src="<?php echo $home_subdir; ?>img/nyanCat.gif" alt="" />
                        </figure>
                        <p class="legende"> Vous n'espériez pas y échapper, non&nbsp;? Si&nbsp;?</p>
                        <p class="miniBlocLast">&nbsp;</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row" class="finPseudoPage">
            <div class="col-md-2">
                <ul class="navEntities2">
                    <li class="jaune6"><a href="#topPgLogiciels" title="vers la rubrique logiciels"><span aria-hidden="true">lkY</span><span class="sr-only">Rubrique logiciels</span></a></li>
                    <li class="vert4"><a href="#topPgCulture" title="rubrique culture"><span aria-hidden="true">lkG</span><span class="sr-only">Rubrique culture</span></a></li>
                    <li class="rouge2"><a href="#topPgCloud" title="vers la rubrique cloud"><span aria-hidden="true">lkR</span><span class="sr-only">Rubrique cloud</span></a></li>
                    <li class="bleu2"><a href="#topPgVrac" title="vers la rubrique libr’en vrac"><span aria-hidden="true">lkB</span><span class="sr-only">Rubrique libr’en vrac</span></a></li>
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
                <p class="headerSubTitle">Du cloud computing libre&nbsp;? c’est possible&nbsp;!</p>
            </div>
            <div class="col-md-3">
                <ul class="navEntities">
                    <li class="bleu5"><a href="#topPgLogiciels" title="vers la rubrique logiciels"><span aria-hidden="true">lkB</span><span class="sr-only">Rubrique libr’en vrac</span></a></li>
                    <li class="rouge5"><a href="#topPgCulture" title="vers la rubrique culture"><span aria-hidden="true">lkR</span><span class="sr-only">Rubrique cloud</span></a></li>
                    <li class="vert3"><a href="#topPgCloud" title="rubrique cloud"><span aria-hidden="true">lkG</span><span class="sr-only">Rubrique culture</span></a></li>
                    <li class="jaune1"><a href="#topPgVrac" title="vers la rubrique libr’en vrac"><span aria-hidden="true">lkY</span><span class="sr-only">Rubrique logiciels</span></a></li>
                </ul>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6" id="presentationServices">
                <div class="row" id="blocServices">
                    <h3 class="presentation">Service Libre&nbsp;?</h3>
                    <p class="blocSubTitle">Nom de code&nbsp;: «&nbsp;Framacloud&nbsp;»</p>
                    <p class="blocTexte">Intuitif, sans inscription et à même votre navigateur, un ensemble de services en ligne libres et respectueux de vos données personnelles.</p>
                    <p class="blocTexte">On peut aussi les installer sur son propre serveur, participant à décentraliser l’Internet.</p>
                    <p class="miniBlocLast">&nbsp;</p>
                </div>
            </div>

            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-6 miniBloc2">
                        <h4 class="titreBloc goTo3"><a href="http://framapad.org/" class="vert FramaTrucsLien"><span class="violet1">Frama</span>pad</a></h4>
                        <p class="miniBlocSubTitle">Éditer collaborativement</p>
                        <p class="miniBlocTexte">Écrivons tous ensemble sur le même document dans une interface de rédaction collective en ligne. Aucune inscription requise, on se donne un pseudo, une couleur et on se lance&nbsp;!</p>
                        <p class="miniBlocLast">&nbsp;</p>
                    </div>

                    <div class="col-md-6 miniBloc2">
                        <h4 class="titreBloc goTo3"><a href="http://www.framadate.org/" class="vert FramaTrucsLien"><span class="violet1">Frama</span>date</a></h4>
                        <p class="miniBlocSubTitle">Organiser des rendez-vous et des sondages</p>
                        <p class="miniBlocTexte">Framadate c’est un peu comme Doodle mais en libre. Rien de plus simple de créer un rendez-vous ou un sondage sans inscription pour y inviter vos collaborateurs.</p>
                        <p class="miniBlocLast">&nbsp;</p>
                    </div>
                </div>
            </div>

            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-3 miniBloc">
                        <h4 class="titreBloc goTo3"><a href="http://www.framacalc.org/_start" class="vert FramaTrucsLien"><span class="violet1">Frama</span>calc</a></h4>
                        <p class="miniBlocSubTitle">Un tableur collaboratif</p>
                        <p class="miniBlocTexte">Framacalc est au tableur ce que Framapad est au traitement de texte, autrement dit la possibilité d’éditer simplement et collectivement en ligne sur un même document.</p>
                        <p class="miniBlocLast">&nbsp;</p>
                    </div>

                    <div class="col-md-3 miniBloc">
                        <h4 class="titreBloc goTo3"><a href="http://www.framindmap.org/" class="vert FramaTrucsLien"><span class="violet1">Fra</span>mindmap</a></h4>
                        <p class="miniBlocSubTitle">Créer des cartes mentales</p>
                        <p class="miniBlocTexte">Interface fluide et intuitive pour créer rapidement et simplement des cartes heuristiques à même votre navigateur. Pertinent en situation de brainstorming ou de prise de notes.</p>
                        <p class="miniBlocLast">&nbsp;</p>
                    </div>

                    <div class="col-md-3 miniBloc">
                        <h4 class="titreBloc goTo3"><a href="http://framavectoriel.org/" class="vert FramaTrucsLien"><span class="violet1">Frama</span>vectoriel</a></h4>
                        <p class="miniBlocSubTitle">Dessiner en vectoriel</p>
                        <p class="miniBlocTexte">Pour créer et éditer simplement et rapidement de belles images en ligne au format ouvert SVG. Les enfants adorent&nbsp;!</p>
                        <p class="miniBlocLast">&nbsp;</p>
                    </div>

                    <div class="col-md-3 miniBloc">
                        <h4 class="titreBloc goTo3"><a href="http://framasphere.org/" class="vert FramaTrucsLien"><span class="violet1">Frama</span>sphère</a></h4>
                        <p class="miniBlocSubTitle">Le réseau social libre</p>
                        <p class="miniBlocTexte"> Framasphère est un réseau social libre, basé sur le logiciel décentralisé Diaspora*. Retrouvez vos amis sur Framasphère - ou d'autres pods Diaspora* - et échangez avec eux sans être pisté.</p>
                        <p class="miniBlocLast">&nbsp;</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row" class="finPseudoPage">
            <div class="col-md-2">
                <ul class="navEntities2">
                    <li class="jaune6"><a href="#topPgLogiciels" title="vers la rubrique logiciels"><span aria-hidden="true">lkY</span><span class="sr-only">Rubrique logiciels</span></a></li>
                    <li class="vert6"><a href="#topPgCulture" title="vers la rubrique culture"><span aria-hidden="true">lkG</span><span class="sr-only">Rubrique culture</span></a></li>
                    <li class="rouge4"><a href="#topPgCloud" title="rubrique cloud"><span aria-hidden="true">lkR</span><span class="sr-only">Rubrique cloud</span></a></li>
                    <li class="bleu2"><a href="#topPgVrac" title="vers la rubrique libr’en vrac"><span aria-hidden="true">lkB</span><span class="sr-only">Rubrique libr’en vrac</span></a></li>
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
                <p class="headerSubTitle">Inclassables mais non mal classés&nbsp;!</p>
            </div>
            <div class="col-md-3">
                <ul class="navEntities">
                    <li class="bleu5"><a href="#topPgLogiciels" title="vers la rubrique logiciels"><span aria-hidden="true">lkB</span><span class="sr-only">Rubrique libr’en vrac</span></a></li>
                    <li class="rouge5"><a href="#topPgCulture" title="vers la rubrique culture"><span aria-hidden="true">lkR</span><span class="sr-only">Rubrique cloud</span></a></li>
                    <li class="vert5"><a href="#topPgCloud" title="vers la rubrique cloud"><span aria-hidden="true">lkG</span><span class="sr-only">Rubrique culture</span></a></li>
                    <li class="jaune3"><a href="#topPgVrac" title="rubrique libr’en vrac"><span aria-hidden="true">lkY</span><span class="sr-only">Rubrique logiciels</span></a></li>
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
                <p class="miniBlocLast">&nbsp;</p>
            </div>

            <div class="col-md-4" id="AlaUne">
                <h4 class="titreBloc">À la une</h4>
                <p class="miniBlocSubTitle">GéGé, Geektionnerd generator</p>
                <figure id="GeGeGenerator">
                    <a href="http://framalab.org/gknd-creator/" title="vers le générateur de Geektionnerd"><img src="<?php echo $home_subdir; ?>img/GeGeGenerator.jpg" alt="" /></a>
                </figure>
                <p class="legende">
                    Cadeau&nbsp;: le geektionnerd à faire soi-même
                </p>
            </div>

        </div>

        <div class="row">
            <div class="col-md-3 miniBloc">
                <h4 class="titreBloc goTo4"><a href="http://framalab.org/" class="jaune FramaTrucsLien"><span class="violet1">Frama</span>lab</a></h4>
                <p class="miniBlocSubTitle">Le laboratoire des projets Framasoft</p>
                <p class="miniBlocTexte">C’est ici que nous déposons les projets modestes, dans nos cartons, en cours ou en attente de bonnes volontés. On peut y trouver des belles suprises.</p>
                <p class="miniBlocLast">&nbsp;</p>
            </div>

            <div class="col-md-3 miniBloc">
                <h4 class="titreBloc goTo4"><a href="http://forum.framasoft.org/" class="jaune FramaTrucsLien"><span class="violet1">Fram</span>agora</a></h4>
                <p class="miniBlocSubTitle">Le forum du réseau Framasoft<P>
                <p class="miniBlocTexte">Vous avez une question&nbsp;? Nous avons (peut-être) une réponse&nbsp;! «&nbsp;Si tu ne sais pas, demande. Si tu sais, partage.&nbsp;» Framagora est notre convivial espace d’échange d’informations autour du Libre.</p>
                <p class="miniBlocLast">&nbsp;</p>
            </div>

            <div class="col-md-3 miniBloc">
                <h4 class="titreBloc goTo4"><a href="https://github.com/framasoft" class="jaune FramaTrucsLien"><span class="violet1">Frama</span>code</a></h4>
                <p class="miniBlocSubTitle">Chez nous aussi on développe</p>
                <p class="miniBlocTexte">Le dépôt GitHub du code produit par Framasoft, en particulier les services libres Framacloud pour les installer soi-même et les améliorer ensemble.</p>
                <p class="miniBlocLast">&nbsp;</p>
            </div>

            <div class="col-md-3 miniBloc">
                <h4 class="titreBloc goTo4"><a href="http://www.enventelibre.org/" class="jaune FramaTrucsLien"><span class="violet1">EnVente</span>libre</a></h4>
                <p class="miniBlocSubTitle">Notre libre petite boutique</p>
                <p class="miniBlocTexte">L’espace vente des différents produits Framasoft qui peuvent se matérialiser&nbsp;: Framakey, Framabook, Framadvd mais aussi des goodies et des tee-shirts.</p>
                <p class="miniBlocLast">&nbsp;</p>
            </div>
        </div>

        <div class="row" class="finPseudoPage">
            <div class="col-md-2">
                <ul class="navEntities2">
                    <li class="jaune6"><a href="#topPgLogiciels" title="vers la rubrique logiciels"><span aria-hidden="true">lkY</span><span class="sr-only">Rubrique logiciels</span></a></li>
                    <li class="vert6"><a href="#topPgCulture" title="vers la rubrique culture"><span aria-hidden="true">lkG</span><span class="sr-only">Rubrique culture</span></a></li>
                    <li class="rouge6"><a href="#topPgCloud" title="vers la rubrique cloud"><span aria-hidden="true">lkR</span><span class="sr-only">Rubrique cloud</span></a></li>
                    <li class="bleu4"><a href="#topPgVrac" title="rubrique libr’en vrac"><span aria-hidden="true">lkB</span><span class="sr-only">Rubrique libr’en vrac</span></a></li>
                </ul>
            </div>
        </div>
    </div> <!-- /container -->

</body>
</html>
