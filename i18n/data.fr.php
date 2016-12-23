<?php

$dir = "/accueil/";

/*
 * $l = lien
 * $t = texte
 * $s = framasites
 *
 * 't' = texte
 * 'l' = lien
 * 'c' = couleur
 * 'd' = description/sous-titre
 * 'i' = icône/image
 * 'h' = titre
 */

// Liens
$l['F']          = 'https://framasoft.org';
$l['S']          = 'https://soutenir.framasoft.org';
$l['DIo']        = 'https://degooglisons-internet.org';
$l['DIoL']       = $l['DIo'].'/liste';

$l['nav']        = 'https://framasoft.org/nav/';
$l['navJS']      = $l['nav'].'nav.js';
$l['Charte']     = $l['nav'].'html/charte.html';
$l['bsCSS']      = $l['nav'].'lib/bootstrap/css/bootstrap.min.css';
$l['bsJS']       = $l['nav'].'lib/bootstrap/js/bootstrap.min.js';
$l['jQuery']     = $l['nav'].'lib/jquery/jquery.min.js';
$l['favicon']    = $l['nav'].'img/icons/favicon-violet.png';
$l['faCSS']      = $l['nav'].'lib/font-awesome/css/font-awesome.min.css';
$l['fsCSS']      = $dir.'css/framasoft.css';

$l['contact']    = 'https://contact.framasoft.org';
$l['participer'] = $l['contact'].'/participer';
$l['evl']        = 'http://www.enventelibre.org/40-framasoft';
$l['cloud']      = 'http://framacloud.org';
$l['LabGeGe']    = 'https://framalab.org/gknd-creator/';

// Images
$l['pinchot']       = $dir.'img/pingouinVolantRefait.png';
$l['team1']         = $dir.'img/framateam1.jpg';
$l['team2']         = $dir.'img/framateam2.jpg';
$l['museeWindows']  = $dir.'img/musee-windows_ll-de-mars_licence-art-libre.jpg';
$l['briques']       = $dir.'img/quelques-briques_licence-art-libre.jpg';
$l['dioStallman']   = $dir.'img/stallmanoramix.png';
$l['dioCarte']      = $dir.'img/carte_petite.png';
$l['dioVillage']    = $dir.'img/village.png';
$l['dioFight']      = $dir.'img/fight.png';
$l['GeGe']          = $dir.'img/GeGeGenerator.jpg';

// Meta
$t['meta']['lang']      = 'fr';
$t['meta']['title']     = 'Framasoft ~ Page portail du réseau';
$t['meta']['framasoft'] = 'Framasoft';
$t['meta']['F']         = '<a href="'.$l['F'].'"><b class="violet">Frama</b><b class="orange">soft</b></a>';
$t['meta']['slogan']    = 'La route est longue mais la voie est libre…';
$t['meta']['desc']      = 'Association française de loi 1901, issue du monde éducatif, Framasoft est un réseau
                           d’éducation populaire consacré principalement au logiciel libre.
                           Le réseau s’organise en trois axes sur un mode collaboratif :
                           promotion, diffusion et développement de logiciels libres, enrichissement de la culture libre.
                           Il offre également des services libres en ligne.
                           La page portail du réseau présente l’ensemble des activités de Framasoft et
                           propose des liens vers les différents sites et activités du réseau.';
$t['meta']['keywords']  = 'Framasoft, logiciels libres, logiciels libres et open source, culture libre, FOSS, promotion et diffusion des logiciels libres, open source';
$t['meta']['license']   = 'Creative Commons-By-SA sauf mention contraire';

$t['salaries']['n'] = '6'; $t['salaries']['t'] = 'six';

$t['evl'] = 'En Vente Libre';

// Sites
$c = 'orange';
$k = 'DIo'; $s[$k]['c'] = $c;
$s[$k]['l']  = $l['DIo'];
$s[$k]['t']  = '<b class="violet">Dégooglisons</b> <b class="'.$c.'">Internet</b>';
$s[$k]['d']  = '';
$s[$k]['i']  = 'fa-shield';

// Logiciels
$c = 'bleu';
$k = 'libre'; $s[$k]['c'] = $c;
$s[$k]['l']  = 'http://framalibre.org';
$s[$k]['t']  = '<b class="violet">Frama</b><b class="'.$c.'">libre</b>';
$s[$k]['d']  = 'Un annuaire';
$s[$k]['i']  = 'fa-linux';
$s[$k]['pd'] = 'Le gros annuaire';
$s[$k]['pt'] = 'Plus de 1600 logiciels classés, testés et commentés dans
                le projet historique et fondateur de Framasoft.
                On y trouve également des tutoriels et des articles de fond.';

$k = 'key'; $s[$k]['c'] = $c;
$s[$k]['l']  = 'https://framakey.org';
$s[$k]['t']  = '<b class="violet">Frama</b><b class="'.$c.'">key</b>';
$s[$k]['d']  = 'Une clé USB';
$s[$k]['i']  = 'fa-usb';
$s[$k]['pd'] = 'Le plein de liberté dans une simple clé';
$s[$k]['pt'] = 'Dans une clé USB (ou tout autre support mobile) utiliser
                en mode nomade une centaine de logiciels libres portables
                pour Windows, tester voire installer une distribution
                GNU/Linux ou encore avoir accès hors ligne à toute la
                Wikipédia francophone.';

$k = 'dvd'; $s[$k]['c'] = $c;
$s[$k]['l']  = 'http://framadvd.org';
$s[$k]['t']  = '<b class="violet">Frama</b><b class="'.$c.'">dvd</b>';
$s[$k]['d']  = 'Un DVD';
$s[$k]['i']  = 'fa-play-circle-o';
$s[$k]['pd'] = 'Le plein de liberté dans un DVD';
$s[$k]['pt'] = 'Un DVD rempli non seulement des meilleurs logiciels
                libres pour Windows, Mac et GNU/Linux (avec une distribution dedans)
                mais aussi de la culture libre (textes, photos, audios et vidéos).
                Existe en une version spéciale école';

$k = 'pack'; $s[$k]['c'] = $c;
$s[$k]['l']  = 'http://framapack.org';
$s[$k]['t']  = '<b class="violet">Frama</b><b class="'.$c.'">pack</b>';
$s[$k]['d']  = 'Un distributeur';
$s[$k]['i']  = 'fa-download';
$s[$k]['pd'] = 'Distribution massive';
$s[$k]['pt'] = 'Pratique, sur Framapack on fait son marché des meilleurs
                logiciels libres Windows dans leur dernière version.<br>
                On les sélectionne et ils s’installent tous ensemble
                d’un simple clic !';

// Culture
$c = 'rouge';
$k = 'blog'; $s[$k]['c'] = $c;
$s[$k]['l']  = 'https://framablog.org';
$s[$k]['t']  = '<b class="violet">Frama</b><b class="'.$c.'">blog</b>';
$s[$k]['d']  = 'Des infos';
$s[$k]['i']  = 'fa-pencil';
$s[$k]['pd'] = 'L’actualité du « Libre »';
$s[$k]['pt'] = 'Chroniques quotidiennes autour du Libre en général et du
                logiciel libre en particulier. De riches débats dans les
                commentaires, de nombreuses traductions originales et
                les annonces des nouveautés de l’ensemble du réseau Framasoft.';

$k = 'book'; $s[$k]['c'] = $c;
$s[$k]['l']  = 'http://framabook.org';
$s[$k]['t']  = '<b class="violet">Frama</b><b class="'.$c.'">book</b>';
$s[$k]['d']  = 'Des livres…';
$s[$k]['i']  = 'fa-book';
$s[$k]['pd'] = 'Le pari du livre libre';
$s[$k]['pt'] = 'Notre maison d’édition qui comporte une vingtaine de
                titres autour du logiciel libre, initiation à la
                programmation, réflexion sur le droit d’auteur mais
                aussi des BD et même un roman. Un livre libre offre au
                lecteur les mêmes libertés qu’un logiciel libre.';

$k = 'bookin'; $s[$k]['c'] = $c;
$s[$k]['l']  = 'http://framabookin.org';
$s[$k]['t']  = '<b class="violet">Frama</b><b class="'.$c.'">bookin</b>';
$s[$k]['d']  = '…et une bibliothèque';
$s[$k]['i']  = 'fa-coffee';
$s[$k]['pd'] = 'Une bibliothèque numérique libre';
$s[$k]['pt'] = 'Notre bibliothèque contient quelques centaines d’ouvrages
                libres ou du domaine public. Elle est consultable en ligne
                sur les plateformes mobiles. Vous pouvez l’ajouter
                directement une application de lecture d’ebook grâce au
                flux <abbr>OPDS</abbr>.';

$k = 'lang'; $s[$k]['c'] = $c;
$s[$k]['l']  = 'https://participer.framasoft.org/traduction-rejoignez-framalang/';
$s[$k]['t']  = '<b class="violet">Frama</b><b class="'.$c.'">lang</b>';
$s[$k]['d']  = 'Des traductions';
$s[$k]['i']  = 'fa-language';
$s[$k]['pd'] = 'Traduction collaborative';
$s[$k]['pt'] = 'Traduire tous ensemble, principalement de l’anglais vers
                le français, dans la convivialité en bénéficiant de la
                force d’Internet et de la bonne volonté de ses habitants.
                Il peut s’agir d’articles, de sous-titrage et même de
                livres entiers !';

$k = 'tube'; $s[$k]['c'] = $c;
$s[$k]['l']  = 'https://framatube.org';
$s[$k]['t']  = '<b class="violet">Frama</b><b class="'.$c.'">tube</b>';
$s[$k]['d']  = 'Des vidéos';
$s[$k]['i']  = 'fa-film';
$s[$k]['pd'] = 'Notre « YouTube » du Libre';
$s[$k]['pt'] = 'Vidéos en français (ou sous-titrées en français) autour
                du logiciel libre en particulier et du Libre en général.
                Interviews, conférences, documentaires, extraits télévisés…
                pour s’informer mais aussi informer les autres.';

$k = 'zic'; $s[$k]['c'] = $c;
$s[$k]['l']  = 'http://framazic.org';
$s[$k]['t']  = '<b class="violet">Frama</b><b class="'.$c.'">zic</b>';
$s[$k]['d']  = 'De la musique';
$s[$k]['i']  = 'fa-music';
$s[$k]['pd'] = 'Quand la musique est libre';
$s[$k]['pt'] = 'Une « musique libre » est une musique qui offre au
                mélomane les mêmes libertés qu’un logiciel libre.
                Un site dédié permettant de mieux la comprendre accompagné
                d’une petite sélection permettant de constater que la
                qualité est au rendez-vous.';

// Services
$c = 'vert';
$k = 'pad'; $s[$k]['c'] = $c;
$s[$k]['l']  = 'https://framapad.org';
$s[$k]['t']  = '<b class="violet">Frama</b><b class="'.$c.'">pad</b>';
$s[$k]['d']  = 'Éditer';
$s[$k]['i']  = 'fa-align-left';
$s[$k]['pd'] = 'Éditer collaborativement';
$s[$k]['pt'] = 'Écrivons tous ensemble sur le même document dans une
                interface de rédaction collective en ligne.
                Aucune inscription requise, on se donne un pseudo,
                une couleur et on se lance !';

$k = 'calc'; $s[$k]['c'] = $c;
$s[$k]['l']  = 'https://framacalc.org';
$s[$k]['t']  = '<b class="violet">Frama</b><b class="'.$c.'">calc</b>';
$s[$k]['d']  = 'Calculer';
$s[$k]['i']  = 'fa-th';
$s[$k]['pd'] = 'Un tableur collaboratif';
$s[$k]['pt'] = 'Framacalc est au tableur ce que Framapad est au
                traitement de texte, autrement dit la possibilité
                d’éditer simplement et collectivement en ligne
                sur un même document.';

$k = 'forms'; $s[$k]['c'] = $c;
$s[$k]['l']  = 'https://framaforms.org';
$s[$k]['t']  = '<b class="violet">Frama</b><b class="'.$c.'">forms</b>';
$s[$k]['d']  = 'Enquêter';
$s[$k]['i']  = 'fa-list-ul';
$s[$k]['pd'] = 'Création de questionnaires';
$s[$k]['pt'] = 'Framaforms vous permet de créer les questionaires dont
                vous avez besoin, que ce soit dans un cadre scolaire,
                familial ou associatif. Créez vos questions en fonction
                de vos besoins, des formulaires à choix multiples aux
                champs de texte libre.';

$k = 'agenda'; $s[$k]['c'] = $c;
$s[$k]['l']  = 'https://framagenda.org';
$s[$k]['t']  = '<b class="violet">Fram</b><b class="'.$c.'">agenda</b>';
$s[$k]['d']  = 'Organiser';
$s[$k]['i']  = 'fa-calendar';
$s[$k]['pd'] = 'Agenda partagé';
$s[$k]['pt'] = 'Avec Framagenda vous pouvez créer des agendas personnels,
                professionnels, le planning d´une salle ou des activités
                de votre organisation, et les partager librement.
                Vous restez maîtres de vos données, et vous choisissez
                auprès de qui, où et quand elles s´affichent.';

$k = 'date'; $s[$k]['c'] = $c;
$s[$k]['l']  = 'https://framadate.org';
$s[$k]['t']  = '<b class="violet">Frama</b><b class="'.$c.'">date</b>';
$s[$k]['d']  = '<span class="sr-only">Organiser</span>';
$s[$k]['i']  = 'fa-calendar-check-o';
$s[$k]['pd'] = 'Organiser des rendez-vous et des sondages';
$s[$k]['pt'] = 'Framadate c’est un peu comme Doodle mais en libre.
                Rien de plus simple de créer un rendez-vous ou un sondage
                sans inscription pour y inviter vos collaborateurs.';

$k = 'board'; $s[$k]['c'] = $c;
$s[$k]['l']  = 'https://framaboard.org';
$s[$k]['t']  = '<b class="violet">Frama</b><b class="'.$c.'">board</b>';
$s[$k]['d']  = '<span class="sr-only">Organiser</span>';
$s[$k]['i']  = 'fa-dashboard';
$s[$k]['pd'] = 'Gérer des projets';
$s[$k]['pt'] = 'Framaboard est un gestionnaire collaboratif de tâches
                et de projets, en suivant la méthode Kanban.
                Son système visuel permet de s’y retrouver au premier
                coup d’œil, quelle que soit votre habitude à utiliser
                ce genre d’outil.';

$k = 'mindmap'; $s[$k]['c'] = $c;
$s[$k]['l']  = 'https://framindmap.org';
$s[$k]['t']  = '<b class="violet">Fra</b><b class="'.$c.'">mindmap</b>';
$s[$k]['d']  = 'Structurer';
$s[$k]['i']  = 'fa-sitemap';
$s[$k]['pd'] = 'Créer des cartes mentales';
$s[$k]['pt'] = 'Interface fluide et intuitive pour créer rapidement et
                simplement des cartes heuristiques à même votre navigateur.
                Pertinent en situation de brainstorming ou de prise de notes.';

$k = 'vectoriel'; $s[$k]['c'] = $c;
$s[$k]['l']  = 'http://framavectoriel.org';
$s[$k]['t']  = '<b class="violet">Frama</b><b class="'.$c.'">vectoriel</b>';
$s[$k]['d']  = 'Dessiner';
$s[$k]['i']  = 'fa-paint-brush';
$s[$k]['pd'] = 'Dessiner en vectoriel';
$s[$k]['pt'] = 'Pour créer et éditer simplement et rapidement de belles
                images en ligne au format ouvert SVG. Les enfants adorent !';

$k = 'bee'; $s[$k]['c'] = $c;
$s[$k]['l']  = 'https://framabee.org';
$s[$k]['t']  = '<b class="violet">Frama</b><b class="'.$c.'">bee</b>';
$s[$k]['d']  = 'Rechercher';
$s[$k]['i']  = 'fa-search';
$s[$k]['pd'] = 'Le moteur qui butine les internets pour vous';
$s[$k]['pt'] = 'Framabee est un meta-moteur de recherche libre et anonyme.
                Vos recherches effectuées au travers de ce moteur sont envoyées
                à différents moteurs avant d’être affichées dans votre navigateur.
                L’intérêt ? Notre moteur est alors un intermédiaire entre
                vous et Google (et autres), ainsi vos données personnelles
                (adresse IP, historique de vos recherches, géolocalisation, profil)
                ne sont pas enregistrées chez eux.';

$k = 'sphere'; $s[$k]['c'] = $c;
$s[$k]['l']  = 'https://framasphere.org';
$s[$k]['t']  = '<b class="violet">Frama</b><b class="'.$c.'">sphère</b>';
$s[$k]['d']  = 'Réseauter';
$s[$k]['i']  = 'fa-asterisk';
$s[$k]['pd'] = 'Le réseau social libre';
$s[$k]['pt'] = 'Framasphère est un réseau social libre, basé sur le
                logiciel décentralisé Diaspora*.
                Retrouvez vos amis sur Framasphère - ou d’autres pods Diaspora* -
                et échangez avec eux sans être pisté.';

$k = 'team'; $s[$k]['c'] = $c;
$s[$k]['l']  = 'https://framateam.org';
$s[$k]['t']  = '<b class="violet">Frama</b><b class="'.$c.'">team</b>';
$s[$k]['d']  = 'Discuter';
$s[$k]['i']  = 'fa-comments-o';
$s[$k]['pd'] = 'Communication collaborative';
$s[$k]['pt'] = 'Framateam est un service de <b>tchat</b> libre
                qui permet de communiquer avec son équipe en notifiant ses collègues,
                de conserver ses conversations et d’y faire des recherches.';

$k = 'listes'; $s[$k]['c'] = $c;
$s[$k]['l']  = 'https://framalistes.org';
$s[$k]['t']  = '<b class="violet">Frama</b><b class="'.$c.'">listes</b>';
$s[$k]['d']  = '<span class="sr-only">Discuter</span>';
$s[$k]['i']  = 'fa-group';
$s[$k]['pd'] = 'Liste de diffusion';
$s[$k]['pt'] = 'Framalistes vous permet de créer des liste de diffusion
                emails : toute personne s´abonnant à votre liste pourra
                recevoir les emails qui y sont envoyés, et y participer
                à son tour. À vous de choisir si cette liste est
                publique, semi-privée ou privée.';

$k = 'talk'; $s[$k]['c'] = $c;
$s[$k]['l']  = 'https://framatalk.org';
$s[$k]['t']  = '<b class="violet">Frama</b><b class="'.$c.'">talk</b>';
$s[$k]['d']  = '<span class="sr-only">Discuter</span>';
$s[$k]['i']  = 'fa-video-camera';
$s[$k]['pd'] = 'Visioconférence';
$s[$k]['pt'] = 'Framatalk vous permet de discuter avec vos amis sans
                installation complexe de logiciel ni inscription.
                Tout se passe entre vous et vos amis, directement depuis
                votre navigateur web.';

$k = 'vox'; $s[$k]['c'] = $c;
$s[$k]['l']  = 'https://framavox.org';
$s[$k]['t']  = '<b class="violet">Frama</b><b class="'.$c.'">vox</b>';
$s[$k]['d']  = 'Décider';
$s[$k]['i']  = 'fa-bullhorn';
$s[$k]['pd'] = 'Prise de décision';
$s[$k]['pt'] = 'Framavox vous aide à prendre des décisions communautaires.
                Discutez, échangez, mettez-vous d’accord et passez à l’action,
                le tout dans les délais que vous vous êtes fixés au départ.';

$k = 'memo'; $s[$k]['c'] = $c;
$s[$k]['l']  = 'https://framemo.org';
$s[$k]['t']  = '<b class="violet">Fra</b><b class="'.$c.'">memo</b>';
$s[$k]['d']  = 'Cogiter';
$s[$k]['i']  = 'fa-object-group';
$s[$k]['pd'] = 'Organisation d’idées';
$s[$k]['pt'] = 'Framemo vous permet de créer un tableau à colonnes où quiconque peut venir y déposer des notes colorées.
                Tel Framapad, aucune inscription n´est requise, les modifications se voient et sont enregistrées en direct.';

$k = 'notes'; $s[$k]['c'] = $c;
$s[$k]['l']  = 'https://framanotes.org';
$s[$k]['t']  = '<b class="violet">Frama</b><b class="'.$c.'">notes</b>';
$s[$k]['d']  = 'Noter';
$s[$k]['i']  = 'fa-sticky-note';
$s[$k]['pd'] = 'Prise de notes';
$s[$k]['pt'] = 'Avec Framanotes vous pouvez prendre et conserver des notes, images, liens… et même des fichiers ; et les synchroniser avec tous vos appareils (voire les partager avec des ami⋅e⋅s).';


$k = 'bag'; $s[$k]['c'] = $c;
$s[$k]['l']  = 'https://framabag.org';
$s[$k]['t']  = '<b class="violet">Frama</b><b class="'.$c.'">bag</b>';
$s[$k]['d']  = 'Suivre l’actualité';
$s[$k]['i']  = 'fa-briefcase';
$s[$k]['pd'] = 'Ne ratez plus aucun article !';
$s[$k]['pt'] = 'Framabag vous permet de mettre de côté les articles
                que vous n’avez pas le temps de lire tout de suite.';

$k = 'news'; $s[$k]['c'] = $c;
$s[$k]['l']  = 'https://framanews.org';
$s[$k]['t']  = '<b class="violet">Frama</b><b class="'.$c.'">news</b>';
$s[$k]['d']  = '<span class="sr-only">Suivre l’actualité</span>';
$s[$k]['i']  = 'fa-newspaper-o';
$s[$k]['pd'] = 'Suivre l’actualité';
$s[$k]['pt'] = 'En vous abonnant aux flux RSS de vos sites préférés,
                restez informés de toutes leurs actualités avec Framanews !';

$k = 'carte'; $s[$k]['c'] = $c;
$s[$k]['l']  = 'https://framacarte.org';
$s[$k]['t']  = '<b class="violet">Frama</b><b class="'.$c.'">carte</b>';
$s[$k]['d']  = 'Cartographier';
$s[$k]['i']  = 'fa-map';
$s[$k]['pd'] = 'Créer des cartes personnalisées';
$s[$k]['pt'] = 'Framacarte vous permet de dessiner, marquer, colorier,
                annoter… les fonds de carte
                d’<a href="https://fr.wikipedia.org/wiki/Openstreetmap">OpenStreetMap</a>
                pour les afficher ensuite dans votre site web ou les imprimer.';

$k = 'games'; $s[$k]['c'] = $c;
$s[$k]['l']  = 'http://framagames.org';
$s[$k]['t']  = '<b class="violet">Frama</b><b class="'.$c.'">games</b>';
$s[$k]['d']  = 'Jouer';
$s[$k]['i']  = 'fa-gamepad';
$s[$k]['pd'] = 'Jouer en ligne ou déconnecté';
$s[$k]['pt'] = 'Framagames est une compilation de jeux libres qui se
                jouent en ligne, se téléchargent sur son PC, sa tablette…
                et ne nécessitent aucune installation supplémentaire.';

$k = 'minetest'; $s[$k]['c'] = $c;
$s[$k]['l']  = 'https://framinetest.org';
$s[$k]['t']  = '<b class="violet">Fra</b><b class="'.$c.'">minetest</b>';
$s[$k]['d']  = '<span class="sr-only">Jouer</span>';
$s[$k]['i']  = 'fa-cube';
$s[$k]['pd'] = 'Le jeu éducatif à creuser';
$s[$k]['pt'] = 'Framinetestest un serveur du jeu Minetest, un jeu « bac à sable »
                dont vous construisez et décomposez les blocs pour le modifier et
                avec lequel vous pouvez réaliser vos propres applications pédagogiques.';

$k = 'drop'; $s[$k]['c'] = $c;
$s[$k]['l']  = 'https://framadrop.org';
$s[$k]['t']  = '<b class="violet">Frama</b><b class="'.$c.'">drop</b>';
$s[$k]['d']  = 'Partager';
$s[$k]['i']  = 'fa-send';
$s[$k]['pd'] = 'Partager des fichiers anonymement';
$s[$k]['pt'] = 'Avec Framadrop, fini les pièces jointes trop lourdes qui
                empêchent l’envoi d’un <span lang="en">email</span>.
                Ce service libre vous permet de partager facilement des
                fichiers de manière sécurisé.';

$k = 'bin'; $s[$k]['c'] = $c;
$s[$k]['l']  = 'https://framabin.org';
$s[$k]['t']  = '<b class="violet">Frama</b><b class="'.$c.'">bin</b>';
$s[$k]['d']  = '<span class="sr-only">Partager</span>';
$s[$k]['i']  = 'fa-paste';
$s[$k]['pd'] = 'Transmettre des données chiffrées';
$s[$k]['pt'] = 'Avec Framabin, vous pouvez partager des informations que
                seuls vous et votre correspondant aurez le pouvoir de
                déchiffrer, et ceci de manière très simple.';

$k = 'pic'; $s[$k]['c'] = $c;
$s[$k]['l']  = 'https://framapic.org';
$s[$k]['t']  = '<b class="violet">Frama</b><b class="'.$c.'">pic</b>';
$s[$k]['d']  = '<span class="sr-only">Partager</span>';
$s[$k]['i']  = 'fa-photo';
$s[$k]['pd'] = 'Partager des images anonymement';
$s[$k]['pt'] = 'Framapic vous permet de partager facilement des images,
                par exemple pour les publier sur Twitter, Facebook,
                ou … Framasphère !';

$k = 'link'; $s[$k]['c'] = $c;
$s[$k]['l']  = 'https://frama.link';
$s[$k]['t']  = '<b class="violet">Frama</b><b class="'.$c.'">link</b>';
$s[$k]['d']  = '<span class="sr-only">Partager</span>';
$s[$k]['i']  = 'fa-link';
$s[$k]['pd'] = 'Réduire des liens';
$s[$k]['pt'] = 'Avec Frama.link, il est possible de raccourcir des
                adresses web trop longues. Sur les réseaux sociaux et
                le microblogging, un lien raccourci permet d’économiser
                de l’espace et gagner en clarté.';

$k = 'drive'; $s[$k]['c'] = $c;
$s[$k]['l']  = 'https://framadrive.org';
$s[$k]['t']  = '<b class="violet">Frama</b><b class="'.$c.'">drive</b>';
$s[$k]['d']  = 'Stocker';
$s[$k]['i']  = 'fa-cloud-upload';
$s[$k]['pd'] = 'Héberger ses documents en ligne';
$s[$k]['pt'] = 'Framadrive vous permet de stocker vos documents en ligne,
                de les synchroniser sur vos ordinateurs, mobiles, etc…
                et de les partager avec qui vous voulez.';

$k = 'git'; $s[$k]['c'] = $c;
$s[$k]['l']  = 'https://framagit.org';
$s[$k]['t']  = '<b class="violet">Frama</b><b class="'.$c.'">git</b>';
$s[$k]['d']  = 'Coder';
$s[$k]['i']  = 'fa-git';
$s[$k]['pd'] = 'Héberger du code libre';
$s[$k]['pt'] = 'Framagit est un outil qui s’adresse avant tout aux développeurs.
                Il permet d’héberger vos projets de logiciels libres et
                de travailler collaborativement dessus.';

$k = 'my'; $s[$k]['c'] = $c;
$s[$k]['l']  = 'https://my.framasoft.org';
$s[$k]['t']  = '<b class="violet">My</b><b class="'.$c.'">Frama</b>';
$s[$k]['d']  = '<span class="sr-only">Stocker</span>';
$s[$k]['i']  = 'fa-star';
$s[$k]['pd'] = 'Marque-pages';
$s[$k]['pt'] = 'MyFrama est un petit fourre-tout numérique, qui vous
                permet de conserver et retrouver les liens que vous aimez
                à la manière de del.ico.us ! Avec un système d´étiquettes
                et de tri automatique, vous pouvez ranger aisément vos
                onglets et marque-pages, et utiliser le bouton MyFrama
                pour retrouver les services Framasoft que vous utilisez !';

$c ='jaune';
$k = 'agora'; $s[$k]['c'] = $c;
$s[$k]['l']  = 'https://forum.framasoft.org';
$s[$k]['t']  = '<b class="violet">Fram</b><b class="'.$c.'">agora</b>';
$s[$k]['d']  = 'Un forum';
$s[$k]['i']  = 'fa-comment';
$s[$k]['pd'] = 'Le forum du réseau Framasoft';
$s[$k]['pt'] = 'Vous avez une question ? Nous avons (peut-être) une réponse !
                « Si tu ne sais pas, demande. Si tu sais, partage. »
                Framagora est notre convivial espace d’échange
                d’informations autour du Libre.';

$k = 'evl'; $s[$k]['c'] = $c;
$s[$k]['l']  = 'http://enventelibre.org';
$s[$k]['t']  = '<b class="violet">EnVente</b><b class="'.$c.'">Libre</b>';
$s[$k]['d']  = 'Une boutique';
$s[$k]['i']  = 'fa-shopping-cart';
$s[$k]['pd'] = 'Notre libre petite boutique';
$s[$k]['pt'] = 'L’espace vente des différents produits Framasoft qui
                peuvent se matérialiser : Framakey, Framabook, Framadvd
                mais aussi des goodies et des tee-shirts.';

foreach ($s as $k => $v) {
    $s[$k]['a'] = '<a href="'.$s[$k]['l'].'">'.$s[$k]['t'].'</a>';
}

// Carousel
$t['carousel']['play']  = 'Lecture';
$t['carousel']['pause'] = 'Pause';
$t['carousel']['prev']  = 'Diapo précédente';
$t['carousel']['next']  = 'Diapo suivante';

$t['slide'][0]['l'] = 'https://framablog.org/2016/10/03/degooglisons-saison-3-30-services-alternatifs-aux-produits-de-google-co/';
$t['slide'][0]['i'] = $dir.'img/slide-degooglisons-internet.png';
$t['slide'][0]['d'] = '<b class="violet">Dégooglisons</b> <b class="orange">Internet</b> saison 3 : six nouveaux services.';

$t['slide'][1]['l'] = 'https://framablog.org/2016/10/03/framalistes-vos-groups-nont-plus-a-appartenir-a-google/';
$t['slide'][1]['i'] = $dir.'img/slide-framalistes.jpg';
$t['slide'][1]['d'] = $s['listes']['t'].' : n’offrez plus vos Groups (d’email) à Google !';

$t['slide'][2]['l'] = 'https://framablog.org/2016/10/04/framanotes-vos-notes-vous-appartiennent-for-ever/';
$t['slide'][2]['i'] = $dir.'img/slide-framanotes.jpg';
$t['slide'][2]['d'] = $s['notes']['t'].' : quittez Evernote pour plus de liberté et de chiffrement !';

$t['slide'][3]['l'] = 'https://framablog.org/2016/10/05/framaforms-noffrez-plus-les-reponses-que-vous-collectez-a-google/';
$t['slide'][3]['i'] = $dir.'img/slide-framaforms.jpg';
$t['slide'][3]['d'] = $s['forms']['t'].' : vos formulaires hors de portée de Google.';

$t['slide'][4]['l'] = 'https://framablog.org/2016/10/06/framatalk-semez-la-discord-sur-skype-et-cie/';
$t['slide'][4]['i'] = $dir.'img/slide-framatalk.jpg';
$t['slide'][4]['d'] = $s['talk']['t'].' : un « Skype » sans installation… et sans flicage ;)';

$t['slide'][5]['l'] = 'https://framablog.org/2016/10/07/framagenda-ne-partagez-plus-votre-planning-ni-vos-contacts-avec-la-nsa/';
$t['slide'][5]['i'] = $dir.'img/slide-framagenda.jpg';
$t['slide'][5]['d'] = $s['agenda']['t'].' : vos rendez-vous et contacts vous appartiennent.';

$t['slide'][6]['l'] = 'https://framablog.org/2016/10/10/myframa-vos-favoris-et-framasofteries-partout-avec-vous-rien-qua-vous/';
$t['slide'][6]['i'] = $dir.'img/slide-myframa.jpg';
$t['slide'][6]['d'] = $s['my']['t'].' : retrouvez aisément vos favoris… et vos services '.strip_tags($t['meta']['F'], '<b>');

$t['slide'][7]['l'] = 'https://framablog.org/2016/10/12/naissance-du-collectif-chatons/';
$t['slide'][7]['i'] = $dir.'img/slide-chatons.jpg';
$t['slide'][7]['d'] = 'Naissance des CHATONS, Collectif des Hébergeurs Alternatifs<br>Transparents, Ouverts, Neutres et Solidaires';

$t['slide'][8]['l'] = 'https://framablog.org/2016/09/09/framemo-un-tableau-pour-vos-tempetes-de-cerveaux/';
$t['slide'][8]['i'] = $dir.'img/slide-framemo.jpg';
$t['slide'][8]['d'] = 'Sortie de '.$s['memo']['t'].'. Un tableau pour vos tempêtes de cerveaux.';

$t['slide'][9]['l'] = 'https://framablog.org/2016/09/01/framinetest-edu-laissez-microsoft-hors-de-portee-de-nos-enfants/';
$t['slide'][9]['i'] = $dir.'img/slide-framinetest.jpg';
$t['slide'][9]['d'] = strip_tags($t['meta']['F'], '<b>').' sort un serveur Minetest en alternative à Minecraft éducation.<br>
                      Laissons Microsoft hors de portée de nos enfants.';

// Recherche
$t['_Rechercher']            = 'Rechercher';
$t['_sur Framasoft']         = 'sur les sites de Framasoft';
$t['_sur le web']            = 'sur le web';

// Navigation interne
$t['inav']['lite']           = 'Accès rapide';
$t['inav']['full']           = 'Accueil classique';
$t['_Select the language']   = 'Choisir la langue';
$t['_Change the language']   = 'Changer la langue';
$t['_OK']                    = 'OK';

$t['inav']['logiciel']       = 'Rubrique logiciels';
$t['inav']['logicielTitle']  = 'vers la rubrique logiciels';
$t['inav']['culture']        = 'Rubrique culture';
$t['inav']['cultureTitle']   = 'vers la rubrique culture';
$t['inav']['cloud']          = 'Rubrique cloud';
$t['inav']['cloudTitle']     = 'vers la rubrique cloud';
$t['inav']['vrac']           = 'Rubrique libr’en vrac';
$t['inav']['vracTitle']      = 'vers la rubrique libr’en vrac';

// Catégories
$t['cat']['communaute']['t'] = 'Libre communauté';
$t['cat']['logiciel']['t']   = 'Libres logiciels';
$t['cat']['culture']['t']    = 'Libres cultures';
$t['cat']['cloud']['t']      = 'Libres services';
$t['cat']['vrac']['t']       = 'Libr’en vrac';

$t['cat']['communaute']['d'] = 'Vous êtes libre ce soir ?';
$t['cat']['logiciel']['d']   = 'Liberté, égalité, fraternité';
$t['cat']['culture']['d']    = 'Extension du domaine du Libre';
$t['cat']['cloud']['d']      = 'Du cloud computing libre ? c’est possible !';
$t['cat']['vrac']['d']       = 'Inclassables mais non mal classés !';


$t['cat']['communaute']['l'] = 'topPgCommunaute';
$t['cat']['logiciel']['l']   = 'topPgLogiciels';
$t['cat']['culture']['l']    = 'topPgCulture';
$t['cat']['cloud']['l']      = 'topPgCloud';
$t['cat']['vrac']['l']       = 'topPgVrac';

$t['cat']['communaute']['c'] = 'violet';
$t['cat']['logiciel']['c']   = 'bleu';
$t['cat']['culture']['c']    = 'rouge';
$t['cat']['cloud']['c']      = 'vert';
$t['cat']['vrac']['c']       = 'jaune';

// Page 1 Présentation
$t['pg1']['accroche']        = '<li>Un réseau dédié à la promotion du « <span class="smallcaps">libre</span> » en général et du <span class="smallcaps">logiciel libre</span> en particulier.</li>
                                <li>De nombreux services et projets innovants mis librement à disposition du grand public.</li>
                                <li>Une <a href="#'.$t['cat']['communaute']['l'].'">communauté</a> de bénévoles soutenue par une association d’intérêt général.</li>
                                <li>Une invitation à bâtir ensemble un monde de partage et de coopération.</li>';
$t['pg1']['news']            = 'Quoi de neuf sur Framasoft ?';

$t['pg1']['annuaire']        = 'Vous cherchez l’annuaire de logiciels libres ? <a href="'.$s['libre']['l'].'">C’est par ici !</a>';

// Page 2 Libre communauté
$t['pg2']['communaute']['h'] = 'Une communauté';
$t['pg2']['communaute']['d'] = 'Un joyeux bazar';
$t['pg2']['communaute']['t'] = 'Qui se cache derrière Framasoft ? Tous ceux qui ont participé ou participent
                                de près ou de loin à nos différents projets. Il suffit de vouloir promouvoir
                                le Libre et de placer sa participation sous licence libre, garantissant qu’elle
                                sera mise dans le pot des biens communs sans risque d’appropriation.';

$t['pg2']['asso']['h']       = 'Une association';
$t['pg2']['asso']['d']       = 'Un peu de cathédrale';
$t['pg2']['asso']['t']       = 'Framasoft repose sur une association 1901 d’intérêt général.
                                À charge pour elle de mettre de l’huile dans les rouages et de s’assurer que
                                la communauté puisse s’activer dans les meilleures conditions.
                                Elle compte '.$t['salaries']['t'].' permanents et est financée principalement par les dons
                                individuels collectés sur Internet. Vous pouvez en être vous aussi,
                                mais attention ça tient plus du sacerdoce que de la sinécure !';

$t['pg2']['participer']['h'] = 'Participer ?';
$t['pg2']['participer']['d'] = 'Il y a mille et une façons de participer avec nous à diffuser le Libre au sein de nos nombreux projets.';
$t['pg2']['participer']['t'] = 'Tester, rédiger, modérer, administrer, traduire, relire, relayer, coder,
                                communiquer, promouvoir, sensibiliser…
                                N’hésitez pas à <a href="'.$l['participer'].'">mettre la main à la pâte</a>
                                avec nous ! Et merci d’avance…';

$t['pg2']['soutenir']['h']   = 'Nous soutenir ?';
$t['pg2']['soutenir']['d']   = 'Parce que libre ne signifie pas gratuit';
$t['pg2']['soutenir']['t']   = 'Framasoft ne serait rien sans sa communauté de bénévoles mais ne pourrait pas fonctionner
                                non plus sans le service de l’association qui a des frais et emploie '.$t['salaries']['t'].'
                                indispensables permanents. Notre financement dépend de vous, c’est-à-dire des dons individuels
                                collectés sur Internet. <a href="'.$l['S'].'">Si vous pensez que nous le méritons…</a>';

$t['pg2']['partenaire']['h'] = 'Nos partenaires';
$t['pg2']['partenaire']['d'] = 'Framasoft est avant tout une communauté d’utilisateurs. Cependant, son fonctionnement est
                                clairement celui d’un réseau, non seulement de projets, mais aussi de partenaires.<br>
                                Ainsi, Framasoft bénéficie du soutien de nombreuses organisations (publiques, commerciales,
                                associatives) qui permettent aux projets de croître et de se développer.
                                <a href="'.$l['S'].'/partenaires">Liste de tous nos partenaires</a>';
$t['pg2']['partenaire']['t'] = '<li><a href="http://milliweb.fr/"><img src="'.$l['S'].'/sites/default/files/partenaires/logoMilliweb_150.png" alt="Milliweb"></a></li>
                                <li><a href="https://www.ikoula.com/"><img src="'.$l['S'].'/sites/default/files/transparent-png-bleu.png" alt="Ikoula"></a></li>';

// Page 3 Libres logiciels
$t['pg3']['pres']['h']       = 'Logiciel Libre ?';
$t['pg3']['pres']['d']       = 'Un <a href="http://fr.wikipedia.org/wiki/Logiciel_libre" target="_blank">logiciel libre</a>
                                est un logiciel qui offre et garantit les quatre libertés suivantes : utilisation, étude,
                                modification et duplication en vue de sa diffusion (gratuite ou pas).';
$t['pg3']['pres']['t1']      = 'Ceci est permis techniquement grâce à l’accès au
                                <a href="http://fr.wikipedia.org/wiki/Code_source" target="_blank">code</a>
                                et légalement grâce à la <a href="http://fr.wikipedia.org/wiki/Licence_libre" target="_blank">licence libre</a>
                                qui l’accompagne. Ces <span class="smallcaps">quatre libertés</span> favorisent la transparence,
                                la confiance, l’échange, le partage et la collaboration au sein de communautés.';
$t['pg3']['pres']['t2']      = 'Framasoft vous propose un annuaire, des clés USB et DVD et un installateur Windows
                                pour les découvrir et les utiliser régulièrement.';

$t['pg3']['key']['evl']      = 'Acheter la Framakey sur la boutique '.$t['evl'];
$t['pg3']['dvd']['evl']      = 'Acheter le FramaDVD sur la boutique '.$t['evl'];

// Page 4 Libres cultures
$t['pg4']['pres']['h']       = 'Culture Libre ?';
$t['pg4']['pres']['d']       = 'Facilitée par Internet et la numérisation, la
                                « <a href="http://fr.wikipedia.org/wiki/Culture_libre">culture libre</a> »
                                est une culture en mouvement qui s’inspire directement du logiciel libre
                                dans sa philosophie et ses licences pour promouvoir et diffuser des œuvres de l’esprit.';
$t['pg4']['pres']['t1']      = 'Elle explore des domaines aussi variés que les arts, l’éducation, les sciences, le matériel…
                                Ces œuvres peuvent alors être considérées comme des
                                <a href="http://fr.wikipedia.org/wiki/Bien_commun">biens communs</a>.
                                L’exemple le plus emblématique est l’encyclopédie libre Wikipédia.';
$t['pg4']['pres']['t2']      = 'Dans ce cadre, Framasoft vous propose un blog, une maison d’édition,
                                une plateforme vidéo, un site dédié à la musique libre ainsi qu’un
                                service original de traduction collaborative.';
$t['pg4']['quote']['t']      = '« Parce que ce serait l’une des plus grandes opportunités manquées de notre époque
                                si le logiciel libre ne libérait rien d’autre que du code. »';
$t['pg4']['book']['evl']     = 'Acheter les Framabooks sur la boutique '.$t['evl'];

// Page 5 Libres services
$t['pg5']['pres']['h']       = 'Services Libres ?';
$t['pg5']['pres']['d']       = 'Nom de code : « Framacloud »';
$t['pg5']['pres']['t1']      = 'Intuitif, sans inscription et à même votre navigateur, un ensemble de services en ligne libres
                                et respectueux de vos données personnelles. Ces services vous sont proposés dans le cadre de
                                notre campagne « '.$s['DIo']['a'].' »';
$t['pg5']['pres']['t2']      = 'Vous pouvez aussi les installer sur votre propre serveur, participant ainsi à décentraliser l’Internet.
                                Des tutoriels sont là pour vous aider à franchir le pas dans la rubrique
                                <a href="'.$l['cloud'].'/cultiver-son-jardin">Cultiver son jardin</a>.';

// Page 6 Libr’en Vrac
$t['pg6']['pres']['h']       = 'Les projets transversaux';
$t['pg6']['pres']['d']       = 'Espaces d’échanges, d’achats, de développements…';
$t['pg6']['pres']['t']       = 'Nous regroupons ici tout ce qui touche à l’ensemble du réseau ainsi que
                                notre laboratoire d’idées et de projets en construction.';
$t['pg6']['une']['h']        = 'Lumière sur…';
$t['pg6']['une']['d']        = 'GéGé, Geektionnerd generator';
$t['pg6']['une']['t']        = 'Le geektionnerd à faire soi-même.';

?>