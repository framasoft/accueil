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
$l['DIo']        = 'https://degooglisons-internet.org/?l=en';
$l['DIoL']       = 'https://degooglisons-internet.org/list?l=en';

$l['nav']        = 'https://framasoft.org/nav/';
$l['navJS']      = $l['nav'].'nav.js';
$l['Charte']     = $l['nav'].'html/charte.en.html';
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
$l['dioPinchot']    = $dir.'img/pinchot_gaulois.png';
$l['GeGe']          = $dir.'img/GeGeGenerator.jpg';

// Meta
$t['meta']['lang']      = 'en';
$t['meta']['title']     = 'Framasoft ~ Portal Homepage';
$t['meta']['framasoft'] = 'Framasoft';
$t['meta']['F']         = '<a href="'.$l['F'].'"><b class="violet">Frama</b><b class="orange">soft</b></a>';
$t['meta']['slogan']    = 'There is a long way to go, but the road is Free…';
$t['meta']['desc']      = 'A French non-profit (Association française de loi 1901), originating from education, Framasoft is a network aiming at popular education, focussing
                            mostly on free and open source software. The network is organized following 3 main directions on a collaborative mode :
                           promotion, diffusion and development of libre software, enhancement of free (as in free speech) culture.
                           We also provide free online services.
                           The portal Homepage is introducing the whole range of actions by Framasoft and
                           provide links to various sites and projects of the network.';
$t['meta']['keywords']  = 'Framasoft, libre software, free and open source sofware, free culture, FOSS, FLOSS,  promotion and diffusion of free software, open source';
$t['meta']['license']   = 'Creative Commons-By-SA except when notified';

$t['salaries']['n'] = '6'; $t['salaries']['t'] = 'six';

$t['evl'] = 'En Vente Libre';

// Sites
$c = 'orange';
$k = 'DIo'; $s[$k]['c'] = $c;
$s[$k]['l']  = $l['DIo'];
$s[$k]['t']  = '<b class="violet">De-google-ify</b> <b class="'.$c.'">Internet</b>';
$s[$k]['d']  = '';
$s[$k]['i']  = 'fa-shield';

// Logiciels
$c = 'bleu';
$k = 'libre'; $s[$k]['c'] = $c;
$s[$k]['l']  = 'http://framalibre.org';
$s[$k]['t']  = '<b class="violet">Frama</b><b class="'.$c.'">libre</b>';
$s[$k]['d']  = 'A Directory';
$s[$k]['i']  = 'fa-linux';
$s[$k]['pd'] = 'The big directory';
$s[$k]['pt'] = 'More than 1600 software, tested, rated and commented by the historical project
                which has been root to Framasoft.
                Includes tutorials and comprehensive docs.';

$k = 'key'; $s[$k]['c'] = $c;
$s[$k]['l']  = 'https://framakey.org';
$s[$k]['t']  = '<b class="violet">Frama</b><b class="'.$c.'">key</b>';
$s[$k]['d']  = 'A USB device';
$s[$k]['i']  = 'fa-usb';
$s[$k]['pd'] = 'Full tank of Freedom in a simple device';
$s[$k]['pt'] = 'With this USB device (or any mobile device) you can use
                more than a hundred free programs for mobile, for Windows,
                test and install a GNU/Linux distro or have offline access to French-speaking Wikipédia.';

$k = 'dvd'; $s[$k]['c'] = $c;
$s[$k]['l']  = 'http://framadvd.org';
$s[$k]['t']  = '<b class="violet">Frama</b><b class="'.$c.'">dvd</b>';
$s[$k]['d']  = 'A DVD';
$s[$k]['i']  = 'fa-play-circle-o';
$s[$k]['pd'] = 'Full tank of Freedom in a DVD';
$s[$k]['pt'] = 'A DVD stuffed with the best free software for Windows, Mac and
                GNU/Linux (distro included) but also fre culture (text, photo, audio and video).
                Also available as a special School Edition';

$k = 'pack'; $s[$k]['c'] = $c;
$s[$k]['l']  = 'http://framapack.org';
$s[$k]['t']  = '<b class="violet">Frama</b><b class="'.$c.'">pack</b>';
$s[$k]['d']  = 'A distributor';
$s[$k]['i']  = 'fa-download';
$s[$k]['pd'] = 'Massive install';
$s[$k]['pt'] = 'Framapack is a handy tool to pick the best free software for Windows last version.<br>
                You select whatever you want and all programms install all together!';

// Culture
$c = 'rouge';
$k = 'blog'; $s[$k]['c'] = $c;
$s[$k]['l']  = 'https://framablog.org';
$s[$k]['t']  = '<b class="violet">Frama</b><b class="'.$c.'">blog</b>';
$s[$k]['d']  = 'Info';
$s[$k]['i']  = 'fa-pencil';
$s[$k]['pd'] = 'News from « Libre »';
$s[$k]['pt'] = 'Weekly column on Libre and libre software. Debate, open comments, many translations
                and announcements about the whole activities of Framasoft network.';
$k = 'book'; $s[$k]['c'] = $c;
$s[$k]['l']  = 'http://framabook.org';
$s[$k]['t']  = '<b class="violet">Frama</b><b class="'.$c.'">book</b>';
$s[$k]['d']  = 'Some books…';
$s[$k]['i']  = 'fa-book';
$s[$k]['pd'] = 'Betting on free books';
$s[$k]['pt'] = 'Our publishing house includes around twenty publications
                about free software, programming for beginners, thoughts on copyrights
                but also comics and even a novel.
                A free book provides the reader with the same freedom as free software.';

$k = 'bookin'; $s[$k]['c'] = $c;
$s[$k]['l']  = 'http://framabookin.org';
$s[$k]['t']  = '<b class="violet">Frama</b><b class="'.$c.'">bookin</b>';
$s[$k]['d']  = '… and a library';
$s[$k]['i']  = 'fa-coffee';
$s[$k]['pd'] = 'A free digital library';
$s[$k]['pt'] = 'Our library includes a few hundreds of free or public domain publications.
                It is available online on mobile platforms.
                You can add it directly to an e-book reading application with the <abbr>OPDS</abbr> feed.';

$k = 'lang'; $s[$k]['c'] = $c;
$s[$k]['l']  = 'https://participer.framasoft.org/traduction-rejoignez-framalang/';
$s[$k]['t']  = '<b class="violet">Frama</b><b class="'.$c.'">lang</b>';
$s[$k]['d']  = 'Translations';
$s[$k]['i']  = 'fa-language';
$s[$k]['pd'] = 'Collaborative translation';
$s[$k]['pt'] = 'Translate alltogether, mainly from English to
                French, with a sense of community and leveraging the
                power of the Internet and good will of its inhabitants.
                It can consist in articles, subtitles or even entire books !';

$k = 'tube'; $s[$k]['c'] = $c;
$s[$k]['l']  = 'https://framatube.org';
$s[$k]['t']  = '<b class="violet">Frama</b><b class="'.$c.'">tube</b>';
$s[$k]['d']  = 'Videos';
$s[$k]['i']  = 'fa-film';
$s[$k]['pd'] = 'Our free « YouTube »';
$s[$k]['pt'] = 'Videos in French (or with French subtitles) about
                about free softwares and Open source in general.
                Interviews, conferences, documentaries, tv broadcasts…
                to get informed but also inform others.';

$k = 'zic'; $s[$k]['c'] = $c;
$s[$k]['l']  = 'http://framazic.org';
$s[$k]['t']  = '<b class="violet">Frama</b><b class="'.$c.'">zic</b>';
$s[$k]['d']  = 'Music';
$s[$k]['i']  = 'fa-music';
$s[$k]['pd'] = 'When the music is free';
$s[$k]['pt'] = 'A « free music » is a music that provides the music lover
                with the same liberty as free software.
                A dedicated website allows to understand it better,
                along with a selection to show that quality is also present.';

// Services
$c = 'vert';
$k = 'pad'; $s[$k]['c'] = $c;
$s[$k]['l']  = 'https://framapad.org';
$s[$k]['t']  = '<b class="violet">Frama</b><b class="'.$c.'">pad</b>';
$s[$k]['d']  = 'Edit';
$s[$k]['i']  = 'fa-align-left';
$s[$k]['pd'] = 'Edit together';
$s[$k]['pt'] = 'Let\'s all write together on the same document
                in a collaborative online editing interface.No registration
                required, pick a username, a color and let\'s go !';

$k = 'calc'; $s[$k]['c'] = $c;
$s[$k]['l']  = 'https://framacalc.org';
$s[$k]['t']  = '<b class="violet">Frama</b><b class="'.$c.'">calc</b>';
$s[$k]['d']  = 'Calculate';
$s[$k]['i']  = 'fa-th';
$s[$k]['pd'] = 'A collaborative spreadsheet';
$s[$k]['pt'] = 'Framacalc is to spreadsheet what Framapad
                is to text editing, working together on the same document
                in a simple and collaborative way.';

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
$s[$k]['d']  = 'Organise';
$s[$k]['i']  = 'fa-calendar-check-o';
$s[$k]['pd'] = 'Organise appointments and surveys';
$s[$k]['pt'] = 'Framadate is like Doodle, but free.
                Nothing is simpler than create an appointment
                or a survey with registration and invite your associates.';

$k = 'board'; $s[$k]['c'] = $c;
$s[$k]['l']  = 'https://framaboard.org';
$s[$k]['t']  = '<b class="violet">Frama</b><b class="'.$c.'">board</b>';
$s[$k]['d']  = '<span class="sr-only">Organise</span>';
$s[$k]['i']  = 'fa-dashboard';
$s[$k]['pd'] = 'Manage projects';
$s[$k]['pt'] = 'Framaboard is a collaborative project and task
                manager, using the Kanban system. Its visual system makes it
                very easy to feel at home, whether you are used to this kind of tool or not.';

$k = 'mindmap'; $s[$k]['c'] = $c;
$s[$k]['l']  = 'https://framindmap.org';
$s[$k]['t']  = '<b class="violet">Fra</b><b class="'.$c.'">mindmap</b>';
$s[$k]['d']  = 'Structure';
$s[$k]['i']  = 'fa-sitemap';
$s[$k]['pd'] = 'Create mind maps';
$s[$k]['pt'] = 'An fluid and intuitive interface to create mind maps easily from inside your browser.
                Particularly relevant for brainstorming or to take notes.';

$k = 'vectoriel'; $s[$k]['c'] = $c;
$s[$k]['l']  = 'http://framavectoriel.org';
$s[$k]['t']  = '<b class="violet">Frama</b><b class="'.$c.'">vectoriel</b>';
$s[$k]['d']  = 'Drawing';
$s[$k]['i']  = 'fa-paint-brush';
$s[$k]['pd'] = 'Vector drawing';
$s[$k]['pt'] = 'Create and edit pictures easily online using the SVG open format.
                Kids love this !';

$k = 'slides'; $s[$k]['c'] = $c;
$s[$k]['l']  = 'https://framaslides.org';
$s[$k]['t']  = '<b class="violet">Frama</b><b class="'.$c.'">slides</b>';
$s[$k]['d']  = 'Exposer';
$s[$k]['i']  = 'fa-pie-chart';
$s[$k]['pd'] = 'Créer et partager des diaporamas';
$s[$k]['pt'] = 'Framaslides vous permet de créer directement en ligne un
                diaporama ou une présentation, d’y accéder avec une
                simple connexion internet, et de la partager.';

$k = 'maestro'; $s[$k]['c'] = $c;
$s[$k]['l']  = 'https://framaestro.org';
$s[$k]['t']  = '<b class="violet">Fra</b><b class="'.$c.'">maestro</b>';
$s[$k]['d']  = 'Collaborer';
$s[$k]['i']  = 'fa-magic';
$s[$k]['pd'] = 'Ochestrez vos projets collaboratifs';
$s[$k]['pt'] = 'Besoin en même temps d’un pad pour prendre des notes,
                d’un tableau d’organisation, et d’une vidéo-conférence ?
                Avec Framaestro, c’est vous qui organisez les outils qu’il vous faut, sur une seule et unique page web.';

$k = 'bee'; $s[$k]['c'] = $c;
$s[$k]['l']  = 'https://framabee.org';
$s[$k]['t']  = '<b class="violet">Frama</b><b class="'.$c.'">bee</b>';
$s[$k]['d']  = 'Searching';
$s[$k]['i']  = 'fa-search';
$s[$k]['pd'] = 'The search engine which explores the Internet around you';
$s[$k]['pt'] = 'Framabee is a free and anonymous meta search engine.
                Your search query is sent to multiple other engines before it is displayed in your browser.
                The point? Our engine act as a middle-man between you and Google (and others),
                so that your personal data (IP address, search history, geolocalization, profile)
                can not be accessed by them.';

$k = 'sphere'; $s[$k]['c'] = $c;
$s[$k]['l']  = 'https://framasphere.org';
$s[$k]['t']  = '<b class="violet">Frama</b><b class="'.$c.'">sphère</b>';
$s[$k]['d']  = 'Networking';
$s[$k]['i']  = 'fa-asterisk';
$s[$k]['pd'] = 'The free social network';
$s[$k]['pt'] = 'Framasphere is  a free social network based on the decentralised
                Diaspora software. Find your friends on Framasphere – or other Diaspora pods –
                and discuss with them without being tracked.';

$k = 'piaf'; $s[$k]['c'] = $c;
$s[$k]['l']  = 'https://framapiaf.org';
$s[$k]['t']  = '<b class="violet">Frama</b><b class="'.$c.'">piaf</b>';
$s[$k]['d']  = '<span class="sr-only">Networking</span>';
$s[$k]['i']  = 'fa-retweet';
$s[$k]['pd'] = 'Réseau social en 500 caractères';
$s[$k]['pt'] = 'Framapiaf est un service libre de <b>microblogging</b>,
                basé sur le logiciel décentralisé Mastodon.
                Retrouvez vos amis sur Framapiaf - ou d’autres instances
                Mastodon, GNU Social, Friendica - et échangez avec eux sans être pisté.';

$k = 'team'; $s[$k]['c'] = $c;
$s[$k]['l']  = 'https://framateam.org';
$s[$k]['t']  = '<b class="violet">Frama</b><b class="'.$c.'">team</b>';
$s[$k]['d']  = 'Discussing';
$s[$k]['i']  = 'fa-comments-o';
$s[$k]['pd'] = 'Collaborative communication';
$s[$k]['pt'] = 'Framateam is a free <b> chat </b> service which allows for team collaboration,
                notifications, conversations history and research.';

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
$s[$k]['d']  = 'Decide';
$s[$k]['i']  = 'fa-bullhorn';
$s[$k]['pd'] = 'Decide together';
$s[$k]['pt'] = 'Framavox helps you to make group-based decisions.
                Start a discussion, share ideas, come to an agreement.
                Every decision has a clear deadline, so you can be sure to decide on time.';

$k = 'memo'; $s[$k]['c'] = $c;
$s[$k]['l']  = 'https://framemo.org';
$s[$k]['t']  = '<b class="violet">Fra</b><b class="'.$c.'">memo</b>';
$s[$k]['d']  = 'Brainstorm';
$s[$k]['i']  = 'fa-object-group';
$s[$k]['pd'] = 'Organize ideas';
$s[$k]['pt'] = 'Framemo allows you to create a board with columns on which
                anyone can pin colourful notes. Just like Framapad, no registration is
                required and modifications are made visible and saved continuously.';

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
$s[$k]['d']  = 'Follow the news';
$s[$k]['i']  = 'fa-briefcase';
$s[$k]['pd'] = 'Never miss an article!';
$s[$k]['pt'] = 'Framabag allows you to save articles which you do not have time to read now.';

$k = 'news'; $s[$k]['c'] = $c;
$s[$k]['l']  = 'https://framanews.org';
$s[$k]['t']  = '<b class="violet">Frama</b><b class="'.$c.'">news</b>';
$s[$k]['d']  = '<span class="sr-only">Follow the news</span>';
$s[$k]['i']  = 'fa-newspaper-o';
$s[$k]['pd'] = 'Follow the news';
$s[$k]['pt'] = 'By subscribing to your favorite sites RSS feeds,
                keep in touch with their latest news with Framanews!';

$k = 'carte'; $s[$k]['c'] = $c;
$s[$k]['l']  = 'https://framacarte.org';
$s[$k]['t']  = '<b class="violet">Frama</b><b class="'.$c.'">carte</b>';
$s[$k]['d']  = 'Mapping';
$s[$k]['i']  = 'fa-map';
$s[$k]['pd'] = 'Creat custom maps';
$s[$k]['pt'] = 'Framacarte allows you to draw, label, colour,
                annotate maps from <a href="https://en.wikipedia.org/wiki/Openstreetmap">OpenStreetMap</a>
                in order to display them on your website or print them.';

$k = 'games'; $s[$k]['c'] = $c;
$s[$k]['l']  = 'http://framagames.org';
$s[$k]['t']  = '<b class="violet">Frama</b><b class="'.$c.'">games</b>';
$s[$k]['d']  = 'Gaming';
$s[$k]['i']  = 'fa-gamepad';
$s[$k]['pd'] = 'Online or offline gaming';
$s[$k]['pt'] = 'Framagames is a compilation of free games,
                some of them online or on PC, tablet, which do not require any installation.';

$k = 'minetest'; $s[$k]['c'] = $c;
$s[$k]['l']  = 'https://framinetest.org';
$s[$k]['t']  = '<b class="violet">Fra</b><b class="'.$c.'">minetest</b>';
$s[$k]['d']  = '<span class="sr-only">Gaming</span>';
$s[$k]['i']  = 'fa-cube';
$s[$k]['pd'] = 'Mining educational game';
$s[$k]['pt'] = 'Framinetestest is a server for the Minetest game, a "sandbox game"
                in which you build and decompose blocks to modify it
                and with which you can build your own pedagogical apps.';

$k = 'drop'; $s[$k]['c'] = $c;
$s[$k]['l']  = 'https://framadrop.org';
$s[$k]['t']  = '<b class="violet">Frama</b><b class="'.$c.'">drop</b>';
$s[$k]['d']  = 'Sharing';
$s[$k]['i']  = 'fa-send';
$s[$k]['pd'] = 'Share files anonymously';
$s[$k]['pt'] = 'With Framadrop, you are done with attachments too large for the e-mail to be sent.
                This service allows you to share files efficiently and in a secure way.';

$k = 'bin'; $s[$k]['c'] = $c;
$s[$k]['l']  = 'https://framabin.org';
$s[$k]['t']  = '<b class="violet">Frama</b><b class="'.$c.'">bin</b>';
$s[$k]['d']  = '<span class="sr-only">Sharing</span>';
$s[$k]['i']  = 'fa-paste';
$s[$k]['pd'] = 'Transmit encrypted data';
$s[$k]['pt'] = 'With Framabin, you can share data which only you
                and the recipient can decrypt, in a very simple way.';

$k = 'pic'; $s[$k]['c'] = $c;
$s[$k]['l']  = 'https://framapic.org';
$s[$k]['t']  = '<b class="violet">Frama</b><b class="'.$c.'">pic</b>';
$s[$k]['d']  = '<span class="sr-only">Sharing</span>';
$s[$k]['i']  = 'fa-photo';
$s[$k]['pd'] = 'Share pictures anonymously';
$s[$k]['pt'] = 'Framapic allows you to easily share pictures, to publish them
                on Twitter, Facebook… or Framasphere for example!';

$k = 'link'; $s[$k]['c'] = $c;
$s[$k]['l']  = 'https://frama.link';
$s[$k]['t']  = '<b class="violet">Frama</b><b class="'.$c.'">link</b>';
$s[$k]['d']  = '<span class="sr-only">Sharing</span>';
$s[$k]['i']  = 'fa-link';
$s[$k]['pd'] = 'Short links';
$s[$k]['pt'] = 'With Frama.link, you can shorten long URLs. On social networks
                or microblogging platforms, a shorter link saves space and is more clear.';

$k = 'drive'; $s[$k]['c'] = $c;
$s[$k]['l']  = 'https://framadrive.org';
$s[$k]['t']  = '<b class="violet">Frama</b><b class="'.$c.'">drive</b>';
$s[$k]['d']  = 'Store';
$s[$k]['i']  = 'fa-cloud-upload';
$s[$k]['pd'] = 'Online storage';
$s[$k]['pt'] = 'Framadrive allows you to store your files online, synchronize them
                between your PCs, mobile devices... and share them with whomever you want.';

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

$k = 'git'; $s[$k]['c'] = $c;
$s[$k]['l']  = 'https://framagit.org';
$s[$k]['t']  = '<b class="violet">Frama</b><b class="'.$c.'">git</b>';
$s[$k]['d']  = 'Code';
$s[$k]['i']  = 'fa-git';
$s[$k]['pd'] = 'Host free code';
$s[$k]['pt'] = 'Framagit is a tool for developers. It can host your open source
                software projects and allows to work on it in a collaborative way.';

$c ='jaune';
$k = 'agora'; $s[$k]['c'] = $c;
$s[$k]['l']  = 'https://forum.framasoft.org';
$s[$k]['t']  = '<b class="violet">Fram</b><b class="'.$c.'">agora</b>';
$s[$k]['d']  = 'A forum';
$s[$k]['i']  = 'fa-comment';
$s[$k]['pd'] = 'The Framasoft\'s forum';
$s[$k]['pt'] = 'VDo you have any question? We (might) have an answer!
                "If you do not know, ask. If you know, share". Framagora is a place
                where we can share information about Open source.';

$k = 'evl'; $s[$k]['c'] = $c;
$s[$k]['l']  = 'http://enventelibre.org';
$s[$k]['t']  = '<b class="violet">EnVente</b><b class="'.$c.'">Libre</b>';
$s[$k]['d']  = 'A shop';
$s[$k]['i']  = 'fa-shopping-cart';
$s[$k]['pd'] = 'Our free litle shop';
$s[$k]['pt'] = 'The marketplace for physical Framasoft products: Framakey,
                Framabook, Framadvd but also goodies and t-shirts.';

$k = 'docs'; $s[$k]['c'] = $c;
$s[$k]['l']  = 'https://docs.framasoft.org/en/';
$s[$k]['t']  = '<b class="violet">Frama</b><b class="'.$c.'">docs</b>';
$s[$k]['d']  = 'Documentations';
$s[$k]['i']  = 'fa-book';
$s[$k]['pd'] = 'Notre centre de documentation';
$s[$k]['pt'] = 'Pour tout savoir sur l’utilisation des services en
                ligne que nous proposons et apprendre à travers nos
                différents guides comment gagner en autonomie.';

foreach ($s as $k => $v) {
    $s[$k]['a'] = '<a href="'.$s[$k]['l'].'">'.$s[$k]['t'].'</a>';
}

// Carousel
$t['carousel']['play']  = 'Play';
$t['carousel']['pause'] = 'Pause';
$t['carousel']['prev']  = 'Previous slide';
$t['carousel']['next']  = 'Next slide';

$t['slide'][0]['l'] = 'https://framablog.org/2016/10/03/degooglisons-saison-3-30-services-alternatifs-aux-produits-de-google-co/';
$t['slide'][0]['i'] = $dir.'img/slide-degooglisons-internet.png';
$t['slide'][0]['d'] = '<b class="violet">De-google-ify</b> <b class="orange">Internet</b> season 3 : six new services.';

$t['slide'][1]['l'] = 'https://framablog.org/2016/10/03/framalistes-vos-groups-nont-plus-a-appartenir-a-google/';
$t['slide'][1]['i'] = $dir.'img/slide-framalistes.jpg';
$t['slide'][1]['d'] = $s['listes']['t'].' : do not offer your Groups to Google anymore!';

$t['slide'][2]['l'] = 'https://framablog.org/2016/10/04/framanotes-vos-notes-vous-appartiennent-for-ever/';
$t['slide'][2]['i'] = $dir.'img/slide-framanotes.jpg';
$t['slide'][2]['d'] = $s['notes']['t'].' : leave Evernote for more freedom and encryption!';

$t['slide'][3]['l'] = 'https://framablog.org/2016/10/05/framaforms-noffrez-plus-les-reponses-que-vous-collectez-a-google/';
$t['slide'][3]['i'] = $dir.'img/slide-framaforms.jpg';
$t['slide'][3]['d'] = $s['forms']['t'].' : your forms outside of Google\'s reach.';

$t['slide'][4]['l'] = 'https://framablog.org/2016/10/06/framatalk-semez-la-discord-sur-skype-et-cie/';
$t['slide'][4]['i'] = $dir.'img/slide-framatalk.jpg';
$t['slide'][4]['d'] = $s['talk']['t'].' : a "Skype" without installation requirements... and without tracking ;)';

$t['slide'][5]['l'] = 'https://framablog.org/2016/10/07/framagenda-ne-partagez-plus-votre-planning-ni-vos-contacts-avec-la-nsa/';
$t['slide'][5]['i'] = $dir.'img/slide-framagenda.jpg';
$t['slide'][5]['d'] = $s['agenda']['t'].' : your appointments and your contacts belong to you.';

$t['slide'][6]['l'] = 'https://framablog.org/2016/10/10/myframa-vos-favoris-et-framasofteries-partout-avec-vous-rien-qua-vous/';
$t['slide'][6]['i'] = $dir.'img/slide-myframa.jpg';
$t['slide'][6]['d'] = $s['my']['t'].' : find you bookmarks easily... and your services '.strip_tags($t['meta']['F'], '<b>');

$t['slide'][7]['l'] = 'https://framablog.org/2016/10/12/naissance-du-collectif-chatons/';
$t['slide'][7]['i'] = $dir.'img/slide-chatons.jpg';
$t['slide'][7]['d'] = 'Naissance des CHATONS, Collectif des Hébergeurs Alternatifs<br>Transparents, Ouverts, Neutres et Solidaires';

$t['slide'][8]['l'] = 'https://framablog.org/2016/09/09/framemo-un-tableau-pour-vos-tempetes-de-cerveaux/';
$t['slide'][8]['i'] = $dir.'img/slide-framemo.jpg';
$t['slide'][8]['d'] = $s['memo']['t'].' released. A board for your brainstorming sessions.';

$t['slide'][9]['l'] = 'https://framablog.org/2016/09/01/framinetest-edu-laissez-microsoft-hors-de-portee-de-nos-enfants/';
$t['slide'][9]['i'] = $dir.'img/slide-framinetest.jpg';
$t['slide'][9]['d'] = strip_tags($t['meta']['F'], '<b>').' releases a Minetest server as an alternative to Minecraft education.<br>
                      Let\'s keep Microsoft outside our kids\' reach.';

// Recherche
$t['_Rechercher']            = 'Search';
$t['_sur Framasoft']         = 'on Framasoft\'s websites';
$t['_sur le web']            = 'on the web';

// Navigation interne
$t['inav']['lite']           = 'Quick acess';
$t['inav']['full']           = 'Classic home';
$t['_Select the language']   = 'Select the language';
$t['_Change the language']   = 'Change the language';
$t['_OK']                    = 'OK';

$t['inav']['logiciel']       = 'Software section';
$t['inav']['logicielTitle']  = 'to software section';
$t['inav']['culture']        = 'Culture section';
$t['inav']['cultureTitle']   = 'to culture section';
$t['inav']['cloud']          = 'Cloud section';
$t['inav']['cloudTitle']     = 'to cloud section';
$t['inav']['vrac']           = 'Bulk free section';
$t['inav']['vracTitle']      = 'to bulk free section';

// Catégories
$t['cat']['communaute']['t'] = 'Free community';
$t['cat']['logiciel']['t']   = 'Free software';
$t['cat']['culture']['t']    = 'Free cultures';
$t['cat']['cloud']['t']      = 'Free services';
$t['cat']['vrac']['t']       = 'Bulk free';

$t['cat']['communaute']['d'] = 'Are you free tonight?';
$t['cat']['logiciel']['d']   = 'Liberty, Equality, Fraternity';
$t['cat']['culture']['d']    = 'Extending the open source scope';
$t['cat']['cloud']['d']      = 'Free cloud computing? It is possible!';
$t['cat']['vrac']['d']       = 'Unclassifiable but not badly classified!';


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
$t['pg1']['accroche']        = '<li>A network dedicated to globally promoting "<span class="smallcaps">free</span>" and particularly <span class="smallcaps">free software</span>.</li>
                                <li>Many services and innovative projects freely put at the disposal of the general public.</li>
                                <li>A <a href="#'.$t['cat']['communaute']['l'].'">community</a> of volunteers supported by an association of public interest.</li>
                                <li>An invitation to build together a world of sharing and cooperation.</li>';
$t['pg1']['news']            = 'What\'s up on Framasoft ?';

$t['medias']['presstitle']  = 'Press Release';
$t['medias']['pressintro']  = 'Framasoft and the “De-google-ify Internet” campaign received some attention. Here are some extracts from our <a href="https://wiki.framasoft.org/speakabout">Press release</a>.';
$t['medias']['pressth1']    = 'Date';
$t['medias']['pressth2']    = 'Media';
$t['medias']['pressth3']    = 'Link';
$t['medias']['presslist']   = [
    ['26/02/2017', 'Konrad Lishka',
    'https://www.konradlischka.info/2017/02/blog/how-a-french-association-with-6-employees-offers-mainstream-users-free-and-libre-alternatives-to-facebook-groups-slack-skype-and-the-like/',
    'Link to the article'],
    ['24/08/2016', 'Opensource.com',
    'https://opensource.com/business/16/8/open-source-alternatives-office-365',
    'Link to the article'],
    ['17/10/2016', 'Worldcrunch',
    'http://www.worldcrunch.com/tech-science/the-open-source-group-trying-to-quotde-googlequot-the-internet',
    'Link to the article'],
];

$t['pg1']['annuaire']        = 'Are you looking for the free software directory ? <a href="'.$s['libre']['l'].'">It\'s this way !</a>';

// Page 2 Libre communauté
$t['pg2']['communaute']['h'] = 'A community';
$t['pg2']['communaute']['d'] = 'A joyful mess';
$t['pg2']['communaute']['t'] = 'Who is behind Framasoft? Everybody who took part to our projects
                                at a certain point. It is enough to be eager to promote Open source and license your contribution
                                as open source. It guarantees that it will be added to common good without any risk of seizure.';

$t['pg2']['asso']['h']       = 'An association';
$t['pg2']['asso']['d']       = 'A bit of cathedrale';
$t['pg2']['asso']['t']       = 'Framasoft is based on a law 1901 association (non-profit voluntary association).
                                Up to her to smooth out any rough edges and to ensure that the community can emulate in good conditions.
                                There is  '.$t['salaries']['t'].' permanents and it\'s mostly financed by individual donation
                                collected on Internet. You can be a member too,
                                but careful, it is more a vocation than a sinecure !';

$t['pg2']['participer']['h'] = 'Participate in ?';
$t['pg2']['participer']['d'] = 'There is lot of ways to participate with us to spread the Free spirit trough our numerous projects.';
$t['pg2']['participer']['t'] = 'Test, write, moderate, administrate, translate, proofread, relay, code,
                                communicate, promote, raise awareness…
                                Don\'t hesitate to <a href="'.$l['participer'].'">join in</a>
                                with us ! And thanks in advance…';

$t['pg2']['soutenir']['h']   = 'Support us ?';
$t['pg2']['soutenir']['d']   = 'because free is not free like in free beer';
$t['pg2']['soutenir']['t']   = 'Framasoft will be nothing without  his volunteer\'s community, but cannot run on without
                                the assistance of the association which have costs and employ vital employees. '.$t['salaries']['t'].'
                                Our funding relies on you, which means every individual donation.
                                <a href="'.$l['S'].'">If you think we deserve it…</a>';

$t['pg2']['partenaire']['h'] = 'Our partners';
$t['pg2']['partenaire']['d'] = 'Framasoft is first a community of users. Yet, its functioning is
                                distinctly the one of a network, of projects, but also of partners..<br>
                                So, Framasoft benefit the support of numerous organisations (public, bussiness,
                                non-profit) permetting to our projects to growth and develop.
                                <a href="'.$l['S'].'/partenaires">List of all our partners</a>';
$t['pg2']['partenaire']['t'] = '<li><a href="http://milliweb.fr/"><img src="'.$l['S'].'/sites/default/files/partenaires/logoMilliweb_150.png" alt="Milliweb"></a></li>
                                <li><a href="https://www.ikoula.com/"><img src="'.$l['S'].'/sites/default/files/transparent-png-bleu.png" alt="Ikoula"></a></li>';

// Page 3 Libres logiciels
$t['pg3']['pres']['h']       = 'Free software ?';
$t['pg3']['pres']['d']       = 'A <a href="https://en.wikipedia.org/wiki/Free_software" target="_blank">free software</a>
                                is a software that offer and guarantee the following four liberties : usage, study,
                                modification and copying in order to spreading (free of charge or not).';
$t['pg3']['pres']['t1']      = 'This is technically permitted thanks to the access to the
                                <a href="https://en.wikipedia.org/wiki/Source_code" target="_blank">code</a>
                                and legally with the <a href="https://en.wikipedia.org/wiki/Free_license" target="_blank">free license</a>
                                going with it. Theses <span class="smallcaps">four liberties</span> promote transparency,
                                trust, exchange, sharing and collaboration inside communities.';
$t['pg3']['pres']['t2']      = 'Framasoft offer to you an directory, USB and DVD keys and a Windows installer
                                to discover these and use them regularly.';

$t['pg3']['key']['evl']      = 'Buy the Framakey in the store '.$t['evl'];
$t['pg3']['dvd']['evl']      = 'Buy the FramaDVD in the store '.$t['evl'];

// Page 4 Libres cultures
$t['pg4']['pres']['h']       = 'Free Culture ?';
$t['pg4']['pres']['d']       = 'Ease by Internet and the digitisation, the
                                "<a href="https://en.wikipedia.org/wiki/Libre_culture">free culture</a>"
                                is a moving culture inspired directly by free software
                                in its spirit and licenses to promote and spread intellectuals works.';
$t['pg4']['pres']['t1']      = 'It explore various domains as arts, education, sciences, hardware...
                                These works can then be considered as
                                <a href="https://en.wikipedia.org/wiki/Common_good">common goods</a>.
                                The most illustrative example is the free encyclopedia Wikipedia.';
$t['pg4']['pres']['t2']      = 'In this context, Framasoft offer to you a blog, a publising house
                                a video platform, a website dedicated to free music as well as
                                an original collaborative translation service.';
$t['pg4']['quote']['t']      = '"Because it will be one of the biggest missed opportunities of our era
                                if the free software doesn\'t free anything else than code."';
$t['pg4']['book']['evl']     = 'Buy Framabooks in the store '.$t['evl'];

// Page 5 Libres services
$t['pg5']['pres']['h']       = 'Free services ?';
$t['pg5']['pres']['d']       = 'Code name : "Framacloud"';
$t['pg5']['pres']['t1']      = 'Intuitive, registration-free, and directly on yout browser, it is a group of on-lines free services
                                and respectful of your personal data. These services are offered in the context of our campaign "'.$s['DIo']['a'].'"';
$t['pg5']['pres']['t2']      = 'You can also install theses on your own server, contributing so to decentralize Internet.
                                Tutorials are availables in the section
                                <a href="'.$l['cloud'].'/category/cultiver-son-jardin">Cultiver son jardin</a> (in french) to help you to go for it.';

// Page 6 Libr’en Vrac
$t['pg6']['pres']['h']       = 'Cross-disciplinary projects';
$t['pg6']['pres']['d']       = 'Discussions areas, purchases, development...';
$t['pg6']['pres']['t']       = 'Everything about the whole of the network as well as our think tank and projects
                                under development are grouped together in this section.';
$t['pg6']['une']['h']        = 'Light on…';
$t['pg6']['une']['d']        = 'GéGé, Geektionnerd generator';
$t['pg6']['une']['t']        = 'Geektionnerd do it yourseff.';

?>