<template>
  <div id="credits" class="container ombre apropos">
    <vue-headful
      :title="$t('data.meta.name') + ' - ' + $t('credits.title')"
    />
    <header class="clearfix header">
      <h1 class="pull-left">{{ $t('credits.title') }}</h1>
      <I18n/>
    </header>
    <main>
      <p v-html="$t('credits.main.text[0]')"></p>
      <ul>
          <li
            v-for="li, index in $t('credits.main.tools')"
            v-html="$t('credits.main.tools['+ index +']')"
          ></li>
      </ul>
      <p v-html="$t('credits.main.text[1]')"></p>
      <p><span v-html="$t('credits.main.text[2]')"></span> {{ $t('data.credits.main.graphics') }}</p>

      <h2>{{ $t('credits.main.license.title') }}</h2>
      <p
        v-for="p, index in $t('credits.main.license.text')"
        v-html="$t('credits.main.license.text['+ index +']')"
      ></p>

      <div id="site-credits" class="well" v-if="site !== ''">
        <section v-show="site === 'blog'">
          <h1>Framablog</h1>
          <p>Le Framablog est propulsé par <a href="https://wordpress.org/">Wordpress</a>.</p>
          <p>
            Sauf mention contraire, comme certaines traductions et documents multimédias,
            sa licence est la <span v-html="data.license.ccbysa4fr"></span>.
          </p>
        </section>
        <section v-show="site === 'calc'">
          <h1>Framacalc</h1>
          <p>
            Framacalc est basé sur le logiciel libre <a href="https://www.ethercalc.org/">EtherCalc</a>,
            lui-même basé sur le logiciel libre <a href="https://www.socialtext.net/open/socialcalc">SocialCalc</a>.
          </p>
          <p>
            Framacalc a été traduit par Martin Gubri lors de son stage pour Framasoft.
            Une partie de la traduction est issue du travail de traduction de
            la valeureuse équipe du <a href="http://www.crdp.ac-versailles.fr/">CRDP de Versailles</a>.
          </p>
        </section>
        <section v-show="site === 'connard'">
          <h1>Bastard, Inc</h1>
          <p>
            Dessins : <a href="http://ptilouk.net">Gee</a><br>
            Textes : <a href="http://pouhiou.com">Pouhiou</a>
          </p>
          <p>
            Ce blog et ses contenus sont directement élevés par leurs auteurs
            dans le <a href="http://creativecommons.org/publicdomain/zero/1.0/">Domaine Public Vivant</a>.
            À vous de vous en emparer.
          </p>
          <p>
            Image de couverture et d'entête : versions dérivées de
            <a href="https://secure.flickr.com/photos/thomasleuthard/8253943837/">Business as usual...</a>
            (CC By Thomas Leuthard)
          </p>
        </section>
        <section v-show="site === 'contact'">
          <h1>Site de contact</h1>
          <p>Ce site est propulsé par <a href="https://wordpress.org/">WordPress</a>.</p>
          <p>
            Il est habillé avec le thème <a href="https://wordpress.org/themes/virtue">Virtue</a>
            et <a href="https://framagit.org/framasoft/framavirtue">quelques retouches</a>.
          </p>
        </section>
        <section v-show="site === 'date'">
          <h1>Framadate</h1>
          <h2>Application d'origine</h2>
          <p>
            L'application Framadate est une instance du logiciel <b><a href="http://studs.u-strasbg.fr">STUdS !</a></b>
            développé à l'Université de Strasbourg depuis 2008.
          </p>
          <p>
            Pour les besoins de Framadate, STUdS a fait l'objet d'un fork par l'équipe Framasoft.
            Les sources sont disponibles sur <a href="https://framagit.org/framasoft/framadate">notre Gitlab</a>.
          </p>
          <p>
            Si vous souhaitez installer le logiciel pour votre propre usage,
            vous trouverez <a href="http://framacloud.org/cultiver-son-jardin/installation-de-framadate/">
            un tutoriel détaillé sur Framacloud</a>.
          </p>

          <h2>Remerciements</h2>
          <h3><a href="http://studs.u-strasbg.fr">STUdS !</a></h3>
          <p>Pour leurs contributions techniques ou ergonomiques : Guy, Christophe,
          Julien, Pierre, Romaric, Matthieu, Catherine, Christine, Olivier,
          Emmanuel et Florence</p>

          <h3><a href="https://framagit.org/framasoft/framadate">Framadate</a></h3>
          <p>
            Simon Leblanc, Pierre-Yves Gosset, JosephK, Olivier Perez,
            Antonin, Thomas Citharel et la communauté Framasoft.
          </p>

          <h2>Licence</h2>
          <p>
            Framadate est placé, comme <b><a href="http://studs.u-strasbg.fr">STUdS !</a>,</b>
            sous la licence libre <a href="http://www.cecill.info/licences.fr.html">CeCILL-B</a>.
          </p>
        </section>
        <section v-show="site === 'degooglisons-internet'">
          <h1>Dégooglisons Internet</h1>
          <p>Maquette, intégration et développement : Pierre-Yves Gosset, Christophe Masutti, Flaburgan, JosephK</p>
          <p>Carte et illustrations : Simon « Gee » Giraudot</p>
          <p>Le site utilise le framework libre VueJS.</p>

          <h2>Licence</h2>
          <p>
            Sauf mention contraire, cette page et tous les contenus qui y figurent
            sont placés sous licence libre <span v-html="data.license.ccbysa2fr"></span>.</p>
          <p>Sources :</p>
          <ul>
            <li>
              <a href="https://wiki.framasoft.org/visuels_plm">
                <em>Dégooglisons Internet</em>
              </a>, Simon « Gee » Giraudot, <span v-html="data.license.ccbysa2fr"></span>

            </li>
            <li>
              <a href="https://commons.wikimedia.org/wiki/File:France_map_Lambert-93_topographic-blank.svg">
                <em>France map Lambert-93</em>
              </a>, Eric Gaba, <span v-html="data.license.gnufdl"></span>/<span v-html="data.license.ccbysa4"></span>
            </li>
            <li><a href="https://framagit.org/framasoft/degooglisons">Dépôt git</a></li>
          </ul>
        </section>
        <section v-show="site === 'drive'">
          <h1>Framadrive</h1>
          <p>
            <b class="violet">Frama</b><b class="vert">drive</b> est animé par
            le logiciel libre <a href="https://nextcloud.org">Nextcloud</a>.<br>
            Le code source du thème conçu par JosephK se trouve sur
            <a href="https://framagit.org/framasoft/framadrive"><b class="violet">Frama</b><b class="vert">git</b></a>.
          </p>
        </section>
        <section v-show="site === 'games'">
          <h1>Framagames</h1>
          <p>
            Framagames regroupe différents logiciels libres développés
            par différentes personnes extérieurs à Framasoft.
          </p>
          <p>Séléction, traduction et empaquetage : Cyrille Largillier</p>
          <p>
            Vous trouverez la liste des auteurs des différents jeux
            en cliquant sur leur bouton « Crédits » respectifs.
          </p>
        </section>
        <section v-show="site === 'key'">
          <h1>Framakey</h1>
          <p>La Framakey est réalisée par une équipe de bénévoles du réseau Framasoft :</p>
          <dl class="dl-horizontal">
            <dt>Réalisation</dt>
            <dd>pp (Pascal Parraud) (v1), pyg (Pierre-Yves Gosset) (v1), fat115 (v2)</dd>
          </dl>
          <dl class="dl-horizontal">
            <dt>Packaging<br>et mise à jours</dt>
            <dd>pyg (Pierre-Yves Gosset), fat115 (v1.12+), Cyrille (v1.12+), JosephK (v1.12+)</dd>
          </dl>
          <dl class="dl-horizontal">
            <dt>Graphisme<br>et thème</dt>
            <dd>Ayo (v1.5 ; logo), Detruc (v1.6), Roromis (v1.12)</dd>
          </dl>
          <dl class="dl-horizontal">
            <dt>Rédaction</dt>
            <dd>Pierre-Yves Gosset, Julien Tayon, Eric-Marie Gabalda, Gaëtan Maison, fatt115, Cyrille, JosephK</dd>
          </dl>
          <dl class="dl-horizontal">
            <dt>Communication</dt>
            <dd>Tbernard (Thierry Bernard)</dd>
          </dl>
          <p>
            La Framakey et son équipe doivent beaucoup au projet TheOpenCD
            sans lequel la Framakey n’aurait probablement pas vu le jour.
          </p>
          <p>
            L’idée de la FramaKey doit énormément au travail de John T.Haller,
            sur les versions portables de certains logiciels initalement
            développés pour <a href="https://portableapps.com/">PortableApps.com</a>.
          </p>
          <p>
            Le contenu (texte) de l’interface de la FramaKey est publié sous
            licence <span v-html="data.license.ccbysa2fr"></span>.
          </p>
          <p>
            Les logiciels incluses dans la Framakey sont sous des licences libres diverses.
            Les crédits sont indiqués dans leur interface respective.
            Il en va de même pour les œuvres culturelles (musique, livre…)
          </p>
        </section>
        <section v-show="site === 'lab'">
          <h1>Framalab</h1>
          <p>
            Framalab est le laboratoire de projets de Framasoft.
            Vous y trouverez de nombreux sites web développés - plus ou moins récemment - par Framasoft.
          </p>
          <p>
            Ces derniers peuvent être relativement expérimentaux,
            c'est pourquoi ils ne sont pas nécessairement listés parmi
            <a href="https://fr.wikipedia.org/wiki/Framasoft">les principaux projets du réseau Framasoft</a>.
          </p>
          <p>Réalisation du site : Cyrille Largillier, Pierre-Yves Gosset et JosephK.</p>
        </section>
        <section v-show="site === 'libre'">
          <h1>Framalibre</h1>
          <p>
            L'annuaire de Framasoft est propulsé par
            <a href="https://www.drupal.org/">Drupal</a>,
            logiciel libre sous licence <span v-html="data.license.gpl2"></span>.
          </p>
          <h2>Licence</h2>
          <p>
            Les articles de l'annuaire sont sous double licence
            <span v-html="data.license.ccbysa2fr"></span>
            et <span v-html="data.license.gnufdl"></span>.
          </p>
        </section>
        <section v-show="site === 'mindmap'">
          <h1>Framindmap</h1>
          <p>Framindmap repose sur le logciel libre <a href="http://www.wisemapping.com">Wisemapping</a>.</p>
          <p>Intégration : JosephK</p>
          <h2>Licence</h2>
          <p>
            Wisemapping est sous
            <a href="https://wisemapping.atlassian.net/wiki/pages/viewpage.action?pageId=524357">
              licence <abbr title="Wisemapping Public Licence">WPL</abbr>
            </a>.
          </p>
          <p>
            Auparavant, Framindmap reposait sur le logiciel
            <a href="https://github.com/drichard/mindmaps">Mindmaps</a> de David Richard.
          </p>
        </section>
        <section v-show="site === 'pack'">
          <h1>Framapack</h1>
          <p>Framapack est un logiciel libre réalisé par Simon Leblanc composé :</p>
          <ul>
            <li>d'un site Internet sous licence libre <span v-html="data.license.agpl3"></span>.</li>
            <li>d'un installateur sous licence libre <span v-html="data.license.gpl2"></span>.</li>
          </ul>
          <p>
            Les sources de Framapack sont disponibles selon les termes de
            leur licence respective sur <a href="https://framagit.org/framasoft/framapack/">notre dépôt git</a>.
          </p>
        </section>
        <section v-show="site === 'pad'">
          <h1>Framapad</h1>
          <p>Framapad est animé par le logiciel libre <a href="http://etherpad.org">Etherpad</a>.</p>
        </section>
        <section v-show="site === 'soft'">
          <h1>Framasoft - Accueil</h1>
          <p>Cette page est un portail qui présente l’ensemble des activités et des sites web du réseau Framasoft.</p>
          <dl class="dl-horizontal">
            <dt>Maquette</dt>
            <dd>peupleLà (Sandra Guigonis)</dd>
          </dl>
          <dl class="dl-horizontal">
            <dt>Intégration</dt>
            <dd>peupleLà (Sandra Guigonis), JosephK</dd>
          </dl>
        </section>
        <section v-show="site === 'soutenir'">
          <h1>Site Soutenir</h1>
          <dl class="dl-horizontal">
            <dt>Maquette</dt>
            <dd>peupleLà (Sandra Guigonis) et Gabriel Dejeante sur la base d’un travail de <a href="http://www.smile.fr/">Smile</a></dd>
          </dl>
          <dl class="dl-horizontal">
            <dt>Intégration</dt>
            <dd>Pierre-Yves Gosset et JosephK</dd>
          </dl>
          <p>Le site est propulsé par le logiciel libre <a href="https://www.drupal.org/">Drupal</a>.</p>

          <h2>Licence</h2>
          <p>Sources des images utilisées dans le carrousel :</p>
          <ul>
              <li><a href="https://flic.kr/p/i6ysF1"><em>Dolmen at Mougau-Bihan, Brittany - France</em></a>, Eric Huybrechts, Creative Commons By-SA</li>
              <li><a href="http://vol.framasoft.org/dokuwiki/doku.php?id=conception_affiche">Affiche VOL</a>, Creative Commons By-SA</li>
              <li>Stand Framasoft au RMLL2014, Lamessen, Creative Commons By-SA</li>
              <li><a href="https://flic.kr/p/i6ysF1"><em>Gigabit Switches</em></a>, Michael Himbeault, Creative Commons By</li>
              <li><a href="https://www.framablog.org/index.php/post/2013/11/21/framasoft-campagne-soutien-2013"><em>Framasoft - Campagne 2013</em></a>, LL de Mars, Licence Art Libre</li>
              <li><a href="https://twitter.com/framasoft/status/421956457861353473">AG à Locaux Motiv'</a>, aKa, Creative Commons By-SA</li>
              <li><a href="https://flic.kr/p/k1Wjhe"><em>Merci / Thank you</em></a>, Frédérique Voisin-Demery, Creative Commons By</li>
          </ul>
        </section>
        <section v-show="site === 'sphere'">
          <h1>Framasphère</h1>
          <p>Framasphère repose sur le logiciel libre <a href="https://diasporafoundation.org">Diaspora*</a></p>
          <p>
            Il est compatible avec la majorité des navigateurs web et
            ne requiert aucune installation spécifique pour être utilisé sur mobile.
          </p>
          <p>Il est sous licence <span v-html="data.license.agpl3"></span>.</p>
        </section>
        <section v-show="site === 'vectoriel'">
          <h1>Framavectoriel</h1>
          <p>
            Framavectoriel est une application permettant de réalisser des dessins au format vectoriel (SVG).<br>
            Il s'agit de la version française, traduite par l'association Framasoft,
            de l'application <a href="https://code.google.com/p/svg-edit/">"svg-edit"</a>
          </p>
          <p>Framavectoriel est placé sous licence libre <span v-html="data.license.ccbysa3"></span></p>
        </section>
        <section v-show="site === 'wiki'">
          <h1>Wiki</h1>
          <p>
            Le wiki de Framasoft est propulsé par le logiciel libre
            <a href="https://dokuwiki.org/">Dokuwiki</a>.
          </p>
          <h2>Licence</h2>
          <p>
            Sauf mention contraire, le contenu de ce wiki est placé sous licence
            <span v-html="data.license.ccbysa3"></span>
          </p>
        </section>
        <section v-show="site === 'zic'">
          <h1>Framazic</h1>
          <p>
            Framazic, ou Framaz♪c, est une initiative de l’association à but non-lucratif
            <a href="https://framasoft.org/">Framasoft</a> ayant pour objectif
            la promotion du logiciel et de la culture libres.
          </p>

          <h2>Contexte</h2>
          <p>
            Framazic a été réalisé dans un contexte plutôt morose pour la musique non-libre :
            de grands groupes monopolistiques dominent ce domaine artistique
            et utilisent leurs pouvoirs contre l’intérêt de la majorité :
            des artistes d’abord, qui soit n’arrivent pas à percer dans ce système fermé,
            soit réussissent à se faire connaître mais doivent signer des contrats
            les spoliant honteusement.
            Les citoyens ensuite qui subissent les caprices d’une industrie du divertissement
            refusant de remettre en question la pertinence de son modèle économique,
            et faisant non seulement pression sur les politiques pour faire passer
            des lois contraires à nos libertés fondamentales, mais aussi organisant
            un lavage de cerveau général sur un ton moralisateur.
            Les organisations et personnes diffusant de la musique enfin qui subissent des prix
            de plus en plus exagérés ne servant ni à encourager la création,
            ni à rémunérer les artistes, mais à conforter un système malade
            nourrissant grassement quelques « happy few ».<br>
            C’est dans ce contexte qu’il a paru important de participer à la promotion
            de la musique libre.
            Le but est d’ouvrir ce domaine de la culture au plus grand nombre pour
            à la fois faire connaître, et montrer qu’effectivement une alternative
            est possible et fonctionne.<br>
            Ce projet apparaît aussi chez Framasoft, association à but non-lucrative,
            dans le cadre d’un but de long terme d’élargir les perceptives.
            Framasoft qui a commencé par la promotion du logiciel libre cherche
            maintenant à faire également découvrir la culture libre
            (musiques, films, livres,  connaissances, etc).
          </p>

          <h2>Réalisation</h2>
          <p>
            Framazic est un projet de la galaxie Framasoft, ayant pour but la promotion de la musique libre :
            définition, explication des enjeux liés, de son fonctionnement,
            écoute d’une sélection, liens vers des plateformes d’hébergement de musique.
            Framazic n’est donc pas une plateforme hébergeant de la musique sous licence libre,
            mais une porte d’entrée vers la musique libre, c’est à dire
            un site servant de référence pour tout ceux souhaitant la découvrir.
          </p>
          <p>
            Le contenu de ce site a été rédigé et mis en forme par Martin Gubri
            dans le cadre de son stage chez Framasoft en 2012.
          </p>

          <h2>Remerciements</h2>
          <p>
            Nous remercions chaleureusement <a href="https://aisyk.blogspot.fr/">Aisyk</a>
            pour ses explications détaillées et l’intérêt qu’il a consacré au projet,
            Pierre-Yves Gosset pour sa disponibilité et pour le travail technique et ses conseils avisés,
            Benjamin Jean pour son écoute et ses réponses pertinentes aux questions posées,
            JosephK pour son aide fort précieuse à l’intégration des vidéos sur le site,
            et à tous les membres de l’association pour avoir initié le projet,
            permis et suivis sa réalisation.
          </p>

          <h2>Licence</h2>
          <p>
            Sentez vous libre de copier, diffuser, adapter le contenu de ce site,
            tant que vous attribuez clairement et visiblement la paternité à Framartin et Framasoft.
            Sauf mention contraire (dans les notes de bas de page) pour certains paragraphes
            (contenant des parties reprises de sources externes) et certains médias (images,
            vidéos, etc) le contenu de ce site est mis à disposition selon les termes de la licence
            <span v-html="data.license.ccbysa3fr"></span>.
          </p>
          <p>
            N’hésitez pas à nous contacter pour toutes questions, problèmes,
            modifications à suggérer, nous faire parvenir vos créations (quelque soit le support)
            ou simplement pour nous dire que vous appréciez faire un tour par ici !
          </p>
          <p>
            Le <a href="https://thenounproject.com/noun/headphones/#icon-No1850">logo du casque</a>
            symbolisant les mélomanes a été fait par Dara Ullrich, sous licence
            <span v-html="data.license.ccby3"></span>.
          </p>
          <p>
            Le <a href="https://openclipart.org/detail/171161/acoustic-guitar-silhouette-by-j_alves-171161">logo de guitare</a>
            symbolisant les musiciens a été fait par J_Alves, sous licence
            <span v-html="data.license.cc0"></span>.
          </p>
          <p>
            Le <a href="https://openclipart.org/detail/150715/megaphone-by-worker">logo du mégaphone</a>
            symbolisant les diffuseurs a été fait par worker, sous licence
            <span v-html="data.license.cc0"></span>.
          </p>

          <h2>Technique</h2>
          <p>Ce site est propulsé par <a href="https://wordpress.org/">WordPress</a>.</p>
          <p>
            Il est habillé avec le thème <a href="https://wordpress.org/themes/virtue">Virtue</a>
            et <a href="https://framagit.org/framasoft/framavirtue">quelques retouches</a>.
          </p>
          <p>
            La sélection de musique libre fonctionne avec le plugin libre
            <a href="http://wordpress.org/extend/plugins/html5-jquery-audio-player/">HTML5 jQuery Audio Player</a>.
            Les graphiques dynamiques sont générés à l’aide de <a href="http://www.highcharts.com/">Highcharts</a>
            (sous licence <a href="shop.highsoft.com/highcharts.html">Creative Commons By-Nc 3.0</a>).
          </p>
        </section>
      </div>
    </main>
  </div>
</template>

<script>
import I18n from '../partials/I18n.vue'

export default {
  components: {
    I18n,
  },
  data() {
    return {
      site: window.location.hash.replace('#', ''),
      data: this.$i18n.messages.data,
    }
  },
}
</script>


