<template>
  <b-row>
    <b-col md="12">
      <h1>Images</h1>
      <p>
        Les sources de toutes ces images se trouvent dans
        <a :href="`${$t('/')}img/sources-logo-set.svg`">ce fichier <abbr>.svg</abbr></a>.
        Les emblèmes sont créés à partir des icônes de
        <a href="https://forkawesome.github.io/Fork-Awesome/">Fork-Awesome</a>
        pour les utiliser dans Inkscape, il faut ajouter le fichier <abbr>.ttf</abbr>
        dans votre dossier <code>~/.fonts</code> (sous Linux).
      </p>
    </b-col>
    <b-col md="8">
      <h2>Logo</h2>
      <b-row>
        <p class="col-sm-6 text-center">
          <img
            :src="`${$t('/')}img/biglogo.png`"
            alt=""
            style="width:300px"
          />
        </p>
        <p class="col-sm-6 text-center">
          <img
            :src="`${$t('/')}img/biglogo-noir.png`"
            alt=""
            style="width:300px"
          />
        </p>
        <ul class="col-sm-12 list-inline text-center">
          <li
            v-for="img in ['', '-bleu', '-rouge', '-vert', '-jaune']"
            :key="img"
            class="list-inline-item"
          >
            <img
              :src="`${$t('/')}img/logo${img}.png`"
              alt=""
            />
          </li>
        </ul>
      </b-row>
    </b-col>

    <b-col md="4">
      <b-card bg-variant="light">
        <p>
          Historiquement, les <cite>Pingouins</cite> de {{ $t('people.lldemars') }}
          sont des manchots&nbsp;: ils ne peuvent pas voler.
        </p>
        <p class="text-center">
          <img
            :src="`${$t('/')}img/pingouinVolantRefait.png`"
            alt=""
            style="width:120px"
          />
        </p>
        <p>
          Ce manchot
          (<a href="http://tofz.org/?displaypic=.priv8%2Fpingouins%2F42.jpg&amp;non_lr=">
            planche originale
          </a>)
          a été choisi car il sort de sa condition en agissant différemment de ses congénères.
          Ça lui demande de gros efforts aussi bien physiquement que socialement
          et puis il a un air un peu cinglé aussi… un peu comme bien des libristes 😉
        </p>
      </b-card>
    </b-col>

    <b-col md="12">
      <h2>Icônes</h2>
      <h3>Apple Touch Icons</h3>
      <ul class="list-inline">
        <li
          v-for="img in ['violet', 'bleu', 'rouge', 'vert', 'jaune', 'gris', 'rose']"
          :key="img"
          class="list-inline-item"
        >
          <img
            :src="`${$t('/')}img/apple-${img}.png`"
            alt=""
            width="120"
            height="120"
          />
        </li>
      </ul>
      <ul class="list-inline">
        <li
          v-for="img in ['bleu', 'rouge', 'vert', 'jaune']"
          :key="img"
          class="list-inline-item"
        >
          <img
            :src="`${$t('/')}img/fa-ati-${img}.png`"
            alt=""
            width="120"
            height="120"
          />
        </li>
      </ul>
      <h3>Favicons</h3>
      <ul class="list-inline">
        <li
          v-for="img in ['violet', 'bleu', 'rouge', 'vert', 'jaune', 'gris', 'rose']"
          :key="img"
          class="list-inline-item"
        >
          <img
            :src="`${$t('/')}img/favicon-${img}.png`"
            alt=""
          />
        </li>
      </ul>
    </b-col>
  </b-row>
</template>
