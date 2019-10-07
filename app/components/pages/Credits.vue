<template>
  <div class="container ombre apropos">
    <vue-headful
      :title="`${$t('txt.soft')} - ${$t('credits.title')}`"
    />
    <header class="clearfix header">
      <h1 class="pull-left" v-html="$t('credits.title')"></h1>
      <I18n/>
    </header>
    <main>
      <v-text section="credits.main" />

      <div v-if="$t('hash') !== ''"
        id="site-credits"
        class="well">
        <section v-show="$t('hash') === 'blog'">
          <h1 v-html="$t('html.blog')"></h1>
          <p>Le <span v-html="$t('html.blog')"></span> est propulsé par <a href="https://wordpress.org/">Wordpress</a>.</p>
          <p>
            Sauf mention contraire, comme certaines traductions et documents multimédias,
            sa licence est la <span v-html="$t('license.ccbysa4fr')"></span>.
          </p>
        </section>
        <section v-show="$t('hash') === 'calc'">
          <h1 v-html="$t('html.calc')"></h1>
          <p>
            <span v-html="$t('html.calc')"></span> est basé sur le logiciel libre
            <a :href="$t('src.calc')">EtherCalc</a>,
            lui-même basé sur le logiciel libre
            <a href="https://www.socialtext.net/open/socialcalc">SocialCalc</a>.
          </p>
          <p>
            <span v-html="$t('html.calc')"></span> a été traduit par
            {{ $t('people.martin') }} lors de son stage pour
            <span v-html="$t('html.soft')"></span>.
            Une partie de la traduction est issue du travail de traduction de
            la valeureuse équipe du <a href="http://www.crdp.ac-versailles.fr/">CRDP de Versailles</a>.
          </p>
        </section>
        <section v-show="$t('hash') === 'connard'">
          <h1>Bastard, Inc</h1>
          <p>
            Dessins : <a href="http://ptilouk.net" v-html="$t('people.gee')"></a><br>
            Textes : <a href="http://pouhiou.com" v-html="$t('people.pouhiou')"></a>
          </p>
          <p>
            Ce blog et ses contenus sont directement élevés par leurs auteurs
            dans le <a href="http://creativecommons.org/publicdomain/zero/1.0/">Domaine Public Vivant</a>.
            À vous de vous en emparer.
          </p>
          <p>
            Image de couverture et d'entête : versions dérivées de
            <a href="https://secure.flickr.com/photos/thomasleuthard/8253943837/">Business as usual…</a>
            (<span v-html="$t('license.ccby3')"></span> Thomas Leuthard)
          </p>
        </section>
        <section v-show="$t('hash') === 'contact'">
          <h1>Site de contact</h1>
          <p>Ce site est propulsé par <a href="https://wordpress.org/">WordPress</a>.</p>
          <p>
            Il est habillé avec le thème <a href="https://wordpress.org/themes/virtue">Virtue</a>
            et <a href="https://framagit.org/framasoft/framavirtue">quelques retouches</a>.
          </p>
        </section>
        <section v-show="$t('hash') === 'date'">
          <h1 v-html="$t('html.date')"></h1>
          <h2>Application d'origine</h2>
          <p>
            L'application <span v-html="$t('html.date')"></span> est une instance du logiciel <b><a href="http://studs.u-strasbg.fr">STUdS !</a></b>
            développé à l'Université de Strasbourg depuis 2008.
          </p>
          <p>
            Pour les besoins de <span v-html="$t('html.date')"></span>, STUdS a fait l'objet d'un fork par l'équipe <span v-html="$t('html.soft')"></span>.
            Les sources sont disponibles sur <a :href="$t('git.date')">notre Gitlab</a>.
          </p>
          <p>
            Si vous souhaitez installer le logiciel pour votre propre usage,
            vous trouverez <a :href="$t('link.cloud') +'/fr/cultiver-son-jardin/framadate.html'">
            un tutoriel détaillé sur <span v-html="$t('color.cloud')"></span></a>.
          </p>

          <h2>Remerciements</h2>
          <h3><a href="http://studs.u-strasbg.fr">STUdS !</a></h3>
          <p>Pour leurs contributions techniques ou ergonomiques : Guy, Christophe,
          Julien, Pierre, Romaric, Matthieu, Catherine, Christine, Olivier,
          Emmanuel et Florence</p>

          <h3><a :href="$t('git.date')">Framadate</a></h3>
          <p>
            {{ $t('people.simonl') }}, {{ $t('people.pyg') }}, {{ $t('people.jo') }}, Olivier Perez,
            Antonin, {{ $t('people.tcit') }} et la communauté <span v-html="$t('html.soft')"></span>.
          </p>

          <h2>Licence</h2>
          <p>
            <span v-html="$t('html.date')"></span> est placé, comme <b><a href="http://studs.u-strasbg.fr">STUdS !</a>,</b>
            sous la licence libre <span v-html="$t('license.cecillb')"></span>.
          </p>
        </section>
        <section v-show="$t('hash') === 'degooglisons-internet'">
          <h1>Dégooglisons Internet</h1>
          <p>Maquette, intégration et développement : {{ $t('people.pyg') }}, Christophe Masutti, Flaburgan, {{ $t('people.jo') }}</p>
          <p>Carte et illustrations : Simon « Gee » Giraudot</p>
          <p>Le site utilise le framework libre VueJS.</p>

          <h2>Licence</h2>
          <p>
            Sauf mention contraire, cette page et tous les contenus qui y figurent
            sont placés sous licence libre <span v-html="$t('license.ccbysa2fr')"></span>.</p>
          <p>Sources :</p>
          <ul>
            <li>
              <a href="https://wiki.framasoft.org/visuels_plm">
                <em>Dégooglisons Internet</em>
              </a>, Simon « Gee » Giraudot, <span v-html="$t('license.ccbysa2fr')"></span>

            </li>
            <li>
              <a href="https://commons.wikimedia.org/wiki/File:France_map_Lambert-93_topographic-blank.svg">
                <em>France map Lambert-93</em>
              </a>, Eric Gaba, <span v-html="$t('license.gnufdl')"></span>/<span v-html="$t('license.ccbysa4')"></span>
            </li>
            <li><a :href="$t('git.dio')">Dépôt git</a></li>
          </ul>
        </section>
        <section v-show="$t('hash') === 'drive'">
          <h1 v-html="$t('html.drive')">Framadrive</h1>
          <p>
            <span v-html="$t('html.drive')"></span> est animé par
            le logiciel libre <a href="https://nextcloud.org">Nextcloud</a>.<br>
            Le code source du thème conçu par {{ $t('people.jo') }} se trouve sur
            <a :href="$t('git.drive')"><span v-html="$t('color.git')"></span></a>.
          </p>
        </section>
        <section v-show="$t('hash') === 'games'">
          <h1 v-html="$t('html.games')"></h1>
          <p>
            <span v-html="$t('html.games')"></span> regroupe différents logiciels libres développés
            par différentes personnes extérieurs à <span v-html="$t('html.soft')"></span>.
          </p>
          <p>Séléction, traduction et empaquetage : {{ $t('people.cyrille') }}</p>
          <p>
            Vous trouverez la liste des auteurs des différents jeux
            en cliquant sur leur bouton « Crédits » respectifs.
          </p>
        </section>
        <section v-show="$t('hash') === 'key'">
          <h1 v-html="$t('html.key')"></h1>
          <p>La <span v-html="$t('html.key')"></span> est réalisée par une équipe de bénévoles du réseau <span v-html="$t('html.soft')"></span> :</p>
          <dl class="dl-horizontal">
            <dt>Réalisation</dt>
            <dd>pp (Pascal Parraud) (v1), pyg ({{ $t('people.pyg') }}) (v1), {{ $t('people.fat115') }} (v2)</dd>
          </dl>
          <dl class="dl-horizontal">
            <dt>Packaging<br>et mise à jours</dt>
            <dd>pyg ({{ $t('people.pyg') }}), {{ $t('people.fat115') }} (v1.12+), {{ $t('people.cyrille') }} (v1.12+), {{ $t('people.jo') }} (v1.12+)</dd>
          </dl>
          <dl class="dl-horizontal">
            <dt>Graphisme<br>et thème</dt>
            <dd>Ayo (v1.5 ; logo), Detruc (v1.6), Roromis (v1.12)</dd>
          </dl>
          <dl class="dl-horizontal">
            <dt>Rédaction</dt>
            <dd>{{ $t('people.pyg') }}, Julien Tayon, Eric-Marie Gabalda, Gaëtan Maison, {{ $t('people.fat115') }}, {{ $t('people.cyrille') }}, {{ $t('people.jo') }}</dd>
          </dl>
          <dl class="dl-horizontal">
            <dt>Communication</dt>
            <dd>Tbernard (Thierry Bernard)</dd>
          </dl>
          <p>
            La <span v-html="$t('html.key')"></span> et son équipe doivent beaucoup au projet TheOpenCD
            sans lequel la <span v-html="$t('html.key')"></span> n’aurait probablement pas vu le jour.
          </p>
          <p>
            L’idée de la <span v-html="$t('html.key')"></span> doit énormément au travail de John T.Haller,
            sur les versions portables de certains logiciels initalement
            développés pour <a href="https://portableapps.com/">PortableApps.com</a>.
          </p>
          <p>
            Le contenu (texte) de l’interface de la <span v-html="$t('html.key')"></span> est publié sous
            licence <span v-html="$t('license.ccbysa2fr')"></span>.
          </p>
          <p>
            Les logiciels incluses dans la <span v-html="$t('html.key')"></span> sont sous des licences libres diverses.
            Les crédits sont indiqués dans leur interface respective.
            Il en va de même pour les œuvres culturelles (musique, livre…)
          </p>
        </section>
        <section v-show="$t('hash') === 'lab'">
          <h1 v-html="$t('html.lab')"></h1>
          <p>
            <span v-html="$t('html.lab')"></span> est le laboratoire de projets de <span v-html="$t('html.soft')"></span>.
            Vous y trouverez de nombreux sites web développés - plus ou moins récemment - par <span v-html="$t('html.soft')"></span>.
          </p>
          <p>
            Ces derniers peuvent être relativement expérimentaux,
            c'est pourquoi ils ne sont pas nécessairement listés parmi
            <a :href="$t('link.wikipedia')">les principaux projets du réseau <span v-html="$t('color.soft')"></span></a>.
          </p>
          <p>Réalisation du site : {{ $t('people.cyrille') }}, {{ $t('people.pyg') }} et {{ $t('people.jo') }}.</p>
        </section>
        <section v-show="$t('hash') === 'libre'">
          <h1 v-html="$t('html.libre')"></h1>
          <p>
            L'annuaire de <span v-html="$t('html.soft')"></span> est propulsé par
            <a href="https://www.drupal.org/">Drupal</a>,
            logiciel libre sous licence <span v-html="$t('license.gpl2')"></span>.
          </p>
          <h2>Licence</h2>
          <p>
            Les articles de l'annuaire sont sous double licence
            <span v-html="$t('license.ccbysa2fr')"></span>
            et <span v-html="$t('license.gnufdl')"></span>.
          </p>
        </section>
        <section v-show="$t('hash') === 'mindmap'">
          <h1 v-html="$t('html.mindmap')"></h1>
          <p><span v-html="$t('html.mindmap')"></span> repose sur le logciel libre <a href="http://www.wisemapping.com">Wisemapping</a>.</p>
          <p>Intégration : {{ $t('people.jo') }}</p>
          <h2>Licence</h2>
          <p>
            Wisemapping est sous
            <a href="https://wisemapping.atlassian.net/wiki/pages/viewpage.action?pageId=524357">
              licence <abbr title="Wisemapping Public Licence">WPL</abbr>
            </a>.
          </p>
          <p>
            Auparavant, <span v-html="$t('html.mindmap')"></span> reposait sur le logiciel
            <a href="https://github.com/drichard/mindmaps">Mindmaps</a> de David Richard.
          </p>
        </section>
        <section v-show="$t('hash') === 'pack'">
          <h1 v-html="$t('html.pack')"></h1>
          <p><span v-html="$t('html.pack')"></span> est un logiciel libre réalisé par {{ $t('people.simonl') }} composé :</p>
          <ul>
            <li>d'un site Internet sous licence libre <span v-html="$t('license.agpl3')"></span>.</li>
            <li>d'un installateur sous licence libre <span v-html="$t('license.gpl2')"></span>.</li>
          </ul>
          <p>
            Les sources de <span v-html="$t('html.pack')"></span> sont disponibles selon les termes de
            leur licence respective sur <a :href="$t('git.pack')">notre dépôt git</a>.
          </p>
        </section>
        <section v-show="$t('hash') === 'pad'">
          <h1 v-html="$t('html.pad')"></h1>
          <p>
            <span v-html="$t('html.pad')"></span> est animé par le logiciel libre
            <a href="http://etherpad.org">Etherpad</a>.
          </p>
        </section>
        <section v-show="$t('hash') === 'soft'">
          <h1><span v-html="$t('html.soft')"></span> - Accueil</h1>
          <p>Cette page est un portail qui présente l’ensemble des activités et des sites web du réseau <span v-html="$t('html.soft')"></span>.</p>
          <dl class="dl-horizontal">
            <dt>Maquette</dt>
            <dd>{{ $t('people.sandra') }}</dd>
          </dl>
          <dl class="dl-horizontal">
            <dt>Intégration</dt>
            <dd>{{ $t('people.sandra') }}, {{ $t('people.jo') }}</dd>
          </dl>
        </section>
        <section v-show="$t('hash') === 'soutenir'">
          <h1>Site Soutenir</h1>
          <dl class="dl-horizontal">
            <dt>Maquette</dt>
            <dd>{{ $t('people.sandra') }} et {{ $t('people.gab') }} sur la base d’un travail de <a href="http://www.smile.fr/">Smile</a></dd>
          </dl>
          <dl class="dl-horizontal">
            <dt>Intégration</dt>
            <dd>{{ $t('people.pyg') }} et {{ $t('people.jo') }}</dd>
          </dl>
          <p>Le site est propulsé par le logiciel libre <a href="https://www.drupal.org/">Drupal</a>.</p>

          <h2>Licence</h2>
          <p>Sources des images utilisées dans le carrousel :</p>
          <ul>
              <li><a href="https://flic.kr/p/i6ysF1"><em>Dolmen at Mougau-Bihan, Brittany - France</em></a>, Eric Huybrechts, <span v-html="$t('license.ccbysa4')"></span></li>
              <li><a href="http://vol.framasoft.org/dokuwiki/doku.php?id=conception_affiche">Affiche VOL</a>, <span v-html="$t('license.ccbysa4')"></span></li>
              <li>Stand Framasoft au RMLL2014, {{ $t('people.lam') }}, <span v-html="$t('license.ccbysa4')"></span></li>
              <li><a href="https://flic.kr/p/i6ysF1"><em>Gigabit Switches</em></a>, Michael Himbeault, <span v-html="$t('license.ccby4')"></span></li>
              <li><a href="https://www.framablog.org/index.php/post/2013/11/21/framasoft-campagne-soutien-2013"><em>Framasoft - Campagne 2013</em></a>, {{ $t('people.lldemars') }}, licence <span v-html="$t('license.lal')"></span></li>
              <li><a href="https://twitter.com/framasoft/status/421956457861353473">AG à Locaux Motiv'</a>, {{ $t('people.aka') }}, <span v-html="$t('license.ccbysa4')"></span></li>
              <li><a href="https://flic.kr/p/k1Wjhe"><em>Merci / Thank you</em></a>, Frédérique Voisin-Demery, <span v-html="$t('license.ccby4')"></span></li>
          </ul>
        </section>
        <section v-show="$t('hash') === 'sphere'">
          <h1 v-html="$t('html.sphere')"></h1>
          <p>
            <span v-html="$t('html.sphere')"></span> repose sur le logiciel libre
            <a href="https://diasporafoundation.org">Diaspora*</a>
          </p>
          <p>
            Il est compatible avec la majorité des navigateurs web et
            ne requiert aucune installation spécifique pour être utilisé sur mobile.
          </p>
          <p>Il est sous licence <span v-html="$t('license.agpl3')"></span>.</p>
        </section>
        <section v-show="$t('hash') === 'vectoriel'">
          <h1 v-html="$t('html.vectoriel')"></h1>
          <p>
            <span v-html="$t('html.vectoriel')"></span> est une application permettant de réalisser des dessins au format vectoriel (SVG).<br>
            Il s'agit de la version française, traduite par l'association <span v-html="$t('html.soft')"></span>,
            de l'application <a :href="$t('src.vectoriel')">"svg-edit"</a>
          </p>
          <p><span v-html="$t('html.vectoriel')"></span> est placé sous licence libre <span v-html="$t('license.ccbysa3')"></span></p>
        </section>
        <section v-show="$t('hash') === 'wiki'">
          <h1>Wiki</h1>
          <p>
            Le wiki de Framasoft est propulsé par le logiciel libre
            <a href="https://dokuwiki.org/">Dokuwiki</a>.
          </p>
          <h2>Licence</h2>
          <p>
            Sauf mention contraire, le contenu de ce wiki est placé sous licence
            <span v-html="$t('license.ccbysa3')"></span>
          </p>
        </section>
        <section v-show="$t('hash') === 'zic'">
          <h1 v-html="$t('html.zic')"></h1>
          <p>
            <span v-html="$t('html.zic')"></span>, ou Framaz♪c, est une initiative de l’association à but non-lucratif
            <span v-html="$t('html.soft')"></span> ayant pour objectif
            la promotion du logiciel et de la culture libres.
          </p>

          <h2>Contexte</h2>
          <p>
            <span v-html="$t('html.zic')"></span> a été réalisé dans un contexte plutôt morose pour la musique non-libre :
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
            Ce projet apparaît aussi chez <span v-html="$t('html.soft')"></span>, association à but non-lucrative,
            dans le cadre d’un but de long terme d’élargir les perceptives.
            <span v-html="$t('html.soft')"></span> qui a commencé par la promotion du logiciel libre cherche
            maintenant à faire également découvrir la culture libre
            (musiques, films, livres,  connaissances, etc).
          </p>

          <h2>Réalisation</h2>
          <p>
            <span v-html="$t('html.zic')"></span> est un projet de la galaxie <span v-html="$t('html.soft')"></span>, ayant pour but la promotion de la musique libre :
            définition, explication des enjeux liés, de son fonctionnement,
            écoute d’une sélection, liens vers des plateformes d’hébergement de musique.
            <span v-html="$t('html.zic')"></span> n’est donc pas une plateforme hébergeant de la musique sous licence libre,
            mais une porte d’entrée vers la musique libre, c’est à dire
            un site servant de référence pour tout ceux souhaitant la découvrir.
          </p>
          <p>
            Le contenu de ce site a été rédigé et mis en forme par {{ $t('people.martin') }}
            dans le cadre de son stage chez <span v-html="$t('html.soft')"></span> en 2012.
          </p>

          <h2>Remerciements</h2>
          <p>
            Nous remercions chaleureusement <a href="https://aisyk.blogspot.fr/">Aisyk</a>
            pour ses explications détaillées et l’intérêt qu’il a consacré au projet,
            {{ $t('people.pyg') }} pour sa disponibilité et pour le travail technique et ses conseils avisés,
            {{ $t('people.ben') }} pour son écoute et ses réponses pertinentes aux questions posées,
            {{ $t('people.jo') }} pour son aide fort précieuse à l’intégration des vidéos sur le site,
            et à tous les membres de l’association pour avoir initié le projet,
            permis et suivis sa réalisation.
          </p>

          <h2>Licence</h2>
          <p>
            Sentez vous libre de copier, diffuser, adapter le contenu de ce site,
            tant que vous attribuez clairement et visiblement la paternité à {{ $t('people.martin') }} et <span v-html="$t('html.soft')"></span>.
            Sauf mention contraire (dans les notes de bas de page) pour certains paragraphes
            (contenant des parties reprises de sources externes) et certains médias (images,
            vidéos, etc) le contenu de ce site est mis à disposition selon les termes de la licence
            <span v-html="$t('license.ccbysa3fr')"></span>.
          </p>
          <p>
            N’hésitez pas à nous contacter pour toutes questions, problèmes,
            modifications à suggérer, nous faire parvenir vos créations (quelque soit le support)
            ou simplement pour nous dire que vous appréciez faire un tour par ici !
          </p>
          <p>
            Le <a href="https://thenounproject.com/noun/headphones/#icon-No1850">logo du casque</a>
            symbolisant les mélomanes a été fait par Dara Ullrich, sous licence
            <span v-html="$t('license.ccby3')"></span>.
          </p>
          <p>
            Le <a href="https://openclipart.org/detail/171161/acoustic-guitar-silhouette-by-j_alves-171161">logo de guitare</a>
            symbolisant les musiciens a été fait par J_Alves, sous licence
            <span v-html="$t('license.cc0')"></span>.
          </p>
          <p>
            Le <a href="https://openclipart.org/detail/150715/megaphone-by-worker">logo du mégaphone</a>
            symbolisant les diffuseurs a été fait par worker, sous licence
            <span v-html="$t('license.cc0')"></span>.
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
import I18n from '../partials/I18n.vue';
import VText from '../partials/V-Text.vue';

export default {
  components: {
    I18n,
    VText,
  },
}
</script>


