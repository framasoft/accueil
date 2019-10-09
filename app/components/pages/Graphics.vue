<template>
  <div class="container ombre apropos">
    <header class="clearfix header">
      <h1 class="pull-left" v-html="$t('graphics.title')"></h1>
      <I18n/>
    </header>
    <main>
      <table class="table table-bordered">
        <caption class="sr-only">Palette de couleurs</caption>
        <thead>
          <tr>
            <th class="fb_g7 fc_light" scope="col">
              <span class="name">Gris (g7)</span><br>
              <span class="hex">#616161</span><br>
              <span class="rgb">RGB : 97,97,97</span><br>
              <span class="hsv">HSV : 0,0,38</span>
            </th>
            <th class="fb_f5 fc_light" scope="col">
              <span class="name">Violet (f5)</span><br>
              <span class="hex">#6A5687</span><br>
              <span class="rgb">RGB : 106,86,135</span><br>
              <span class="hsv">HSV : 264,36,53</span>
            </th>
            <th class="fb_b9 fc_light" scope="col">
              <span class="name">Bleu (b9)</span><br>
              <span class="hex">#0C5B7A</span><br>
              <span class="rgb">RGB : 12,91,122</span><br>
              <span class="hsv">HSV : 197,90,48</span>
            </th>
            <th class="fb_v5 fc_light" scope="col">
              <span class="name">Vert (v5)</span><br>
              <span class="hex">#8e9c48</span><br>
              <span class="rgb">RGB : 142,156,72</span><br>
              <span class="hsv">HSV : 70,54,61</span>
            </th>
            <th class="fb_o5 fc_light" scope="col">
              <span class="name">Orange (o5)</span><br>
              <span class="hex">#eb7239</span><br>
              <span class="rgb">RGB : 235,114,57</span><br>
              <span class="hsv">HSV : 19,76,92</span>
            </th>
            <th class="fb_r5 fc_light" scope="col">
              <span class="name">Rouge (r5)</span><br>
              <span class="hex">#cc2d18</span><br>
              <span class="rgb">RGB : 204,45,24</span><br>
              <span class="hsv">HSV : 7,88,80</span>
            </th>
            <th class="fb_m5 fc_light" scope="col">
              <span class="name">Marron (m5)</span><br>
              <span class="hex">#A1887f</span><br>
              <span class="rgb">RGB : 161,136,127</span><br>
              <span class="hsv">HSV : 16,21,63</span>
            </th>
            <th class="fb_j5 fc_light" scope="col">
              <span class="name">Jaune (j5/j6)</span><br>
              <span class="hex">#C48A1B</span><br>
              <span class="rgb">RGB : 196,168,27</span><br>
              <span class="hsv">HSV : 39,86,77</span>
            </th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="fb_g0 fc_dark">#fafafa</td>
            <td class="fb_f0 fc_dark">#EDE6F5</td>
            <td class="fb_b0 fc_dark">#E1F8FC</td>
            <td class="fb_v0 fc_dark">#F4F7E9</td>
            <td class="fb_o0 fc_dark">#FAEBE8</td>
            <td class="fb_r0 fc_dark">#fde0dc</td>
            <td class="fb_m0 fc_dark">#efebe9</td>
            <td class="fb_j0 fc_dark">#FFF8E3</td>
          </tr>
          <tr>
            <td class="fb_g1 fc_dark">#f5f5f5</td>
            <td class="fb_f1 fc_dark">#D3C5E8</td>
            <td class="fb_b1 fc_dark">#B2D5DB</td>
            <td class="fb_v1 fc_dark">#E3EBC7</td>
            <td class="fb_o1 fc_dark">#EBD1C5</td>
            <td class="fb_r1 fc_dark">#f9bdbb</td>
            <td class="fb_m1 fc_dark">#d7ccc8</td>
            <td class="fb_j1 fc_dark">#FFEBB5</td>
          </tr>
          <tr>
            <td class="fb_g2 fc_dark">#eeeeee</td>
            <td class="fb_f2 fc_dark">#B49CD9<i aria-hidden="true" class="pull-right fa fa-fw fa-check"> </i><span class="sr-only">Valide - texte noir</span></td>
            <td class="fb_b2 fc_dark">#83C9D6</td>
            <td class="fb_v2 fc_dark">#D2E0A6</td>
            <td class="fb_o2 fc_dark">#EBB69D</td>
            <td class="fb_r2 fc_dark">#f9bdbb<i aria-hidden="true" class="pull-right fa fa-fw fa-check"> </i><span class="sr-only">Valide - texte noir</span></td>
            <td class="fb_m2 fc_dark">#bcaaa4<i aria-hidden="true" class="pull-right fa fa-fw fa-check"> </i><span class="sr-only">Valide - texte noir</span></td>
            <td class="fb_j2 fc_dark">#FFDD82</td>
          </tr>
          <tr>
            <td class="fb_g3 fc_dark">#e0e0e0</td>
            <td class="fb_f3 fc_light">#9876CC</td>
            <td class="fb_b3 fc_dark">#58C3D6</td>
            <td class="fb_v3 fc_dark">#C0D481</td>
            <td class="fb_o3 fc_dark">#EB9B76</td>
            <td class="fb_r3 fc_dark">#f36c60</td>
            <td class="fb_m3 fc_light">#a1887f</td>
            <td class="fb_j3 fc_dark">#FFCF4F</td>
          </tr>
          <tr>
            <td class="fb_g4 fc_dark">#bdbdbd<i aria-hidden="true" class="pull-right fa fa-fw fa-check"> </i><span class="sr-only">Valide - texte noir</span></td>
            <td class="fb_f4 fc_light">#8157C2<i aria-hidden="true" class="pull-right fa fa-fw fa-check"> </i><span class="sr-only">Valide - texte blanc</span></td>
            <td class="fb_b4 fc_dark">#38BED6<i aria-hidden="true" class="pull-right fa fa-fw fa-check"> </i><span class="sr-only">Valide - texte noir</span></td>
            <td class="fb_v4 fc_dark">#B3CC66<i aria-hidden="true" class="pull-right fa fa-fw fa-check"> </i><span class="sr-only">Valide - texte noir</span></td>
            <td class="fb_o4 fc_dark">#EB8657<i aria-hidden="true" class="pull-right fa fa-fw fa-check"> </i><span class="sr-only">Valide - texte noir</span></td>
            <td class="fb_r4 fc_dark">#e84e40</td>
            <td class="fb_m4 fc_light">#8d6e63<i aria-hidden="true" class="pull-right fa fa-fw fa-check"> </i><span class="sr-only">Valide - texte blanc</span></td>
            <td class="fb_j4 fc_dark">#FFC529<i aria-hidden="true" class="pull-right fa fa-fw fa-check"> </i><span class="sr-only">Valide - texte noir</span></td>
          </tr>
          <tr>
            <td class="fb_g5 fc_light">#949494</td>
            <td class="fb_f5 fc_light">#6A5687<i aria-hidden="true" class="pull-right fa fa-fw fa-header"> </i><span class="sr-only">Framatitre</span></td>
            <td class="fb_b5 fc_light">#18B7D4</td>
            <td class="fb_v5 fc_light">#8E9C48<i aria-hidden="true" class="pull-right fa fa-fw fa-header"> </i><span class="sr-only">Framatitre</span></td>
            <td class="fb_o5 fc_light">#EB7239<i aria-hidden="true" class="pull-right fa fa-fw fa-header"> </i><span class="sr-only">Framatitre</span></td>
            <td class="fb_r5 fc_light">#CC2D18<i aria-hidden="true" class="pull-right fa fa-fw fa-header"> </i><span class="sr-only">Valide - texte blanc</span></td>
            <td class="fb_m5 fc_light">#795548</td>
            <td class="fb_j5 fc_light">#DBA306</td>
          </tr>
          <tr>
            <td class="fb_g6 fc_light">#757575<i aria-hidden="true" class="pull-right fa fa-fw fa-check"> </i><span class="sr-only">Valide - texte blanc</span></td>
            <td class="fb_f6 fc_light">#635182</td>
            <td class="fb_b6 fc_light">#16A7C4</td>
            <td class="fb_v6 fc_light">#7D8C3F</td>
            <td class="fb_o6 fc_light">#DE6933</td>
            <td class="fb_r6 fc_light">#C42D16</td>
            <td class="fb_m6 fc_light">#6d4c41</td>
            <td class="fb_j6 fc_light">#C48A1B<i aria-hidden="true" class="pull-right fa fa-fw fa-header"> </i><span class="sr-only">Framatitre</span></td>
          </tr>
          <tr>
            <td class="fb_g7 fc_light">#616161<i aria-hidden="true" class="pull-right fa fa-fw fa-header"> </i><span class="sr-only">Framatitre</span></td>
            <td class="fb_f7 fc_light">#574778</td>
            <td class="fb_b7 fc_light">#1290B0</td>
            <td class="fb_v7 fc_light">#677835<i aria-hidden="true" class="pull-right fa fa-fw fa-check"> </i><span class="sr-only">Valide - texte blanc</span></td>
            <td class="fb_o7 fc_light">#D1602C</td>
            <td class="fb_r7 fc_light">#B82E12</td>
            <td class="fb_m7 fc_light">#5d4037</td>
            <td class="fb_j7 fc_light">#C47E1B</td>
          </tr>
          <tr>
            <td class="fb_g8 fc_light">#666666</td>
            <td class="fb_f8 fc_light">#4E4070</td>
            <td class="fb_b8 fc_light">#11809E<i aria-hidden="true" class="pull-right fa fa-fw fa-check"> </i><span class="sr-only">Valide - texte blanc</span></td>
            <td class="fb_v8 fc_light">#52632A</td>
            <td class="fb_o8 fc_light">#C05827<i aria-hidden="true" class="pull-right fa fa-fw fa-check"> </i><span class="sr-only">Valide - texte blanc</span></td>
            <td class="fb_r8 fc_light">#AB2A0E</td>
            <td class="fb_m8 fc_light">#4e342e</td>
            <td class="fb_j8 fc_light">#BA5D17<i aria-hidden="true" class="pull-right fa fa-fw fa-check"> </i><span class="sr-only">Valide - texte blanc</span></td>
          </tr>
          <tr>
            <td class="fb_g9 fc_light">#333333</td>
            <td class="fb_f9 fc_light">#3E3363</td>
            <td class="fb_b9 fc_light">#0C5B7A<i aria-hidden="true" class="pull-right fa fa-fw fa-header"> </i><span class="sr-only">Framatitre</span></td>
            <td class="fb_v9 fc_light">#304219</td>
            <td class="fb_o9 fc_light">#A8491D</td>
            <td class="fb_r9 fc_light">#AB2909</td>
            <td class="fb_m9 fc_light">#3e2723</td>
            <td class="fb_j9 fc_light">#A15014</td>
          </tr>
        </tbody>
      </table>

      <p>h1 : <code>font-family: DejaVu Sans, Verdana, Geneva, sans-serif;</code></p>
      <p>h2-h6 : <code>font-family: PTSansCaption,GillSans,sans-serif;</code></p>

      <p>hr.trait : <code>background-color: #EEE; height: 11px;</code></p>
      <p>body : <code>font-family: "DejaVu Sans",Verdana,Geneva,sans-serif;color: #333; background-color: #EEE;</code></p>
      <p>.ombre : <code>background-color: #FFF; box-shadow: box-shadow: 0px 3px 4px rgba(50, 50, 50, 0.2);</code></p>

      <p>a/.btn-link : <code>color: #0C5B7A; text-decoration: underline; text-decoration-style: dotted; </code></p>
      <p>a:hover/.btn-link:hover : <code>color: #635182; text-decoration-style: solid;</code></p>
      <p>.signature : <code>color: #795548;</code></p>

      <div class="well">
        <h2>Feuille de style</h2>
        <p>Le thème s’appuie sur Bootstrap 3.3.5, il contient donc les même classes.</p>
        <p>Il contient en plus les anciennes classes spécifiques à Framasoft :</p>
        <ul>
          <li><code>.frama/.violet</code>, <code>.soft/.orange</code>, <code>.logiciel/.bleu</code>, <code>.culture/.rouge</code>, <code>.services/.vert</code>, <code>.vrac/.jaune</code> pour colorier le texte</li>
          <li><code>.fond-frama</code>, <code>.fond-soft</code>, <code>.fond-logiciel</code>, <code>.fond-culture</code>, <code>.fond-services</code>, <code>.fond-vrac</code> pour utiliser la couleur de titre en arrière plan</li>
        </ul>
        <p>et également les nouvelles classes qui correspondent à la palette ci-dessus.</p>
        <p>
          Les classes sont construites avec un prefix <code>fb_</code> (b = background)
          ou <code>fc_</code> (c = color) suivi de la lettre de la couleur
          (g = gris, b = bleu, v = vert, o = orange, r = rouge, m = marron, j = jaune, f = fiolet 😛)
          et de son rang dans le tableau (de 0 à 9).<br>
          Exemple : pour utiliser le framaviolet #6A5687 comme couleur d’arrière-plan,
          la classe est <code>fb_f5</code>.
        </p>
        <p>
          Pour le texte, il y a 2 classes supplémentaires <code>fc_dark</code> (= #333)
          et <code>fc_light</code> (= #fff).
        </p>

        <h2>En pratique</h2>
        <p><strong>Il faut utiliser le moins de couleurs possible.</strong></p>
        <p>
          L’important étant de respecter les thématiques propre à Framasoft (cohérence interne)
          et d’être logique par rapport au rôle fonctionnel lié aux classes de Bootstrap
          dont le sens est communément admis (cohérence externe) :
        </p>
        <table class="table table-bordered">
          <caption class="sr-only">Logique des couleurs</caption>
          <thead>
            <tr>
              <th scope="col">Couleur</th>
              <th scope="col">Cohérence interne</th>
              <th scope="col">Cohérence externe</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="fc_f5">violet</td>
              <td>ce qui est générique et relatif à Framasoft</td>
              <td>élément primaire</td>
            </tr>
            <tr>
              <td class="fc_b9">bleu</td>
              <td>les logiciels libres (qui requièrent une installation)</td>
              <td>élément secondaire, info, lien</td>
            </tr>
            <tr>
              <td class="fc_r5">rouge</td>
              <td>la culture libre</td>
              <td>danger, erreur, pas ok…</td>
            </tr>
            <tr>
              <td class="fc_o5">orange</td>
              <td>ce qui est générique et relatif à Framasoft</td>
              <td>attention, important…</td>
            </tr>
            <tr>
              <td class="fc_v5">vert</td>
              <td>les services en ligne et les liens vers framacloud</td>
              <td>succès, validé, ok…</td>
            </tr>
            <tr>
              <td class="fc_j5">jaune</td>
              <td>
                les liens « Faire un don » et les outils « en vrac »
                (framacolibri, forum, en vente libre, wiki, etc)
              </td>
              <td></td>
            </tr>
          </tbody>
        </table>

        <p>
          Le <span class="fc_m5">marron</span> ne devrait servir que comme
          couleur de texte alternative au noir/gris.
        </p>

        <p>
          En théorie, pour une page web, une vidéo de démo, un diaporama…
          on ne devrait avoir besoin que de 2 couleurs : le violet + une autre marquée d’un
          <i class="fa fa-header" aria-hidden="true"></i><span class="sr-only">Framatitre</span>.
          Les autres couleurs du nuancier servent uniquement si on recherche
          un effet de contraste ou de profondeur donc en général
          c’est plutôt pour des éléments graphiques ponctuels.
        </p>
        <p aria-hidden="true">
          Exemple, sur cette image il y a 2 couleurs dans les oranges
          (1 pour le texte et l’avant plan, l’autre pour l’arrière plan) +
          1 de contraste dans les gris pour le pinchot :
        </p>
        <p class="text-center" aria-hidden="true">
          <img src="https://framasoft.org/img/slide-thermo.jpg" alt="" />
        </p>

        <h2>Accessibilité</h2>
        <p>
          Les couleurs claires + texte noir sont valides du haut du tableau
          jusqu’au 1er <i class="fa fa-check" aria-hidden="true"></i><span class="sr-only">Valide - texte noir</span>.
        </p>
        <p>
          Les couleurs foncées + texte blanc sont valides du 2ème
          <i class="fa fa-check" aria-hidden="true"> </i><span class="sr-only">Valide - texte blanc</span>
          jusqu’à la fin.
        </p>
        <p>Entre les deux, les couleurs peuvent être rendues accessibles :</p>
        <ul>
          <li>
            en ajoutant un ombrage sur le texte (ex: <code>text-shadow: 0 0 3px rgba(0, 0, 0, 0.7);</code>
            si le texte est blanc). Ça ne passera pas à la validation mais ça améliore la lisibilité ;
            c’est ce qui est utilisé pour les boutons
          </li>
          <li>
            en augmentant la taille du texte au delà de 24px. Ça passe à la validation ;
            c’est ce qui est utilisé pour les framatitres (marqués d’un
            <i class="fa fa-header" aria-hidden="true"></i><span class="sr-only">Framatitre</span>
            dans le tableau)
          </li>
        </ul>
        <p>
          En règle générale, lorsqu’on veut distinguer plusieurs éléments similaires (par exemple des boutons),
          il vaut mieux utiliser <strong>des symboles plutôt que des couleurs</strong> (on peut aussi combiner les 2).
        </p>
        <p>
          Pour que les lecteurs d’écran ne lisent pas les caractères unicodes
          correspondants aux icônes Fork Awesome (ils sont incompréhensibles),
          il faut respecter cette syntaxe :
        </p>
        <pre>&lt;i class="fa fa-fighter-jet" aria-hidden="true"&gt;&lt;/i&gt;</pre>
        <p>
          De même, si l’icône est liée à une action (lien, bouton, etc),
          on applique la même logique qu’avec les images en fournissant
          un texte alternatif pour les lecteurs d’écran et/ou un <code lang="en">title</code>.
          Exemple avec ce bouton
          <a href="https://framasoft.org"  class="btn btn-xs btn-default" title="se rendre sur Framasoft">
            <i class="fa fa-fighter-jet" aria-hidden="true"></i>
            <span class="sr-only">Framasoft</span>
          </a>
        </p>
        <pre>&lt;a href="https://framasoft.org" class="btn btn-xs btn-default" title="se rendre sur Framasoft"&gt;&lt;i class="fa fa-fighter-jet" aria-hidden="true"&gt;&lt;/i&gt;&lt;span class="sr-only"&gt;Framasoft&lt;/span&gt;&lt;/a&gt;</pre>

        <h2>Typographie</h2>
        <ul>
          <li>
            Pensez à mettre des espaces insécables devant les signes de ponctuation double (:!? etc.)
            ou avec les guillemets français («»).<br>
            Rappel : le code HTML de l’espace insécable est &amp;nbsp;</li>
          <li>
            Utilisez des apostrophes typographiques<br>
            Rappel : le code HTML de l’apostrophe typographique est &amp;rsquo;
          </li>
          <li>
            Même si c’est tentant, on ne met pas de majuscule au milieu de
            Framasoft, Framapad… Une au début suffit.
          </li>
        </ul>
      </div> <!-- /.well -->

      <hr class="trait" />

      <div class="row">
        <div class="col-md-5">
          <h1><img :src="`${$t('/')}img/logo.png`" alt="" /> <b class="violet">Frama</b><b class="orange">soft</b></h1>
          <h1><img :src="`${$t('/')}img/logo-bleu.png`" alt="" /> <b class="violet">Frama</b><b class="bleu">libre</b></h1>
          <h1><img :src="`${$t('/')}img/logo-rouge.png`" alt="" /> <b class="violet">Frama</b><b class="rouge">blog</b></h1>
          <h1><img :src="`${$t('/')}img/logo-vert.png`" alt="" /> <b class="violet">Frama</b><b class="vert">date</b></h1>
          <h1><img :src="`${$t('/')}img/logo-jaune.png`" alt="" /> <b class="violet">Frama</b><b class="jaune">colibri</b></h1>
          <h1>Titre h1</h1>
          <hr class="trait" />
          <h2>Titre h2</h2>
          <h3>Titre h3</h3>
          <h4>Titre h4</h4>
          <h5>Titre h5</h5>
          <h6>Titre h6</h6>
        </div>
        <div class="col-md-7">
          <div class="row">
            <p>
              <button type="button" class="btn btn-default">Default <span class="badge">1</span></button>
              <button type="button" class="btn btn-primary">Primary <span class="badge">2</span></button>
              <button type="button" class="btn btn-success">Success <span class="badge">3</span></button>
              <button type="button" class="btn btn-info">Info <span class="badge">4</span></button>
              <button type="button" class="btn btn-warning">Warning <span class="badge">5</span></button>
              <button type="button" class="btn btn-danger">Danger <span class="badge">6</span></button>
              <button type="button" class="btn btn-soutenir"><i class="fa fa-fw fa-heart" aria-hidden="true"> </i>Soutenir</button>
              <button type="button" class="btn btn-link">Link <span class="badge">7</span></button>
            </p>
            <p>
              <button type="button" class="btn btn-default active ">Default</button>
              <button type="button" class="btn btn-primary active">Primary</button>
              <button type="button" class="btn btn-success active">Success</button>
              <button type="button" class="btn btn-info active">Info</button>
              <button type="button" class="btn btn-warning active">Warning</button>
              <button type="button" class="btn btn-danger active">Danger</button>
              <button type="button" class="btn btn-link active">Link</button>
            </p>
            <p>
              <button type="button" disabled="disabled" class="btn btn-default">Default</button>
              <button type="button" disabled="disabled" class="btn btn-primary">Primary</button>
              <button type="button" disabled="disabled" class="btn btn-success">Success</button>
              <button type="button" disabled="disabled" class="btn btn-info">Info</button>
              <button type="button" disabled="disabled" class="btn btn-warning">Warning</button>
              <button type="button" disabled="disabled" class="btn btn-danger">Danger</button>
              <button type="button" disabled="disabled" class="btn btn-link">Link</button>
            </p>
            <p>
              <span class="label label-default">Default</span>
              <span class="label label-primary">Primary</span>
              <span class="label label-success">Success</span>
              <span class="label label-info">Info</span>
              <span class="label label-warning">Warning</span>
              <span class="label label-danger">Danger</span>
            </p>
          </div>

          <div class="row">
            <div class="col-md-6">
              <div class="well" style="border:1px solid #aaa;background:#fff; border-radius:5px">
                <p>
                  <a class="text-muted" href="#">Lien</a> -
                  <a class="text-primary" href="#">Lien</a> -
                  <a class="text-success" href="#">Lien</a> -
                  <a class="text-info" href="#">Lien</a> -
                  <a class="text-warning" href="#">Lien</a> -
                  <a class="text-danger" href="#">Lien</a>
                </p>
                <p class="text-muted"><a href="#">Lien</a> Fusce dapibus, tellus ac cursus commodo, tortor mauris nibh.</p>
                <p class="text-primary"><a href="#">Lien</a> Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                <p class="text-success"><a href="#">Lien</a> Duis mollis, est non commodo luctus, nisi erat porttitor ligula.</p>
                <p class="text-info"><a href="#">Lien</a> Maecenas sed diam eget risus varius blandit sit amet non magna.</p>
                <p class="text-warning"><a href="#">Lien</a> Etiam porta sem malesuada magna mollis euismod.</p>
                <p class="text-danger"><a href="#">Lien</a> Donec ullamcorper nulla non metus auctor fringilla.</p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="well" style="border:1px solid #aaa;background:#fff; border-radius:5px">
                <p>
                  <a href="#">Lien</a> -
                  <a class="bg-primary" href="#">Lien</a> -
                  <a class="bg-success" href="#">Lien</a> -
                  <a class="bg-info" href="#">Lien</a> -
                  <a class="bg-warning" href="#">Lien</a> -
                  <a class="bg-danger" href="#">Lien</a>
                </p>
                <p><a href="#">Lien</a> Fusce dapibus, tellus ac cursus commodo, tortor mauris nibh.</p>
                <p class="bg-primary"><a href="#">Lien</a> Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                <p class="bg-success"><a href="#">Lien</a> Duis mollis, est non commodo luctus, nisi erat porttitor ligula.</p>
                <p class="bg-info"><a href="#">Lien</a> Maecenas sed diam eget risus varius blandit sit amet non magna.</p>
                <p class="bg-warning"><a href="#">Lien</a> Etiam porta sem malesuada magna mollis euismod.</p>
                <p class="bg-danger"><a href="#">Lien</a> Donec ullamcorper nulla non metus auctor fringilla.</p>
              </div>
            </div>
          </div>
        </div>

      </div>
      <div class="row">
          <div class="col-md-8">
            <div class="alert alert-success">
              <strong>Well done!</strong> You successfully read <a href="#" class="alert-link">this important alert message</a>.
            </div>
            <div class="alert alert-info">
              <strong>Heads up!</strong> This <a href="#" class="alert-link">alert needs your attention</a>, but it's not super important.
            </div>
            <div class="alert alert-warning">
              <strong>Warning!</strong> Better check yourself, you're <a href="#" class="alert-link">not looking too good</a>.
            </div>
            <div class="alert alert-danger">
              <strong>Oh snap!</strong> <a href="#" class="alert-link">Change a few things up</a> and try submitting again.
            </div>

            <Carousel/>

          </div>

          <div class="col-md-4">
            <div class="panel panel-primary">
              <div class="panel-heading"><h3 class="panel-title">Panel title</h3></div>
              <div class="panel-body"> Panel content </div>
            </div>
            <div class="panel panel-success">
              <div class="panel-heading"><h3 class="panel-title">Panel title</h3></div>
              <div class="panel-body"> Panel content </div>
            </div>
            <div class="panel panel-info">
              <div class="panel-heading"><h3 class="panel-title">Panel title</h3></div>
              <div class="panel-body"> Panel content </div>
            </div>
            <div class="panel panel-warning">
              <div class="panel-heading"><h3 class="panel-title">Panel title</h3></div>
              <div class="panel-body"> Panel content </div>
            </div>
            <div class="panel panel-danger">
              <div class="panel-heading"><h3 class="panel-title">Panel title</h3></div>
              <div class="panel-body"> Panel content </div>
            </div>
          </div>

      </div>

      <hr class="trait" />

      <div class="row">
        <h1>Images</h1>
        <p>
          Les sources de toutes ces images se trouvent dans
          <a :href="`${$t('/')}img/sources-logo-set.svg`">ce fichier <abbr>.svg</abbr></a>.
          Les emblèmes sont créés à partir des icônes de
          <a href="https://forkawesome.github.io/Fork-Awesome/">Fork-Awesome</a>
          pour les utiliser dans Inkscape, il faut ajouter le fichier <abbr>.ttf</abbr>
          dans votre dossier <code>~/.fonts</code> (sous Linux).
        </p>
        <div class="col-sm-8 clearfix">
          <h2>Logo</h2>
          <p class="col-sm-6 text-center"><img :src="`${$t('/')}img/biglogo.png`" alt="" style="width:300px"/></p>
          <p class="col-sm-6 text-center"><img :src="`${$t('/')}img/biglogo-noir.png`" alt="" style="width:300px"/></p>
          <p class="row col-sm-12 alert" v-html="$t('credits.main.p1[3]')"></p>
          <ul class="list-inline text-center">
            <li><img :src="`${$t('/')}img/logo.png`" alt="" /></li>
            <li><img :src="`${$t('/')}img/logo-bleu.png`" alt="" /></li>
            <li><img :src="`${$t('/')}img/logo-rouge.png`" alt="" /></li>
            <li><img :src="`${$t('/')}img/logo-vert.png`" alt="" /></li>
            <li><img :src="`${$t('/')}img/logo-jaune.png`" alt="" /></li>
          </ul>
        </div>
        <div class="col-sm-4 clearfix well">
          <p>Historiquement, les <cite>Pingouins</cite> de {{ $t('people.lldemars') }} sont des manchots : ils ne peuvent pas voler.</p>
          <p class="text-center"><img :src="`${$t('/')}img/pingouinVolantRefait.png`" alt="" style="width:120px"/></p>
          <p>
            Ce manchot (<a href="http://tofz.org/?displaypic=.priv8%2Fpingouins%2F42.jpg&amp;non_lr=">planche originale</a>)
            a été choisi car il sort de sa condition en agissant différemment de ses congénères.
            Ça lui demande de gros efforts aussi bien physiquement que socialement
            et puis il a un air un peu cinglé aussi… un peu comme bien des libristes 😉
          </p>
        </div>
        <div class="col-sm-12">
          <h2>Icônes</h2>
          <h3>Apple Touch Icons</h3>
          <ul class="list-inline">
            <li><img :src="`${$t('/')}img/apple-violet.png`" alt="" width="120" height="120"/></li>
            <li><img :src="`${$t('/')}img/apple-orange.png`" alt="" width="120" height="120"/></li>
            <li><img :src="`${$t('/')}img/apple-bleu.png`" alt="" width="120" height="120"/></li>
            <li><img :src="`${$t('/')}img/apple-rouge.png`" alt="" width="120" height="120"/></li>
            <li><img :src="`${$t('/')}img/apple-vert.png`" alt="" width="120" height="120"/></li>
            <li><img :src="`${$t('/')}img/apple-jaune.png`" alt="" width="120" height="120"/></li>
            <li><img :src="`${$t('/')}img/apple-gris.png`" alt="" width="120" height="120"/></li>
            <li><img :src="`${$t('/')}img/apple-rose.png`" alt="" width="120" height="120"/></li>
          </ul>
          <ul class="list-inline">
            <li><img :src="`${$t('/')}img/fa-ati-bleu.png`" alt="" width="120" height="120"/></li>
            <li><img :src="`${$t('/')}img/fa-ati-rouge.png`" alt="" width="120" height="120"/></li>
            <li><img :src="`${$t('/')}img/fa-ati-vert.png`" alt="" width="120" height="120"/></li>
            <li><img :src="`${$t('/')}img/fa-ati-jaune.png`" alt="" width="120" height="120"/></li>
          </ul>
          <h3>Favicons</h3>
          <ul class="list-inline">
            <li><img :src="`${$t('/')}img/favicon-violet.png`" alt=""/></li>
            <li><img :src="`${$t('/')}img/favicon-orange.png`" alt=""/></li>
            <li><img :src="`${$t('/')}img/favicon-bleu.png`" alt=""/></li>
            <li><img :src="`${$t('/')}img/favicon-rouge.png`" alt=""/></li>
            <li><img :src="`${$t('/')}img/favicon-vert.png`" alt=""/></li>
            <li><img :src="`${$t('/')}img/favicon-jaune.png`" alt=""/></li>
            <li><img :src="`${$t('/')}img/favicon-gris.png`" alt=""/></li>
            <li><img :src="`${$t('/')}img/favicon-rose.png`" alt=""/></li>
          </ul>

          <h3>Par service avec emblème Fork Awesome</h3>
          <p>
            Les icônes sont générées dynamiquement en javascript à partir d’un template <abbr>SVG</abbr>.
            Fork Awesome doit être installé sur le pc pour que les emblèmes apparaissent correctement.
          </p>

          <form class="form-horizontal col-sm-6">
            <div class="form-group">
              <label for="icon" class="col-sm-2 control-label">Icône</label>
              <div class="col-sm-6">
                <i id="framicon" ref="framicon" :class="`hidden fa fa-${ati.icon}`" aria-hidden="true"></i>
                <input id="icon"
                  v-model="ati.icon"
                  type="text"
                  class="form-control"
                  @focusout="setUnicode" />
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-2 control-label">Couleur</label>
              <div class="col-sm-10">
                <div class="btn-group" role="group">
                  <button type="button" class="btn btn-primary"
                    @click="ati.border='#6A5687'; ati.bec='#EB7239';">
                    Violet
                  </button>
                  <button type="button" class="btn btn-warning"
                    @click="ati.border='#EB7239'; ati.bec='#EB7239';">
                    Orange
                  </button>
                  <button type="button" class="btn btn-info"
                    @click="ati.border='#0C5B7A'; ati.bec='#0C5B7A';">
                    Bleu
                  </button>
                  <button type="button" class="btn btn-danger"
                    @click="ati.border='#CC2D18'; ati.bec='#CC2D18';">
                    Rouge
                  </button>
                  <button type="button" class="btn btn-success"
                    @click="ati.border='#8E9C48'; ati.bec='#8E9C48';">
                    Vert
                  </button>
                  <button type="button" class="btn btn-soutenir"
                    @click="ati.border='#C48A1B'; ati.bec='#C48A1B';">
                    Jaune
                  </button>
                </div>
              </div>
            </div>
            <div class="form-group">
              <div class="col-sm-offset-2 col-sm-10">
                <button type="button" class="btn btn-default"
                  @click="svg2png('round');svg2png('fav');">Créer l’image png</button>
              </div>
            </div>
          </form>

          <div id="pinchots" class="col-sm-6">
            <div id="svg_round" class="hidden" ref="svg_round">
              <svg id="svg5828"
                xmlns:dc="http://purl.org/dc/elements/1.1/"
                xmlns:cc="http://creativecommons.org/ns#"
                xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#"
                xmlns:svg="http://www.w3.org/2000/svg"
                xmlns="http://www.w3.org/2000/svg"
                version="1.1" width="120.00955" height="120.00955">
                <defs id="defs5830" />
                <metadata id="metadata5833">
                  <rdf:rdf>
                    <cc:work rdf:about="">
                      <dc:format>image/svg+xml</dc:format>
                      <dc:type
                        rdf:resource="http://purl.org/dc/dcmitype/StillImage" />
                      <dc:title />
                    </cc:work>
                  </rdf:rdf>
                  <rdf:RDF>
                    <cc:Work rdf:about="">
                      <dc:format>image/svg+xml</dc:format>
                      <dc:type
                         rdf:resource="http://purl.org/dc/dcmitype/StillImage" />
                      <dc:title></dc:title>
                    </cc:Work>
                  </rdf:RDF>
                </metadata>
                <g transform="translate(-179.9822,-523.79426)" id="layer1">
                  <path
                    d="m 1893.6676,538.21155 a 50,50 0 1 1 -100,0 50,50 0 1 1 100,0 z"
                    transform="matrix(1.149104,0,0,1.149104,-1878.5658,-34.670288)"
                    id="path4856"
                    :style="'fill:#ffffff;fill-opacity:1;stroke:' + ati.border + ';stroke-width:4.42919111;stroke-miterlimit:4;stroke-opacity:1;stroke-dasharray:none;display:inline'" />
                  <g
                    transform="matrix(0.21653471,0,0,0.21653471,202.18811,413.35198)"
                    id="g3934-8-8-2"
                    style="fill:#eb7239;fill-opacity:1;display:inline">
                    <path
                      d="m 266.05688,662.62964 c -5.06605,1.49312 2.53872,6.05651 3.03822,8.98435 1.40892,2.9493 4.36632,4.98744 6.806,7.12979 4.36237,3.28368 8.50309,7.00504 13.73127,8.87149 7.24409,4.97783 11.06985,11.74361 12.96634,24.70447 -9.08991,-2.17901 -15.96923,-2.83244 -31.39817,-12.58792 16.07761,13.45629 25.98461,19.2946 31.91959,24.61446 5.75253,6.20655 16.11417,16.71079 26.033,32.33675 0.0472,-20.28344 -8.50609,-45.21733 -19.52164,-62.22272 -10.33801,-13.68807 -24.56125,-24.25619 -40.18044,-31.18242 -1.07809,-0.41847 -2.22799,-0.72036 -3.39417,-0.64825 z"
                      id="path3926-0-8-9"
                      :style="'fill:' + ati.bec + ';fill-opacity:0.94117647;stroke:' + ati.bec + ';stroke-opacity:0.94117647'" />
                  </g>
                  <path
                    d="m 275.41951,598.61739 c -0.8465,-0.32032 -1.828,-0.25816 -2.6152,0.19527 -1.0541,0.56332 -1.6587,1.77674 -1.6387,2.95025 0.035,1.16785 0.7811,2.28702 1.8648,2.73632 0.8357,0.38344 1.8385,0.42852 2.6745,0.0209 0.8366,-0.36704 1.4537,-1.13588 1.7032,-2.00661 0.2919,-0.88385 0.1494,-1.88745 -0.368,-2.65992 -0.3755,-0.5869 -0.9658,-1.01096 -1.6206,-1.23625 z"
                    id="path2885-0-6-1-5-7"
                    :style="'fill:' + ati.bec + ';fill-opacity:0.94117647;stroke:' + ati.bec + ';stroke-width:0.70062006;stroke-miterlimit:4;stroke-opacity:0.94117647;stroke-dasharray:none;display:inline'" />
                  <path
                    d="m 272.47311,609.51715 c -0.7026,-0.26573 -1.5167,-0.21421 -2.1698,0.16196 -0.8744,0.46732 -1.3758,1.47391 -1.3594,2.4474 0.03,0.96875 0.6478,1.89716 1.5473,2.26986 0.693,0.31808 1.525,0.35551 2.2183,0.0174 0.6939,-0.30449 1.206,-0.94228 1.4128,-1.6646 0.2425,-0.73319 0.124,-1.5657 -0.305,-2.20651 -0.3115,-0.48687 -0.8014,-0.83863 -1.3442,-1.02553 z"
                    id="path2885-07-2-0-0-9"
                    :style="'fill:'+ ati.bec + ';fill-opacity:0.94117647;stroke:' + ati.bec + ';stroke-width:0.70062006;stroke-miterlimit:4;stroke-opacity:0.94117647;stroke-dasharray:none;display:inline'" />
                  <g
                    transform="matrix(2.73331,0.05667984,0.05918551,-2.6175924,-460.001,1980.1635)"
                    id="g2891-9-4-3-7-6-0-2-0"
                    style="fill:#000000;fill-opacity:1;stroke:#000000;stroke-width:0.39928606;stroke-miterlimit:4;stroke-opacity:1;stroke-dasharray:none;display:inline">
                    <path
                      d="m 674.375,-578.53125 c -2.88874,0.13382 -4.02185,1.21162 -0.4375,3.8125 16.75952,7.72369 34.50437,14.0216 49.5625,24.6875 33.69135,23.86404 55.37724,58.45628 66.46875,98.4375 6.4711,23.32625 5.50182,37.53462 9.3125,61 2.49985,14.10302 9.6008,32.64797 17.25,48.46875 10.34609,25.13897 26.03497,48.36096 41.8125,65.125 17.45317,17.33638 45.94157,36.88089 88.125,47.84375 17.51897,3.93804 27.59779,5.58745 32.28125,5.5 6.82876,1.83509 14.46693,2.06633 8.3125,-2.84375 -17.50502,-9.04305 -39.44068,-17.05625 -51.65625,-28.6875 -30.08055,-28.64143 -51.26922,-62.9643 -61.4375,-106.0625 -3.8576,-16.35056 -5.76057,-32.23727 -7.25,-45.90625 0.44893,-11.80125 1.76861,-24.10565 3.71875,-37.25 2.21078,-17.66517 14.05408,-32.18976 25.125,-43.34375 10.24538,-6.90474 18.86015,-9.99947 26.46875,-8.375 11.36409,2.56284 36.38452,7.96249 50.34375,8.34375 5.66185,-12.76922 -6.62196,-30.22377 -21.375,-42.15625 26.01322,-13.31492 50.7253,-19.35509 64.125,-23.34375 10.5249,-3.23303 -18.05733,-0.9422 -32.625,1.5 -19.55453,2.83292 -37.31898,4.61888 -54.8125,8.71875 -13.42363,-6.6494 -27.18496,-8.56114 -40.21875,-7.125 -7.20259,0.1264 -15.61695,1.66179 -21.65625,4.0625 -17.28316,6.75404 -36.20675,22.02737 -42.5625,36.5 -0.96011,1.43594 -1.96534,3.43123 -3,5.75 -5.17922,-8.28599 -11.05274,-15.78098 -17.40625,-22.03125 -30.81145,-30.79903 -73.31665,-36.0387 -115.03125,-49.71875 -3.10645,-1.69535 -9.72341,-3.0783 -13.4375,-2.90625 z M 889.25,-549.625 c 7.40203,0.003 13.28548,1.62505 13.5625,5.5 3.07504,8.29747 -15.17482,15.98417 -24.53125,18.59375 -11.46641,3.02402 -24.78893,11.34632 -33.21875,19.0625 -9.47256,6.82698 -20.87876,23.91281 -25.5625,34.3125 -17.58852,31.33288 -4.02166,-24.00528 4.5625,-36.84375 6.35575,-14.47263 25.27934,-29.77721 42.5625,-36.53125 6.30796,-2.50751 15.22297,-4.09641 22.625,-4.09375 z"
                      transform="matrix(0.07900954,0.00171083,0.00178646,-0.08250237,179.0648,504.56302)"
                      id="path2893-7-8-3-2-2-8-2-1"
                      style="fill:#000000;fill-opacity:1;stroke:#000000;stroke-width:4.94435215;stroke-miterlimit:4;stroke-opacity:1;stroke-dasharray:none" />
                  </g>
                  <path
                    d="m 1883.6676,510.71152 a 17.5,17.5 0 1 1 -35,0 17.5,17.5 0 1 1 35,0 z"
                    transform="matrix(1.7426238,0,0,1.7426238,-3037.2366,-280.71949)"
                    id="path5626"
                    :style="'fill:' + ati.border + ';fill-opacity:1;stroke:none;display:inline'" />
                  <text
                    x="214" y="622" text-anchor="middle" alignment-baseline="middle"
                    id="text5115" xml:space="preserve"
                    style="font-size:36px;font-style:normal;font-variant:normal;font-weight:normal;font-stretch:normal;line-height:125%;letter-spacing:0px;word-spacing:0px;fill:#ffffff;fill-opacity:1;stroke:none;display:inline;font-family:ForkAwesome;-inkscape-font-specification:ForkAwesome">{{ ati.unicode }}</text>
                </g>
              </svg>
            </div>
            <canvas id="canvas_round" ref="canvas_round" width="120" height="120"></canvas>
            <div id="svg_fav" class="hidden" ref="svg_fav">
              <svg id="svg5920"
                xmlns:dc="http://purl.org/dc/elements/1.1/"
                xmlns:cc="http://creativecommons.org/ns#"
                xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#"
                xmlns:svg="http://www.w3.org/2000/svg"
                xmlns="http://www.w3.org/2000/svg"
                version="1.1" width="32" height="32">
                <defs id="defs5922" />
                <metadata id="metadata5925">
                  <rdf:rdf>
                    <cc:work rdf:about="">
                      <dc:format>image/svg+xml</dc:format>
                      <dc:type
                         rdf:resource="http://purl.org/dc/dcmitype/StillImage" />
                      <dc:title />
                    </cc:work>
                  </rdf:rdf>
                  <rdf:RDF>
                    <cc:Work rdf:about="">
                      <dc:format>image/svg+xml</dc:format>
                      <dc:type
                         rdf:resource="http://purl.org/dc/dcmitype/StillImage" />
                      <dc:title></dc:title>
                    </cc:Work>
                  </rdf:RDF>
                </metadata>
                <g transform="translate(-252.36127,-510.8581)"
                  id="layer1">
                  <path
                    d="m 1883.6676,510.71152 a 17.5,17.5 0 1 1 -35,0 17.5,17.5 0 1 1 35,0 z"
                    transform="matrix(0.91428571,0,0,0.91428571,-1437.8491,59.921857)"
                    id="path5626"
                    :style="'fill:' + ati.border + ';fill-opacity:1;stroke:none;display:inline'" />
                  <text
                    x="268" y="534" text-anchor="middle" alignment-baseline="middle"
                    id="text5115" xml:space="preserve"
                    style="font-size:20px;font-style:normal;font-variant:normal;font-weight:normal;font-stretch:normal;line-height:125%;letter-spacing:0px;word-spacing:0px;fill:#ffffff;fill-opacity:1;stroke:none;display:inline;font-family:ForkAwesome;">{{ ati.unicode }}</text>
                </g>
              </svg>
            </div>
            <canvas id="canvas_fav" ref="canvas_fav" width="32" height="32"></canvas>
          </div>
        </div>
      </div>
    </main>
  </div>
</template>

<script>
import I18n from '../partials/I18n.vue'
import Carousel from '../partials/Carousel.vue'

export default {
  components: {
    I18n,
    Carousel,
  },
  data() {
    return {
      ati: {
        border: '#6A5687',
        bec: '#EB7239',
        icon: 'fighter-jet',
        unicode: '',
      }
    }
  },
  mounted() {
    this.setUnicode();
  },
  methods: {
    setUnicode() {
      this.ati.unicode = getComputedStyle(this.$refs['framicon'],':before').content[1];
    },
    svg2png(id) {
      const canvas = this.$refs['canvas_' + id];
      const ctx = canvas.getContext('2d');

      const img = new Image();
      const svg = new Blob([this.$refs['svg_' + id].innerHTML], {type: "image/svg+xml;charset=utf-8"});
      const url = self.URL.createObjectURL(svg);
      img.onload = () => { ctx.drawImage(img, 0, 0) };
      img.src = url;
    }
  }
}
</script>
