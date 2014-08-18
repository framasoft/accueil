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
    <!--<link href="<?php echo $home_subdir; ?>css/bootstrap.css" rel="stylesheet">-->
	<link href="/nav/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
	<link href="<?php echo $home_subdir; ?>css/framasoft.css" rel="stylesheet" />
    <style type="text/css">
      body {
      /*  padding-top: 60px;
        padding-bottom: 40px;*/
      }
    </style>

    <!-- Fav and touch icons -->
		<link rel="shortcut icon" href="../NAVPICS/favicon.png">
		<script src="/nav/lib/jquery/jquery.min.js" type="text/javascript"></script>
		<script src="/nav/lib/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
		<script src="/nav/nav.js" id="nav_js" type="text/javascript"></script>
  </head>

  <body>
  <!--   <script src="<?php echo $home_subdir; ?>js/jquery.min.js"></script>
     <script src="<?php echo $home_subdir; ?>js/bootstrap.min.js"></script>-->
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
			$("#play-pause").on('click', function() {
			    if(jQuery(this).hasClass('glyphicon-pause')) {
				jQuery(this).addClass('glyphicon-play').removeClass('glyphicon-pause').attr('title','Lecture');
				jQuery('#carousel-actus').carousel('pause');
			    } else {
				jQuery(this).addClass('glyphicon-pause').removeClass('glyphicon-play').attr('title','Pause');
				jQuery('#carousel-actus').carousel('cycle');
			    };
			    return false;
			})
		});
	</script>

	<!-- accueil Top -->
	
    <div class="container" style="margin-top:20px;">


      <!-- Example row of columns -->
      <div class="row header">
        <div class="col-md-4">
          <h1 id="framasoft" class="sitename"><a href="#" alt="Framasoft" class="orange"><span class="violet1">Frama</span>soft</a></h1>
        </div>
        <div class="col-md-4">
          <p id="headerSubTitle">La route est longue mais la voie est libre…</p>
       </div>
        <div class="col-md-4">
			<ul class="navEntities">
				<li class="bleu1"><a href="#topPgLogiciels" data-tip="vers la rubrique logiciels">lkB</a></li> 
				<li class="rouge1"><a href="#topPgCulture" data-tip="vers la rubrique culture">lkR</a></li> 
				<li class="vert1"><a href="#topPgCloud" data-tip="vers la rubrique cloud">lkG</a></li> 
				<li class="jaune1"><a href="#topPgVrac" data-tip="vers la rubrique libr’en vrac">lkY</a></li> 
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
				<img src="<?php echo $home_subdir; ?>img/pingouinVolantRefait.png" alt="Le pingouin volant, icône éternelle de Framasoft" />
			    </figure>
			</div>
			<div class="row containerActu">
				  <h3 id="news">Quoi de neuf sur Framasoft&nbsp;?</h3>     
			</div>

			<!--  Carousel - consult the Twitter Bootstrap docs at http://twitter.github.com/bootstrap/javascript.html#carousel -->
			<div id="carousel-actus" class="carousel slide"><!-- class of slide for animation -->
				<a href="#play-pause" class="glyphicon glyphicon-pause" id="play-pause" title="Pause"></a>
				<!--<ol class="carousel-indicators">
					<li data-target="#carousel-actus" data-slide-to="0" class="active"></li>
					<li data-target="#carousel-actus" data-slide-to="1"></li>
				</ol>-->
				<div class="carousel-inner">
					<div class="item" >
					  <a href="http://connard.pro"><img src="/accueil/img/slide-connardpro.jpg" alt="" />
					  <div class="carousel-caption">
						<p>Simon « Gee » Giraudot et Pouhiou présentent leur nouveau roman illustré sur connard.pro</p>
					  </div>
					  </a>
					</div>
					<div class="item">
					  <a href="http://framabook.org/le-temps-des-loups-mission-canis-lupus/"><img src="<?php echo $home_subdir; ?>img/slide-le-temps-des-loups.jpg" alt="" />
					  <div class="carousel-caption">
						<p><em>Le temps des loups</em> : un livre dont vous êtes le héros<br />réalisé par un lycée alsacien avec le soutien de Framasoft</p>
					  </div>
					  </a>
					</div>

					<div class="item">
					  <a href="http://framabag.org"><img src="<?php echo $home_subdir; ?>img/slide-framabag.jpg" alt="" />
					  <div class="carousel-caption">
						<p>Nouveau service en ligne : <strong>Framabag</strong>,<br />
						pour mettre de côté vos lectures remises à plus tard.</p>
					  </div>
					  </a>
					</div>
					<div class="item active">
					  <a href="http://fr.ulule.com/etherpad-framapad/news/"><img src="<?php echo $home_subdir; ?>img/slide-mypads-merci.jpg" alt="" />
					  <div class="carousel-caption">
						<p>La campagne de financement participatif pour le plugin MyPads est terminée. Merci à tous ceux qui ont participé, directement ou indirectement, à ce succès.</p>
					  </div>
					  </a>
					</div>
					<div class="item">
					  <a href="http://www.framatube.org/tags/rmll2014"><img src="/accueil/img/slide-rmll2014-replay.jpg" alt="" />

					  <div class="carousel-caption">
						<p>Si vous n'avez pas pu assiter aux <abbr title="Rencontres Mondiales du Logiciel Libre">RMLL</abbr> de Montpellier, les vidéos des conférences Framasoft sont sur Framatube.</p>
					  </div>
					  </a>
					</div>
				<?php /*<!-- 
					<div class="item">
					  <img src="http://placehold.it/1200x480" alt="" />
					  <div class="carousel-caption">
						<p>Des Framakey Wikipédia seront distribués à la médiathèque de Toulouse.</p>
					  </div>
					</div>
					<div class="item">
					  <img src="http://placehold.it/1200x480" alt="" />
					  <div class="carousel-caption">
						<p>Framasoft était présent au festival &#10077;amateur-nés&#10078; d'Elven les 14 et 15 mars derniers.</p>
					  </div>
					</div>
					<div class="item">
					  <img src="http://placehold.it/1200x480" alt="" />
					  <div class="carousel-caption">
						<p>Gérardmer&nbsp;! Gérardmer outragée&nbsp;! Gérardmer brisée&nbsp;! Gérardmer martyrisée&nbsp;! mais Gérardmer libérée.</p>
					  </div>
					</div>
					-->*/?>
				</div><!-- /.carousel-inner -->
				<!-- Controls -->
				<a class="left carousel-control" href="#carousel-actus" data-slide="prev"><span class="icon-prev"></span></a>
				<a class="right carousel-control" href="#carousel-actus" data-slide="next"><span class="icon-next"></span></a>
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
				  <li>Diffuser</li>
				</ul>
            </div>
			  <div class="col-md-8">
				<ul class="FramaTrucs">
					<li><a href="http://www.framapad.org/" class="vert">&#8827;&nbsp;&nbsp; <span class="violet1">Frama</span>pad</a></li>
					<li><a href="http://www.framadate.org/" class="vert">&#8827;&nbsp;&nbsp; <span class="violet1">Frama</span>date</a></li>
					<li><a href="http://www.framacalc.org/" class="vert">&#8827;&nbsp;&nbsp; <span class="violet1">Frama</span>calc</a></li>
					<li><a href="http://www.framindmap.org/" class="vert">&#8827;&nbsp;&nbsp; <span class="violet1">Fra</span>mindmap</a></li>
					<li><a href="http://framavectoriel.org/" class="vert">&#8827;&nbsp;&nbsp; <span class="violet1">Frama</span>vectoriel</a></li>  
					<li><a href="http://framaphonie.org/" class="vert">&#8827;&nbsp;&nbsp; <span class="violet1">Frama</span>phonie</a></li> 					
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
					<li><a href="https://github.com/framasoft" class="jaune">&#8827;&nbsp;&nbsp; <span class="violet1">Frama</span>code</a></li>
					<li><a href="http://www.enventelibre.org/" class="jaune">&#8827;&nbsp;&nbsp; <span class="violet1">EnVente</span>Libre</a></li>
				</ul>
			</div>                           
		</div>


       </div>

      </div>
	  
      <div class="row" class="finPseudoPage">
        <div class="col-md-2">
			<ul class="navEntities2">
				<li class="jaune2"><a href="#topPgLogiciels">lkY</a></li> 
				<li class="vert2"><a href="#topPgCulture">lkG</a></li> 
				<li class="rouge2"><a href="#topPgCloud">lkR</a></li> 
				<li class="bleu2"><a href="#topPgVrac">lkB</a></li> 
			</ul>
        </div>
      </div>
   


		<!--Contenus appelés dans le footer -->
				<div class="fade modal" id="Credits">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal">×</button>
								<h1>Crédits &amp; contacts</h1>
							</div>
							<div class="modal-body">
								<div class="section">
									<h2>&Agrave; propos</h2>
								  <div class="text">
									<p>
									  Cette page est un portail qui présente l’ensemble des activités et des sites web du réseau Framasoft.
									</p>
								   </div>
								</div>
								
								<div class="section">						
									<h2>Crédits</h2>						  
								  <div class="text">
									<p>Maquette et intégration&nbsp;: Sandra Guigonis, aka peupleLà</p>
									<p>La page d’accueil utilise le framework libre Boostrap ainsi que la librairie jQuery.</p>
								  </div>
								</div>
								
								<div class="section">
									<h2>Licence</h2>
								  <div class="text">
									<p>Sauf mention contraire, cette page et tous les contenus qui y figurent sont placés sous licence libre <a href = "http://creativecommons.org/licenses/by-sa/2.0/">Creative Commons By-SA</a></p>
								  </div>
								</div>
								
								<div class="section">
									<h2>Configuration minimale</h2>
								  <div class="text">
									<p>Vous avez besoin d’un navigateur récent supportant les fonctionnalités du HTML5 et de la CSS3.
									  Chrome 10+, Firefox 3.6+, Safari 5+, Opera 10.6+, IE9+ devraient fonctionner correctement.</p>
								  </div>	
								 </div>
								
								<div class="section">
									<h2>Contacts</h2>
									<div class="text">							
									<p>Pour toute question concernant Framasoft, vous pouvez utiliser cette page <a href="http://contact.framasoft.org">http://contact.framasoft.org</a>.</p>
									<p>&nbsp;</p>
									</div>
								</div>
							</div>
							<div class="modal-footer">
								<a href="#" class="btn btn-default" data-dismiss="modal">Fermer</a>
								</div>
							</div>
						</div>
					</div>

					<div class="modal fade" id="Mentions">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal">×</button>
								<h1>Mentions légales</h1>
								</div>
								<div class="modal-body">
								
								
									<h2>&Eacute;diteur</h2>
									<h3>Framasoft</h3>
									<p>Association loi&nbsp;1901 déclarée en sous-préfecture d’Arles le 2&nbsp;
									décembre 2003 sous le n°&nbsp;0132007842 </p>
									<p>N° Siret&nbsp;: 500 715 776 00018</p>
									<h3>Siège social</h3>
									<p>Association Framasoft<br/>
									Pierre-Yves Gosset<br/>
									c/o Locaux Motiv<br/>
									10 bis, rue Jangot<br/>
									69007 LYON</p>
									<p>Pour nous contacter&nbsp;: http://contact.framasoft.org</p>
									<h3>Directeur de la publication</h3>
									<p>Monsieur Christophe MASUTTI, Président</p>
									<h3>Hébergeur</h3>
									<p>OVH</p>
									<p>SAS au capital de 10&nbsp;000&nbsp;000&nbsp;€ RCS Roubaix – Tourcoing 424&nbsp;761&nbsp;419
								&nbsp;00045 </p>
									<p>Code APE 6202A - N° TVA : FR 22&nbsp;424&nbsp;761&nbsp;419</p>
									<p>Siège social&nbsp;: 2 rue Kellermann 59100 Roubaix - France.</p>
									<h2>INFORMATIQUE ET LIBERT&Eacute;S</h2>
									<h3>Informations personnelles collectées</h3>
									<p>En France, les données personnelles sont notamment protégées par la
									loi n°&nbsp;78-87 du 6&nbsp;janvier 1978, la loi n°&nbsp;2004-801 du 6&nbsp;août 2004,
									l’article L.&nbsp;226-13 du Code pénal et la Directive Européenne du 24
									&nbsp;octobre 1995.</p>
									<p>En tout état de cause Framasoft ne collecte des informations
									personnelles relatives à l’utilisateur (nom, adresse électronique,
									coordonnées téléphoniques) que pour le besoin des services proposés par
									les sites du réseau Framasoft, notamment pour l’inscription à des
									espaces de discussion par le biais de formulaires en ligne ou pour des
									traitements statistiques. L’utilisateur fournit ces informations en
									toute connaissance de cause, notamment lorsqu’il procède par lui-même à
									leur saisie. Il est alors précisé à l’utilisateur des sites du réseau
									Framasoft le caractère obligatoire ou non des informations qu’il serait
									amené à fournir.</p>
									<h2>Rectification des informations nominatives collectées</h2>
									<p>Conformément aux dispositions de l’article&nbsp;34 de la loi n°&nbsp;48-87 du
									6 janvier 1978, l’utilisateur dispose d’un droit de modification des
									données nominatives collectées le concernant. Pour ce faire,
									l’utilisateur envoie à Framasoft&nbsp;: </p>
									<p>° un courrier électronique en utilisant le formulaire de contact </p>
									<p>° un courrier à l’adresse du siège de l’association (indiquée
									ci-dessus) en indiquant son nom ou sa raison sociale, ses coordonnées
									physiques et/ou électroniques, ainsi que le cas échéant la référence
									dont il disposerait en tant qu’utilisateur du site Framasoft.</p>
									<p>La modification interviendra dans des délais raisonnables à compter
									de la réception de la demande de l’utilisateur.</p>
									<h2>LIMITATION DE RESPONSABILIT&Eacute;</h2>
									<p>Ce ste comporte des informations mises à disposition par des
									sociétés externes ou des liens hypertextes vers d’autres sites qui
									n’ont pas été développés par le Framasoft. Le contenu mis à disposition
									sur le Site est fourni à titre informatif. L’existence d’un lien de ce
									site vers un autre site ne constitue pas une validation de ce site ou
									de son contenu. Il appartient à l’internaute d’utiliser ces
									informations avec discernement et esprit critique. La responsabilité de
									Framasoft ne saurait être engagée du fait des informations, opinions et
									recommandations formulées par des tiers.</p>
									<p>Framasoft ne pourra être tenue responsable des dommages directs et
									indirects causés au matériel de l’utilisateur, lors de l’accès au site
									, et résultant soit de l’utilisation d’un matériel ne répondant pas aux
									spécifications techniques requises, soit de l’apparition d’un bug ou
									d’une incompatibilité.</p>
									<p>Framasoft ne pourra également être tenue responsable des dommages
									indirects (tels par exemple qu’une perte de marché ou perte d’une
									chance) consécutifs à l’utilisation du site.</p>
									<p>Des espaces interactifs (possibilité de poser des questions dans
									l’espace contact) sont à la disposition des utilisateurs sur le site
									Framasoft http://forum.framasoft.org. Framasoft se réserve le droit de
									supprimer, sans mise en demeure préalable, tout contenu déposé dans cet
									espace qui contreviendrait à la législation applicable en France, en
									particulier aux dispositions relatives à la protection des données. Le
									cas échéant, Framasoft se réserve également la possibilité de mettre en
									cause la responsabilité civile et/ou pénale de l’utilisateur, notamment
									en cas de message à caractère raciste, injurieux, diffamant, ou
									pornographique, quel que soit le support utilisé (texte, photographie…).</p>
									<h3>Limitations contractuelles sur les données techniques</h3>
									<p>Framasoft ne pourra être tenue responsable de dommages matériels
									liés à l’utilisation du site. De plus, l’utilisateur du site s’engage à
									accéder au site en utilisant un matériel récent, ne contenant pas de
									virus et avec un navigateur de dernière génération mis-à-jour</p>
									<h3>Propriété intellectuelle</h3>
									<p>Les contenus sont publiés sous la responsabilité des utilisateurs.</p>
								</div>
								<div class="modal-footer">
								<a href="#" class="btn btn-default" data-dismiss="modal">Fermer</a>
								</div>
							</div>
						</div>
					</div>

				<!--finContenus appelés dans le footer -->	

      <footer  class="footer">
        <p><a class="btn btn-default" data-toggle="modal" href="#Credits" id="topPgCommunaute"  >Contact &amp; Crédits</a> <a class="btn btn-default" data-toggle="modal" href="#Mentions" >Mentions légales</a></p>
      </footer>

    </div> <!-- /container -->
	
	
	<!-- communauté -->
	
	<div class="container" >


      <!-- Example row of columns -->
      <div class="row header">
        <div class="col-md-4">
          <h1 id="" class="sitename"><a href="#" alt="Une communauté" class="violet1">Libre communauté</a></h1>
        </div>
        <div class="col-md-4">
          <p id="headerSubTitle">Vous êtes libre ce soir&nbsp;?</p>
       </div>
        <div class="col-md-4">
			<ul class="navEntities">
				<li class="bleu1"><a href="#topPgLogiciels" data-tip="vers la rubrique logiciels">lkB</a></li> 
				<li class="rouge1"><a href="#topPgCulture" data-tip="vers la rubrique culture">lkR</a></li> 
				<li class="vert1"><a href="#topPgCloud" data-tip="vers la rubrique cloud">lkG</a></li> 
				<li class="jaune1"><a href="#topPgVrac" data-tip="vers la rubrique libr’en vrac">lkY</a></li> 
			</ul>
        </div>
      </div>
	
		<div class="row" id="contentCommunaute">
		
			<div class="col-md-4 blocCommunaute" >
				<img src="<?php echo $home_subdir; ?>img/framateam1.jpg" alt="Des pingouins en maraude" />
			</div>

			<div class="col-md-4 blocCommunaute">
				<h4 class="titreBloc">Une communauté</h4>
				<p class="miniBlocSubTitle">Un joyeux bazar</P>
				<p class="miniBlocTexte">Qui se cache derrière Framasoft&nbsp;? Tous ceux qui ont participé ou participent de près ou de loin à nos différents projets. Il suffit de vouloir promouvoir le Libre et de placer sa participation sous licence libre, garantissant qu’elle sera mise dans le pot des biens communs sans risque d’appropriation.</p>
				<p class="miniBlocLast">&nbsp;</p>		
			</div>
			
			<div class="col-md-4 blocCommunaute">
				<h4 class="titreBloc">Une association</h4>
				<p class="miniBlocSubTitle">Un peu de cathédrale</P>
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
				<img src="<?php echo $home_subdir; ?>img/framateam2.jpg" alt="Des pingouins en maraude" />
			</div>

		</div>
		
	  
      <div class="row" class="finPseudoPage">
        <div class="col-md-2">
			<ul class="navEntities2">
				<li class="jaune2"><a href="#topPgLogiciels">lkY</a></li> 
				<li class="vert2"><a href="#topPgCulture">lkG</a></li> 
				<li class="rouge2"><a href="#topPgCloud">lkR</a></li> 
				<li class="bleu2"><a href="#topPgVrac">lkB</a></li> 
			</ul>
        </div>
      </div>
      

      <footer  class="footer">
        <p><a class="btn btn-default" data-toggle="modal" href="#Credits" id="topPgLogiciels" >Contact &amp; Crédits</a> <a class="btn btn-default" data-toggle="modal" href="#Mentions" >Mentions légales</a></p>
      </footer>

    </div > <!-- /container -->


		<!-- Logiciel Libre -->
	
	    <div class="container">


      <!-- Example row of columns -->
      <div class="row header">
        <div class="col-md-4">
          <h1 id="" class="sitename bleu"><a href="#" alt="Libres logiciels" class="bleu">Libres logiciels</a></h1>
        </div>
        <div class="col-md-4">
          <p id="headerSubTitle">Liberté, égalité, fraternité</p>
       </div>
        <div class="col-md-4">
			<ul class="navEntities">
				<li class="bleu3"><a href="#topPgLogiciels" data-tip="rubrique logiciels">lkB</a></li> 
				<li class="rouge1"><a href="#topPgCulture" data-tip="vers la rubrique culture">lkR</a></li> 
				<li class="vert1"><a href="#topPgCloud" data-tip="vers la rubrique cloud">lkG</a></li> 
				<li class="jaune1"><a href="#topPgVrac" data-tip="vers la rubrique libr’en vrac">lkY</a></li> 
			</ul>
        </div>
      </div>
	
		<div class="row">
		
			<div class="col-md-8" id="presentationLogiciels">
				<h3 class="presentation">Logiciel Libre ?</h3>
				<p class="blocSubTitle">Un <a href="http://fr.wikipedia.org/wiki/Logiciel_libre" target="_blank">logiciel libre&nbsp;&#8599;</a> est un logiciel qui offre et garantit les quatre libertés suivantes&nbsp;: utilisation, étude, modification et duplication en vue de sa diffusion (gratuite ou pas).</P>
				<p class="blocTexte">Ceci est permis techniquement grâce à l’accès au <a href="http://fr.wikipedia.org/wiki/Code_source" target="_blank">code&nbsp;&#8599;</a> et légalement grâce à la <a href="http://fr.wikipedia.org/wiki/Licence_libre" target="_blank">licence libre&nbsp;&#8599;</a> qui l’accompagne. Ces <span class="smallcaps">quatre libertés</span> favorisent la transparence, la confiance, l’échange, le partage et la collaboration au sein de communautés.</p>
				<p class="blocTexte">Framasoft vous propose un annuaire, des clés USB et DVD et un installateur Windows pour les découvrir et les utiliser régulièrement.</p>				
				<p class="miniBlocLast">&nbsp;</p>
			</div>
			
			<div class="col-md-4">
				<figure id="pingouinMuseeWindows">
					<img src="<?php echo $home_subdir; ?>img/musee-windows_ll-de-mars_licence-art-libre.jpg" alt="Des pingouins en maraude" />
				</figure>
				<!--<h4 class="titreBloc">Une très joulie illustration</h4>
				<p class="miniBlocSubTitle">Par exemple encore un pingouin&nbsp.</P>
				<p class="miniBlocTexte"> Cela dit, je signale (bis) qu'il faudrait que quelqu'un se préoccupe aussi de l'iconographie du/des site(s) ^^ Vivamus nec nunc sit amet nisi accumsan ultricies interdum in purus. Maecenas rhoncus, ligula sit amet ultrices laoreet, metus quam posuere eros, ac luctus ante urna eu enim. Proin id velit odio, in (...) </p>
				<p class="miniBlocLast"><a href=""> [+] </a></p>-->
			</div>

		</div>
		
		<div class="row">
			<div class="col-md-3 miniBloc">
				<h4 class="titreBloc goTo1"><a href="http://www.framalibre.org/" class="bleu FramaTrucsLien"><span class="violet1">Frama</span>libre</a></h4>
				<p class="miniBlocSubTitle">Le gros annuaire</P>
				<p class="miniBlocTexte">Plus de 1600 logiciels classés, testés et commentés dans le projet historique et fondateur de Framasoft. On y trouve également des tutoriels et des articles de fond.</p>
				<p class="miniBlocLast"><a href=""> &nbsp; </a></p>
			</div>
			
			<div class="col-md-3 miniBloc">
				<h4 class="titreBloc goTo1"><a href="http://www.framakey.org/"class="bleu FramaTrucsLien"><span class="violet1">Frama</span>key</a></h4>
				<p class="miniBlocSubTitle">Le plein de liberté dans une simple clé</P>
				<p class="miniBlocTexte">Dans une clé USB (ou tout autre support mobile) utiliser en mode nomade une centaine de logiciels libres portables pour Windows, tester voire installer une distribution GNU/Linux ou encore avoir accès hors ligne à toute la Wikipédia francophone.</p>
				<p class="EnVenteLibre"><a href="http://enventelibre.org/catalog/par-association/framasoft" class="bleu">[€]</a></p>
			</div>
			
			<div class="col-md-3 miniBloc">
				<h4 class="titreBloc goTo1"><a href="http://www.framadvd.org/"class="bleu FramaTrucsLien"><span class="violet1">Frama</span>dvd</a></h4>
				<p class="miniBlocSubTitle">Le plein de liberté dans un DVD</P>
				<p class="miniBlocTexte">Un DVD rempli non seulement des meilleurs logiciels libres pour Windows, Mac et GNU/Linux (avec une distribution dedans) mais aussi de la culture libre (textes, photos, audios et vidéos). Existe en une version spéciale école</p>
				<p class="EnVenteLibre"><a href="http://enventelibre.org/catalog/par-association/framasoft" class="bleu">[€]</a></p>
			</div>
			
			<div class="col-md-3 miniBloc">
				<h4 class="titreBloc goTo1"><a href="http://www.framapack.org/"class="bleu FramaTrucsLien"><span class="violet1">Frama</span>pack</a></h4>
				<p class="miniBlocSubTitle">Distribution massive</P>
				<p class="miniBlocTexte">Pratique, sur Framapack on fait son marché des meilleurs logiciels libres Windows dans leur dernière version.<br>On les sélectionne et ils s’installent tous ensemble d’un simple clic&nbsp;!</p>
				<p class="miniBlocLast"><a href=""> &nbsp; </a></p>
			</div>

		</div>
		
	  
      <div class="row" class="finPseudoPage">
        <div class="col-md-2">
			<ul class="navEntities2">
				<li class="jaune4"><a href="#topPgLogiciels">lkY</a></li> 
				<li class="vert2"><a href="#topPgCulture">lkG</a></li> 
				<li class="rouge2"><a href="#topPgCloud">lkR</a></li> 
				<li class="bleu2"><a href="#topPgVrac">lkB</a></li> 
			</ul>
        </div>
      </div>
      

      <footer class="footer">
        <p><a class="btn btn-default" data-toggle="modal" href="#Credits" id="topPgCulture" >Contact &amp; Crédits</a> <a class="btn btn-default" data-toggle="modal" href="#Mentions" >Mentions légales</a></p>
      </footer>

    </div> <!-- /container -->
	
	
	<!-- Culture Libre -->
	
	    <div class="container">


      <!-- Example row of columns -->
      <div class="row header">
        <div class="col-md-4">
          <h1 id="" class="sitename rouge"><a href="#" alt="Libres cultures" class="rouge">Libres cultures</a></h1>
        </div>
        <div class="col-md-4">
          <p id="headerSubTitle">Extension du domaine du Libre</p>
       </div>
        <div class="col-md-4">
			<ul class="navEntities">
				<li class="bleu5"><a href="#topPgLogiciels" data-tip="vers la rubrique logiciels">lkB</a></li> 
				<li class="rouge3"><a href="#topPgCulture" data-tip="rubrique culture">lkR</a></li> 
				<li class="vert1"><a href="#topPgCloud" data-tip="vers la rubrique cloud">lkG</a></li> 
				<li class="jaune1"><a href="#topPgVrac" data-tip="vers la rubrique libr’en vrac">lkY</a></li> 
				
			</ul>
        </div>
      </div>
	
		<div class="row">
		
			<div class="col-md-6" id="presentationLibre">
				<div class="row">
					<h3 class="presentation">Culture Libre&nbsp;?</h3>
					<p class="blocSubTitle">Facilitée par Internet et la numérisation, la «&nbsp;<a href="http://fr.wikipedia.org/wiki/Culture_libre">culture libre&nbsp;&#8599;</a>&nbsp;» est une culture en mouvement qui s’inspire directement du logiciel libre dans sa philosophie et ses licences pour promouvoir et diffuser des œuvres de l’esprit.</P>
					<p class="blocTexte">Elle explore des domaines aussi variés que les arts, l’éducation, les sciences, le matériel... Ces œuvres peuvent alors être considérées comme des <a href="http://fr.wikipedia.org/wiki/Bien_commun">biens communs&nbsp;&#8599;</a>. L’exemple le plus emblématique est l’encyclopédie libre Wikipédia.</p>
					<p class="blocTexte">Dans ce cadre, Framasoft vous propose un blog, une maison d’édition, une plateforme vidéo, un site dédié à la musique libre ainsi qu’un service original de traduction collaborative.</p>					
					<p class="miniBlocLast"><a href=""> &nbsp; </a></p>
				</div>

				<div class="row">
				<figure id="pingouinsQuelquesBriques">
					<img src="<?php echo $home_subdir; ?>img/quelques-briques_licence-art-libre.jpg" alt="Des pingouins en maraude" />
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
						<h4 class="titreBloc goTo2"><a href="http://www.framablog.org/index.php" alt="vers Framablog" class="rouge FramaTrucsLien"><span class="violet1">Frama</span>blog</a></h4>
						<p class="miniBlocSubTitle">L’actualité du «&nbsp;Libre&nbsp;»</P>
						<p class="miniBlocTexte">Chroniques quotidiennes autour du Libre en général et du logiciel libre en particulier. De riches débats dans les commentairees, de nombreuses traductions originales et les annonces des nouveautés de l’ensemble du réseau Framasoft.</p>
						<p class="miniBlocLast"><a href=""> &nbsp; </a></p>
					</div>
					
					<div class="col-md-6 miniBloc2">
						<h4 class="titreBloc goTo2"><a href="http://framabook.org/" alt="vers Framabook" class="rouge FramaTrucsLien"><span class="violet1">Frama</span>book</a></h4>
						<p class="miniBlocSubTitle">Le pari du livre libre</P>
						<p class="miniBlocTexte">Notre maison d’édition qui comporte une vingtaine de titres autour du logiciel libre, initiation à la programmation, réflexion sur le droit d’auteur mais aussi des BD et même un roman. Un livre libre offre au lecteur les mêmes libertés qu’un logiciel libre.</p>
						<p class="EnVenteLibre"><a href="http://enventelibre.org/catalog/par-association/framasoft" class="rouge">[€]</a></p>
					</div>
					
				</div>
				
				<div class="row">
					<div class="col-md-6 miniBloc2">
						<h4 class="titreBloc goTo2"><a href="http://www.framablog.org/index.php/pages/framalang" alt="vers le wiki de Framalang" class="rouge FramaTrucsLien"><span class="violet1">Frama</span>lang</a></h4>
						<p class="miniBlocSubTitle">Traduction collaborative</P>
						<p class="miniBlocTexte">Traduire tous ensemble, principalement de l’anglais vers le français, dans la convivialité en bénéficiant de la force d’Internet et de la bonne volonté de ses habitants. Il peut s’agir d’articles, de sous-titrage et même de livres entiers&nbsp;!</p>
						<p class="miniBlocLast"><a href=""> &nbsp; </a></p>
					</div>
		
					<div class="col-md-6 miniBloc2">
						<h4 class="titreBloc goTo2"><a href="http://www.framatube.org/" alt="vers Framatube" class="rouge FramaTrucsLien"><span class="violet1">Frama</span>tube</a></h4>
						<p class="miniBlocSubTitle">Notre «&nbsp;YouTube&nbsp;» du Libre</P>
						<p class="miniBlocTexte">Vidéos en français (ou sous-titrées en français) autour du logiciel libre en particulier et du Libre en général. Interviews, conférences, documentaires, extraits télévisés… pour s’informer mais aussi informer les autres.</p>
						<p class="miniBlocLast"><a href=""> &nbsp; </a></p>
					</div>
				
				</div>

				<div class="row">
					<div class="col-md-6 miniBloc2">
						<h4 class="titreBloc goTo2"><a href="http://framazic.org/" alt="vers Framazic" class="rouge FramaTrucsLien"><span class="violet1">Frama</span>zic</a></h4>
						<p class="miniBlocSubTitle">Quand la musique est libre</P>
						<p class="miniBlocTexte">Une «&nbsp;musique libre&nbsp;» est une musique qui offre au mélomane les mêmes libertés qu’un logiciel libre. Un site dédié permettant de mieux la comprendre accompagné d’une petite sélection permettant de constater que la qualité est au rendez-vous.</p>
						<p class="miniBlocLast"><a href=""> &nbsp; </a></p>
					</div>
					
					<div class="col-md-6 miniBloc2">
						<h4 class="titreBloc goTo2"><a href="http://www.openculture.com/2010/07/the_monty_python_philosophy_football_match.html" alt="lien vers ailleurs" class="rouge FramaTrucsLien"><span class="violet1">Frama</span>cat</a></h4>
						<p class="miniBlocSubTitle">Hommage à nos héros</P>
						<figure id="nyanCat">
							<img src="<?php echo $home_subdir; ?>img/nyanCat.gif" alt="Les héros de Framasoft" />
						</figure>
						<p class="legende"> Vous n'espériez pas y échapper, non&nbsp;? Si&nbsp;?</p>
						<p class="miniBlocLast"><a href=""> &nbsp; </a></p>
					</div>
					<!-- minibloc Framavenir mis en 'attente' 
					<div class="col-md-3 miniBloc2">
						<h4 class="titreBloc goTo2"><a href="http://www.openculture.com/2010/07/the_monty_python_philosophy_football_match.html" alt="lien vers ailleurs" class="rouge FramaTrucsLien"><span class="violet1">Fram</span>avenir</a></h4>
						<p class="miniBlocSubTitle">Les friches de nos libres imaginations</P>
						<figure>
							<img src="img/superHeroPenguins.gif" alt="Les héros de Framasoft" />
						</figure>
						<p class="miniBlocTexte"> parce qu’on trouvera bien toujours un nouveau truc à inventer, un projet qui emballe nos imaginations, un truc absurde donc nécessaire (et lycée de Versailles)... (...) </p>
						<p class="miniBlocLast"><a href=""> &nbsp; </a></p>
					</div> 
					fin minibloc Framavenri-->
				
				</div>


			</div>

		</div>
			  
      <div class="row" class="finPseudoPage">
        <div class="col-md-2">
			<ul class="navEntities2">
				<li class="jaune6"><a href="#topPgLogiciels">lkY</a></li> 
				<li class="vert4"><a href="#topPgCulture">lkG</a></li> 
				<li class="rouge2"><a href="#topPgCloud">lkR</a></li> 
				<li class="bleu2"><a href="#topPgVrac">lkB</a></li> 
			</ul>
        </div>
      </div>
      

      <footer class="footer">
        <p><a class="btn btn-default" data-toggle="modal" href="#Credits" id="topPgCloud"  >Contact &amp; Crédits</a> <a class="btn btn-default" data-toggle="modal" href="#Mentions" >Mentions légales</a></p>
      </footer>

    </div> <!-- /container -->
	
	<!-- Cloud libre -->
	
	    <div class="container">


      <!-- Example row of columns -->
      <div class="row header">
        <div class="col-md-4">
          <h1 id="" class="sitename vert"><a href="#" alt="Libres services" class="vert">Libres services</a></h1>
        </div>
        <div class="col-md-4">
          <p id="headerSubTitle">Du cloud computing libre&nbsp;? c’est possible&nbsp;!</p>
       </div>
        <div class="col-md-4">
			<ul class="navEntities">
				<li class="bleu5"><a href="#topPgLogiciels" data-tip="vers la rubrique logiciels">lkB</a></li> 
				<li class="rouge5"><a href="#topPgCulture" data-tip="vers la rubrique culture">lkR</a></li> 
				<li class="vert3"><a href="#topPgCloud" data-tip="rubrique cloud">lkG</a></li> 
				<li class="jaune1"><a href="#topPgVrac" data-tip="vers la rubrique libr’en vrac">lkY</a></li> 
			</ul>
        </div>
      </div>
	
		<div class="row">
		
			<div class="col-md-6" id="presentationServices">
				<div class="row" id="blocServices">
					<h3 class="presentation">Service Libre&nbsp;?</h3>
					<p class="blocSubTitle">Nom de code&nbsp;: «&nbsp;Framacloud&nbsp;»</P>
					<p class="blocTexte">Intuitif, sans inscription et à même votre navigateur, un ensemble de services en ligne libres et respectueux de vos données personnelles.</p>
					<p class="blocTexte">On peut aussi les installer sur son propre serveur, participant à décentraliser l’Internet.</p>
					<p class="miniBlocLast">&nbsp;</p>
				</div>
				
				
			</div>
			
			<div class="col-md-6">
				<div class="row">
					<div class="col-md-6 miniBloc2">
						<h4 class="titreBloc goTo3"><a href="http://framapad.org/" alt="vers Framapad" class="vert FramaTrucsLien"><span class="violet1">Frama</span>pad</a></h4>
						<p class="miniBlocSubTitle">Éditer collaborativement</P>
						<p class="miniBlocTexte">Écrivons tous ensemble sur le même document dans une interface de rédaction collective en ligne. Aucune inscription requise, on se donne un pseudo, une couleur et on se lance&nbsp;!</p>
						<p class="miniBlocLast">&nbsp;</p>
					</div>
					
					<div class="col-md-6 miniBloc2">
						<h4 class="titreBloc goTo3"><a href="http://www.framadate.org/" alt="vers Framadate" class="vert FramaTrucsLien"><span class="violet1">Frama</span>date</a></h4>
						<p class="miniBlocSubTitle">Organiser des rendez-vous et des sondages</P>
						<p class="miniBlocTexte">Framadate c’est un peu comme Doodle mais en libre. Rien de plus simple de créer un rendez-vous ou un sondage sans inscription pour y inviter vos collaborateurs.</p>
						<p class="miniBlocLast">&nbsp;</p>
					</div>
					
				</div>


			</div>
		<div class="col-md-12">	
		<div class="row">
			<div class="col-md-3 miniBloc">
				<h4 class="titreBloc goTo3"><a href="http://www.framacalc.org/_start" alt="vers Framacalc" class="vert FramaTrucsLien"><span class="violet1">Frama</span>calc</a></h4>
				<p class="miniBlocSubTitle">Un tableur collaboratif</P>
				<p class="miniBlocTexte">Framacalc est au tableur ce que Framapad est au traitement de texte, autrement dit la possibilité d’éditer simplement et collectivement en ligne sur un même document.</p>
				<p class="miniBlocLast">&nbsp;</p>
			</div>
			
			<div class="col-md-3 miniBloc">
				<h4 class="titreBloc goTo3"><a href="http://www.framindmap.org/" alt="vers Framindmap" class="vert FramaTrucsLien"><span class="violet1">Fra</span>mindmap</a></h4>
				<p class="miniBlocSubTitle">Créer des cartes mentales</P>
				<p class="miniBlocTexte">Interface fluide et intuitive pour créer rapidement et simplement des cartes heuristiques à même votre navigateur. Pertinent en situation de brainstorming ou de prise de notes.</p>
				<p class="miniBlocLast">&nbsp;</p>
			</div>
			
			<div class="col-md-3 miniBloc">
				<h4 class="titreBloc goTo3"><a href="http://framavectoriel.org/" alt="vers Framavectoriel" class="vert FramaTrucsLien"><span class="violet1">Frama</span>vectoriel</a></h4>
				<p class="miniBlocSubTitle">Dessiner en vectoriel</P>
				<p class="miniBlocTexte">Pour créer et éditer simplement et rapidement de belles images en ligne au format ouvert SVG. Les enfants adorent&nbsp;!</p>
				<p class="miniBlocLast">&nbsp;</p>
			</div>
			
			<div class="col-md-3 miniBloc">
				<h4 class="titreBloc goTo3"><a href="http://framaphonie.org/" alt="vers Framaphonie" class="vert FramaTrucsLien"><span class="violet1">Frama</span>phonie</a></h4>
				<p class="miniBlocSubTitle">Le Libre dans des zones faiblement connectées</P>
				<p class="miniBlocTexte"> Framaphonie est un projet du réseau Framasoft qui vise à diffuser des produits libres (CD, clés USB, livres, etc) dans les zones faiblement connectées à Internet. </p>
				<p class="miniBlocLast">&nbsp;</p>
			</div>

		</div>
		</div>

		</div>
			  
      <div class="row" class="finPseudoPage">
        <div class="col-md-2">
			<ul class="navEntities2">
				<li class="jaune6"><a href="#topPgLogiciels">lkY</a></li> 
				<li class="vert6"><a href="#topPgCulture">lkG</a></li> 
				<li class="rouge4"><a href="#topPgCloud">lkR</a></li> 
				<li class="bleu2"><a href="#topPgVrac">lkB</a></li> 
			</ul>
        </div>
      </div>
      

      <footer  class="footer">
        <p><a class="btn btn-default" data-toggle="modal" href="#Credits" id="topPgVrac">Contact &amp; Crédits</a> <a class="btn btn-default" data-toggle="modal" href="#Mentions" >Mentions légales</a></p>
      </footer>

    </div> <!-- /container -->

	<!-- Vrac Libre -->
	
	    <div class="container">


      <!-- Example row of columns -->
      <div class="row header">
        <div class="col-md-4">
          <h1 id="" class="sitename jaune"><a href="#" alt="Les projets transversaux" class="jaune">Libr’en Vrac</a></h1>
        </div>
        <div class="col-md-4">
          <p id="headerSubTitle">Inclassables mais non mal classés&nbsp;!</p>
       </div>
        <div class="col-md-4">
			<ul class="navEntities">
				<li class="bleu5"><a href="#topPgLogiciels" data-tip="vers la rubrique logiciels">lkB</a></li> 
				<li class="rouge5"><a href="#topPgCulture" data-tip="vers la rubrique culture">lkR</a></li> 
				<li class="vert5"><a href="#topPgCloud" data-tip="vers la rubrique cloud">lkG</a></li> 
				<li class="jaune3"><a href="#topPgVrac" data-tip="rubrique libr’en vrac">lkY</a></li> 				
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
				<p class="miniBlocSubTitle">GéGé, Geektionnerd generator</P>
				<figure id="GeGeGenerator">
					<a href="http://framalab.org/gknd-creator/" alt="vers le générateur de Geektionnerd"><img src="<?php echo $home_subdir; ?>img/GeGeGenerator.jpg" alt="Gégé, Geektionnerd generator" /></a>
				</figure>
				<p class="legende"> 
					Cadeau&nbsp;: le geektionnerd à faire soi-même
				</p>
			</div>

		</div>
		
		<div class="row">
			<div class="col-md-3 miniBloc">
				<h4 class="titreBloc goTo4"><a href="http://framalab.org/" class="jaune FramaTrucsLien"><span class="violet1">Frama</span>lab</a></h4>
				<p class="miniBlocSubTitle">Le laboratoire des projets Framasoft</P>
				<p class="miniBlocTexte">C’est ici que nous déposons les projets modestes, dans nos cartons, en cours ou en attente de bonnes volontés. On peut y trouver des belles suprises.</p>
				<p class="miniBlocLast">&nbsp;</p>
			</div>
			
			<div class="col-md-3 miniBloc">
				<h4 class="titreBloc goTo4"><a href="http://forum.framasoft.org/"class="jaune FramaTrucsLien"><span class="violet1">Fram</span>agora</a></h4>
				<p class="miniBlocSubTitle">Le forum du réseau Framasoft<P>
				<p class="miniBlocTexte">Vous avez une question&nbsp;? Nous avons (peut-être) une réponse&nbsp;! «&nbsp;Si tu ne sais pas, demande. Si tu sais, partage.&nbsp;» Framagora est notre convivial espace d’échange d’informations autour du Libre.</p>
				<p class="miniBlocLast">&nbsp;</p>
			</div>
			
			<div class="col-md-3 miniBloc">
				<h4 class="titreBloc goTo4"><a href="https://github.com/framasoft" class="jaune FramaTrucsLien"><span class="violet1">Frama</span>code</a></h4>
				<p class="miniBlocSubTitle">Chez nous aussi on développe</P>
				<p class="miniBlocTexte">Le dépôt GitHub du code produit par Framasoft, en particulier les services libres Framacloud pour les installer soi-même et les améliorer ensemble.</p>
				<p class="miniBlocLast">&nbsp;</p>
			</div>
			
			<div class="col-md-3 miniBloc">
				<h4 class="titreBloc goTo4"><a href="http://www.enventelibre.org/"class="jaune FramaTrucsLien"><span class="violet1">EnVente</span>libre</a></h4>
				<p class="miniBlocSubTitle">Notre libre petite boutique</P>
				<p class="miniBlocTexte">L’espace vente des différents produits Framasoft qui peuvent se matérialiser&nbsp;: Framakey, Framabook, Framadvd mais aussi des goodies et des tee-shirts.</p>
				<p class="miniBlocLast">&nbsp;</p>
			</div>

		</div>
		
	  
      <div class="row" class="finPseudoPage">
        <div class="col-md-2">
			<ul class="navEntities2">
				<li class="jaune6"><a href="#topPgLogiciels">lkY</a></li> 
				<li class="vert6"><a href="#topPgCulture">lkG</a></li> 
				<li class="rouge6"><a href="#topPgCloud">lkR</a></li> 
				<li class="bleu4"><a href="#topPgVrac">lkB</a></li> 
			</ul>
        </div>
      </div>
      

      <footer id="" class="footer">
        <p><a class="btn btn-default" data-toggle="modal" href="#Credits" >Contact &amp; Crédits</a> <a class="btn btn-default" data-toggle="modal" href="#Mentions" >Mentions légales</a></p>
      </footer>

    </div> <!-- /container -->
  </body>
</html>
