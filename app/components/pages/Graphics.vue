<template>
  <div id="charte" class="container ombre apropos">
    <vue-headful
      :title="$t('data.meta.name') + ' - ' + $t('graphics.title')"
    />
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
          <img src="https://framasoft.org/accueil/img/slide-thermo.jpg" alt="" />
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
          <h1><img :src="data['/img/'] + 'logo.png'" alt="" /> <b class="violet">Frama</b><b class="orange">soft</b></h1>
          <h1><img :src="data['/img/'] + 'logo-bleu.png'" alt="" /> <b class="violet">Frama</b><b class="bleu">libre</b></h1>
          <h1><img :src="data['/img/'] + 'logo-rouge.png'" alt="" /> <b class="violet">Frama</b><b class="rouge">blog</b></h1>
          <h1><img :src="data['/img/'] + 'logo-vert.png'" alt="" /> <b class="violet">Frama</b><b class="vert">date</b></h1>
          <h1><img :src="data['/img/'] + 'logo-jaune.png'" alt="" /> <b class="violet">Frama</b><b class="jaune">colibri</b></h1>
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
          <a :href="data['/img/'] + 'sources-logo-set.svg'">ce fichier <abbr>.svg</abbr></a>.
          Les emblèmes sont créés à partir des icônes de
          <a href="https://forkawesome.github.io/Fork-Awesome/">Fork-Awesome</a>
          pour les utiliser dans Inkscape, il faut ajouter le fichier <abbr>.ttf</abbr>
          dans votre dossier <code>~/.fonts</code> (sous Linux).
        </p>
        <div class="col-sm-8 clearfix">
          <h2>Logo</h2>
          <p class="col-sm-6 text-center"><img :src="data['/img/'] + 'biglogo.png'" alt="" style="width:300px"/></p>
          <p class="col-sm-6 text-center"><img :src="data['/img/'] + 'biglogo-noir.png'" alt="" style="width:300px"/></p>
          <p class="row col-sm-12 alert" v-html="$t('credits.main.license.text[3]')"></p>
          <ul class="list-inline text-center">
            <li><img :src="data['/img/'] + 'logo.png'" alt="" /></li>
            <li><img :src="data['/img/'] + 'logo-bleu.png'" alt="" /></li>
            <li><img :src="data['/img/'] + 'logo-rouge.png'" alt="" /></li>
            <li><img :src="data['/img/'] + 'logo-vert.png'" alt="" /></li>
            <li><img :src="data['/img/'] + 'logo-jaune.png'" alt="" /></li>
          </ul>
        </div>
        <div class="col-sm-4 clearfix well">
          <p>Historiquement, les <cite>Pingouins</cite> de LL de Mars sont des manchots : ils ne peuvent pas voler.</p>
          <p class="text-center"><img :src="data['/img/'] + 'mascotte.png'" alt="" style="width:120px"/></p>
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
            <li><img :src="data['/img/'] + 'apple-violet.png'" alt="" width="120" height="120"/></li>
            <li><img :src="data['/img/'] + 'apple-orange.png'" alt="" width="120" height="120"/></li>
            <li><img :src="data['/img/'] + 'apple-bleu.png'" alt="" width="120" height="120"/></li>
            <li><img :src="data['/img/'] + 'apple-rouge.png'" alt="" width="120" height="120"/></li>
            <li><img :src="data['/img/'] + 'apple-vert.png'" alt="" width="120" height="120"/></li>
            <li><img :src="data['/img/'] + 'apple-jaune.png'" alt="" width="120" height="120"/></li>
            <li><img :src="data['/img/'] + 'apple-gris.png'" alt="" width="120" height="120"/></li>
            <li><img :src="data['/img/'] + 'apple-rose.png'" alt="" width="120" height="120"/></li>
          </ul>
          <ul class="list-inline">
            <li><img :src="data['/img/'] + 'fa-ati-bleu.png'" alt="" width="120" height="120"/></li>
            <li><img :src="data['/img/'] + 'fa-ati-rouge.png'" alt="" width="120" height="120"/></li>
            <li><img :src="data['/img/'] + 'fa-ati-vert.png'" alt="" width="120" height="120"/></li>
            <li><img :src="data['/img/'] + 'fa-ati-jaune.png'" alt="" width="120" height="120"/></li>
          </ul>
          <h3>Favicons</h3>
          <ul class="list-inline">
            <li><img :src="data['/img/'] + 'favicon-violet.png'" alt=""/></li>
            <li><img :src="data['/img/'] + 'favicon-orange.png'" alt=""/></li>
            <li><img :src="data['/img/'] + 'favicon-bleu.png'" alt=""/></li>
            <li><img :src="data['/img/'] + 'favicon-rouge.png'" alt=""/></li>
            <li><img :src="data['/img/'] + 'favicon-vert.png'" alt=""/></li>
            <li><img :src="data['/img/'] + 'favicon-jaune.png'" alt=""/></li>
            <li><img :src="data['/img/'] + 'favicon-gris.png'" alt=""/></li>
            <li><img :src="data['/img/'] + 'favicon-rose.png'" alt=""/></li>
          </ul>
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
      data: this.$i18n.messages.data,
    }
  },
}
</script>
