<template>
  <b-card bg-variant="light">
    <h2>Feuille de style</h2>
    <p>Le thème s’appuie sur Bootstrap 4.3, il contient donc les même classes.</p>
    <p>Il contient en plus les anciennes classes spécifiques à Framasoft&nbsp;:</p>
    <ul>
      <li>
        <code>.frama/.violet</code>,
        <code>.soft/.orange</code>,
        <code>.logiciel/.bleu</code>,
        <code>.culture/.rouge</code>,
        <code>.services/.vert</code>,
        <code>.vrac/.jaune</code>
        pour colorier le texte
      </li>
      <li>
        <code>.fond-frama</code>,
        <code>.fond-soft</code>,
        <code>.fond-logiciel</code>,
        <code>.fond-culture</code>,
        <code>.fond-services</code>,
        <code>.fond-vrac</code>
        pour utiliser la couleur de titre en arrière plan
      </li>
    </ul>
    <p>et également les nouvelles classes qui correspondent à la palette ci-dessus.</p>
    <p>
      Les classes sont construites avec un prefix <code>fb_</code> (b = background)
      ou <code>fc_</code> (c = color) suivi de la lettre de la couleur
      (g = gris, b = bleu, v = vert, o = orange, r = rouge, m = marron, j = jaune, f = fiolet 😛)
      et de son rang dans le tableau (de 0 à 9).<br />
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
      dont le sens est communément admis (cohérence externe)&nbsp;:
    </p>
    <table class="table table-bordered">
      <caption class="sr-only">
        Logique des couleurs
      </caption>
      <thead>
        <tr>
          <th scope="col">
            Couleur
          </th>
          <th scope="col">
            Cohérence interne
          </th>
          <th scope="col">
            Cohérence externe
          </th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td class="fc_f5">
            violet
          </td>
          <td>ce qui est générique et relatif à Framasoft</td>
          <td>élément primaire</td>
        </tr>
        <tr>
          <td class="fc_b9">
            bleu
          </td>
          <td>les logiciels libres (qui requièrent une installation)</td>
          <td>élément secondaire, info, lien</td>
        </tr>
        <tr>
          <td class="fc_r5">
            rouge
          </td>
          <td>la culture libre</td>
          <td>danger, erreur, pas ok…</td>
        </tr>
        <tr>
          <td class="fc_o5">
            orange
          </td>
          <td>ce qui est générique et relatif à Framasoft</td>
          <td>attention, important…</td>
        </tr>
        <tr>
          <td class="fc_v5">
            vert
          </td>
          <td>les services en ligne et les liens vers framacloud</td>
          <td>succès, validé, ok…</td>
        </tr>
        <tr>
          <td class="fc_j5">
            jaune
          </td>
          <td>
            les liens «&nbsp;Faire un don&nbsp;» et les outils «&nbsp;en vrac&nbsp;»
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
      on ne devrait avoir besoin que de 2 couleurs&nbsp;: le violet + une autre marquée d’un
      <icon
        name="header"
        label="Framatitre"
        sr-only
      />.
      Les autres couleurs du nuancier servent uniquement si on recherche
      un effet de contraste ou de profondeur donc en général
      c’est plutôt pour des éléments graphiques ponctuels.
    </p>
    <p aria-hidden="true">
      Exemple, sur cette image il y a 2 couleurs dans les oranges
      (1 pour le texte et l’avant plan, l’autre pour l’arrière plan) +
      1 de contraste dans les gris pour le pinchot&nbsp;:
    </p>
    <p
      class="text-center"
      aria-hidden="true"
    >
      <img
        src="https://framasoft.org/img/slide-thermo.jpg"
        alt=""
      />
    </p>

    <h2>Accessibilité</h2>
    <p>
      Les couleurs claires + texte noir sont valides du haut du tableau
      jusqu’au 1er
      <icon
        name="check"
        label="Valide - texte noir"
        sr-only
      />.
    </p>
    <p>
      Les couleurs foncées + texte blanc sont valides du 2ème
      <icon
        name="check"
        label="Valide - texte blanc"
        sr-only
      />
      jusqu’à la fin.
    </p>
    <p>Entre les deux, les couleurs peuvent être rendues accessibles&nbsp;:</p>
    <ul>
      <li>
        en ajoutant un ombrage sur le texte (ex:
        <code>text-shadow: 0 0 3px rgba(0, 0, 0, 0.7);</code>
        si le texte est blanc). Ça ne passera pas à la validation mais ça améliore
        la lisibilité&nbsp;; c’est ce qui est utilisé pour les boutons
      </li>
      <li>
        en augmentant la taille du texte au delà de 24px. Ça passe à la validation ;
        c’est ce qui est utilisé pour les framatitres (marqués d’un
        <icon
          name="header"
          label="Framatitre"
          sr-only
        />
        dans le tableau)
      </li>
    </ul>
    <p>
      En règle générale, lorsqu’on veut distinguer plusieurs éléments similaires
      (par exemple des boutons),
      il vaut mieux utiliser <strong>des symboles plutôt que des couleurs</strong>
      (on peut aussi combiner les 2).
    </p>
    <p>
      Pour que les lecteurs d’écran ne lisent pas les caractères unicodes
      correspondants aux icônes Fork Awesome (ils sont incompréhensibles),
      il faut respecter cette syntaxe&nbsp;:
    </p>
    <pre>&lt;i class="fa fa-fighter-jet" aria-hidden="true"&gt;&lt;/i&gt;</pre>
    <p>
      De même, si l’icône est liée à une action (lien, bouton, etc),
      on applique la même logique qu’avec les images en fournissant
      un texte alternatif pour les lecteurs d’écran et/ou un <code lang="en">title</code>.
      Exemple&nbsp;avec ce bouton
      <a
        href="https://framasoft.org"
        class="btn btn-sm btn-outline-secondary"
        title="se rendre sur Framasoft"
      >
        <i
          class="fa fa-fighter-jet"
          aria-hidden="true"
        ></i>
        <span class="sr-only">Framasoft</span>
      </a>
    </p>
    <pre>&lt;a href="https://framasoft.org" class="btn btn-sm btn-outline-secondary" title="se rendre sur Framasoft"&gt;
  &lt;i class="fa fa-fighter-jet" aria-hidden="true"&gt;&lt;/i&gt;
  &lt;span class="sr-only"&gt;Framasoft&lt;/span&gt;
&lt;/a&gt;</pre>

    <h2>Typographie</h2>
    <ul>
      <li>
        Pensez à mettre des espaces insécables devant les signes de
        ponctuation double (:!?; etc.)
        ou avec les guillemets français («»).<br />
        Rappel&nbsp;: le code HTML de l’espace insécable est &amp;nbsp;
      </li>
      <li>
        Utilisez des apostrophes typographiques<br />
        Rappel&nbsp;: le code HTML de l’apostrophe typographique est &amp;rsquo;
      </li>
      <li>
        Même si c’est tentant, on ne met pas de majuscule au milieu de
        Framasoft, Framapad… Une au début suffit.
      </li>
    </ul>
  </b-card>
</template>
