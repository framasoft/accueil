<template>
  <b-container
    id="topPglogiciel"
    class="ombre px-5"
  >
    <b-row
      align-v="center"
      align-h="center"
    >
      <b-col lg="4">
        <h1 class="violet">
          <a
            href="#topPglogiciel"
            class="bleu"
            v-html="$t('cat.logiciel.title')"
          ></a>
        </h1>
      </b-col>
      <b-col lg="5">
        <p
          class="lead"
          v-html="$t('cat.logiciel.desc')"
        ></p>
      </b-col>
      <b-col
        lg="3"
        align-self="end"
      >
        <InterNav />
      </b-col>
    </b-row>

    <hr class="trait" />

    <b-row class="mt-5">
      <b-col lg="8">
        <h3
          class="presentation"
          v-html="$t('pages.logiciel.title')"
        ></h3>
        <p
          class="blocSubTitle"
          v-html="$t('pages.logiciel.desc')"
        ></p>
        <p
          class="blocTexte"
          v-html="$t('pages.logiciel.text1')"
        ></p>
        <p
          class="blocTexte"
          v-html="$t('pages.logiciel.text2')"
        ></p>
      </b-col>

      <b-col
        lg="4"
        align-self="center"
        class="text-center"
      >
        <figure>
          <img
            :src="`${$t('/')}img/musee-windows_ll-de-mars_licence-art-libre.jpg`"
            alt=""
            class="w-75"
          />
        </figure>
      </b-col>
    </b-row>

    <b-row>
      <b-col
        v-for="frama in Object.keys($t('cat.logiciel.sites'))"
        :key="frama"
        lg="3"
      >
        <a :href="$t(`link.${frama}`)">
          <h4
            class="bleu"
            v-html="$t(`color.${frama}`)"
          ></h4>
        </a>
        <p
          :class="`miniBlocSubTitle ${$t(`icon.${frama}`)}`"
          v-html="$t(`cat.logiciel.sites.${frama}.title`)"
        ></p>
        <p
          class="miniBlocTexte"
          v-html="$t(`cat.logiciel.sites.${frama}.desc`)"
        ></p>
      </b-col>
    </b-row>

    <InterNav />
  </b-container>
</template>

<script>
import InterNav from '../../partials/InterNav.vue';

export default {
  components: {
    InterNav,
  },
};
</script>
